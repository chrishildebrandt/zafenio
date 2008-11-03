<?php
/**
* Database auth plug-in for phpBB3
*
* Authentication plug-ins is largely down to Sergey Kanareykin, our thanks to him.
*
* This is for authentication via the integrated user table
*
* @package login
* @version $Id: auth_db.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Login function
*/
function login_db(&$username, &$password)
{
	global $db, $config;

	// do not allow empty password
	if (!$password)
	{
		return array(
			'status'	=> LOGIN_ERROR_PASSWORD,
			'error_msg'	=> 'NO_PASSWORD_SUPPLIED',
			'user_row'	=> array('user_id' => ANONYMOUS),
		);
	}

	if (!$username)
	{
		return array(
			'status'	=> LOGIN_ERROR_USERNAME,
			'error_msg'	=> 'LOGIN_ERROR_USERNAME',
			'user_row'	=> array('user_id' => ANONYMOUS),
		);
	}

	$sql = 'SELECT user_id, username, user_password, user_passchg, user_pass_convert, user_email, user_type, user_login_attempts
		FROM ' . USERS_TABLE . "
		WHERE username_clean = '" . $db->sql_escape(utf8_clean_string($username)) . "'";
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	if (!$row)
	{
		return array(
			'status'	=> LOGIN_ERROR_USERNAME,
			'error_msg'	=> 'LOGIN_ERROR_USERNAME',
			'user_row'	=> array('user_id' => ANONYMOUS),
		);
	}

	// If there are too much login attempts, we need to check for an confirm image
	// Every auth module is able to define what to do by itself...
	if ($config['max_login_attempts'] && $row['user_login_attempts'] >= $config['max_login_attempts'])
	{
		$confirm_id = request_var('confirm_id', '');
		$confirm_code = request_var('confirm_code', '');

		// Visual Confirmation handling
		if (!$confirm_id)
		{
			return array(
				'status'		=> LOGIN_ERROR_ATTEMPTS,
				'error_msg'		=> 'LOGIN_ERROR_ATTEMPTS',
				'user_row'		=> $row,
			);
		}
		else
		{
			global $user;

			$sql = 'SELECT code
				FROM ' . CONFIRM_TABLE . "
				WHERE confirm_id = '" . $db->sql_escape($confirm_id) . "'
					AND session_id = '" . $db->sql_escape($user->session_id) . "'
					AND confirm_type = " . CONFIRM_LOGIN;
			$result = $db->sql_query($sql);
			$confirm_row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			if ($confirm_row)
			{
				if (strcasecmp($confirm_row['code'], $confirm_code) === 0)
				{
					$sql = 'DELETE FROM ' . CONFIRM_TABLE . "
						WHERE confirm_id = '" . $db->sql_escape($confirm_id) . "'
							AND session_id = '" . $db->sql_escape($user->session_id) . "'
							AND confirm_type = " . CONFIRM_LOGIN;
					$db->sql_query($sql);
				}
				else
				{
					return array(
						'status'		=> LOGIN_ERROR_ATTEMPTS,
						'error_msg'		=> 'CONFIRM_CODE_WRONG',
						'user_row'		=> $row,
					);
				}
			}
			else
			{
				return array(
					'status'		=> LOGIN_ERROR_ATTEMPTS,
					'error_msg'		=> 'CONFIRM_CODE_WRONG',
					'user_row'		=> $row,
				);
			}
		}
	}

	// If the password convert flag is set we need to convert it
	if ($row['user_pass_convert'])
	{
		// in phpBB2 passwords were used exactly as they were sent, with addslashes applied
		$password_old_format = isset($_REQUEST['password']) ? (string) $_REQUEST['password'] : '';
		$password_old_format = (!STRIP) ? addslashes($password_old_format) : $password_old_format;
		$password_new_format = '';

		set_var($password_new_format, stripslashes($password_old_format), 'string');

		if ($password == $password_new_format)
		{
			if (!function_exists('utf8_to_cp1252'))
			{
				global $phpbb_root_path, $phpEx;
				include($phpbb_root_path . 'includes/utf/data/recode_basic.' . $phpEx);
			}

			// cp1252 is phpBB2's default encoding, characters outside ASCII range might work when converted into that encoding
			if (md5($password_old_format) == $row['user_password'] || md5(utf8_to_cp1252($password_old_format)) == $row['user_password'])
			{
				$hash = phpbb_hash($password_new_format);

				// Update the password in the users table to the new format and remove user_pass_convert flag
				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_password = \'' . $db->sql_escape($hash) . '\',
						user_pass_convert = 0
					WHERE user_id = ' . $row['user_id'];
				$db->sql_query($sql);

				$row['user_pass_convert'] = 0;
				$row['user_password'] = $hash;
			}
			else
			{
				// Although we weren't able to convert this password we have to
				// increase login attempt count to make sure this cannot be exploited
				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_login_attempts = user_login_attempts + 1
					WHERE user_id = ' . $row['user_id'];
				$db->sql_query($sql);

				return array(
					'status'		=> LOGIN_ERROR_PASSWORD_CONVERT,
					'error_msg'		=> 'LOGIN_ERROR_PASSWORD_CONVERT',
					'user_row'		=> $row,
				);
			}
		}
	}

	// Check password ...
	if (!$row['user_pass_convert'] && phpbb_check_hash($password, $row['user_password']))
	{
		// Check for old password hash...
		if (strlen($row['user_password']) == 32)
		{
			$hash = phpbb_hash($password);

			// Update the password in the users table to the new format
			$sql = 'UPDATE ' . USERS_TABLE . "
				SET user_password = '" . $db->sql_escape($hash) . "',
					user_pass_convert = 0
				WHERE user_id = {$row['user_id']}";
			$db->sql_query($sql);

			$row['user_password'] = $hash;
		}

		if ($row['user_login_attempts'] != 0)
		{
			// Successful, reset login attempts (the user passed all stages)
			$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_login_attempts = 0
				WHERE user_id = ' . $row['user_id'];
			$db->sql_query($sql);
		}

		// User inactive...
		if ($row['user_type'] == USER_INACTIVE || $row['user_type'] == USER_IGNORE)
		{
			return array(
				'status'		=> LOGIN_ERROR_ACTIVE,
				'error_msg'		=> 'ACTIVE_ERROR',
				'user_row'		=> $row,
			);
		}

		// Successful login... set user_login_attempts to zero...
		return array(
			'status'		=> LOGIN_SUCCESS,
			'error_msg'		=> false,
			'user_row'		=> $row,
		);
	}

	// Password incorrect - increase login attempts
	$sql = 'UPDATE ' . USERS_TABLE . '
		SET user_login_attempts = user_login_attempts + 1
		WHERE user_id = ' . $row['user_id'];
	$db->sql_query($sql);

	// Give status about wrong password...
	return array(
		'status'		=> LOGIN_ERROR_PASSWORD,
		'error_msg'		=> 'LOGIN_ERROR_PASSWORD',
		'user_row'		=> $row,
	);
}

?>