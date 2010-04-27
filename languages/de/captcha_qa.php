<?php
/**
*
* captcha_qa [Deutsch — Du]
*
* @package language
* @version $Id: captcha_qa.php 433 2010-02-24 13:15:18Z philippk $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und http://www.phpbb.de/go/ubersetzerteam
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Diese Frage dient dazu, automatische Eingaben zu erkennen und zu unterbinden.',
	'CONFIRM_QUESTION_WRONG'	=> 'Du hast eine fehlerhafte Antwort auf die Bestätigungsfrage angegeben.',

	'QUESTION_ANSWERS'			=> 'Antworten',
	'ANSWERS_EXPLAIN'			=> 'Bitte gebe gültige Antworten auf die Frage ein, jede Antwort in eine Zeile.',
	'CONFIRM_QUESTION'			=> 'Frage',

	'ANSWER'					=> 'Antwort',
	'EDIT_QUESTION'				=> 'Frage bearbeiten',
	'QUESTIONS'					=> 'Fragen',
	'QUESTIONS_EXPLAIN'			=> 'Während der Registrierung wird Benutzern eine der hier festgelegten Fragen gestellt. Um dieses Plugin zu nutzen, muss mindestens eine Frage in der Standardsprache festgelegt werden. Die Fragen sollten von der Zielgruppe des Boards leicht zu beantworten sein, aber sich nicht durch eine automatisierte Suchmaschinenanfrage beantworten lassen. Eine große und regelmäßig aktualisierte Fragen-Basis wird zu besseren Ergebnissen führen. Aktiviere die strenge Prüfung, wenn die Antworten von der Punktsetzung oder der Groß- und Kleinschreibung abhängig sind.',
	'QUESTION_DELETED'			=> 'Frage gelöscht',
	'QUESTION_LANG'				=> 'Sprache',
	'QUESTION_LANG_EXPLAIN'		=> 'Die Sprache, in der die Frage und die Antworten sind.',
	'QUESTION_STRICT'			=> 'Strenge Prüfung',
	'QUESTION_STRICT_EXPLAIN'	=> 'Wenn aktiviert, wird auch auf Groß- und Kleinschreibung sowie Leerzeichen geprüft.',

	'QUESTION_TEXT'				=> 'Frage',
	'QUESTION_TEXT_EXPLAIN'		=> 'Die Frage, die bei der Registrierung gestellt wird.',

	'QA_ERROR_MSG'				=> 'Bitte fülle alle Felder aus und gebe mindestens eine Antwort an.',
	'QA_LAST_QUESTION'			=> 'Du kannst nicht alle Fragen löschen, solange das Plugin aktiv ist.',

));

?>