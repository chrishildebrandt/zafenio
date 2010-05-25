<?php

function zafenio_init() {
	/* TODO */
	$dom = ZLanguage::getModuleDomain('zafenio');
	return LogUtil::registerStatus('Stub only');
}

function zafenio_upgrade()
{
	/* TODO */
	$dom = ZLanguage::getModuleDomain('zafenio');
	return LogUtil::registerStatus('Stub only');
}

function zafenio_delete()
{
	$dom = ZLanguage::getModuleDomain('zafenio');
	/* Delete the module tables - example, still TODO */
	if (!DBUtil::dropTable('zafenio_pages')) {
	return LogUtil::registerError(__('Error! Table deletion failed.', $dom).' (zafenio_pages)');
	}

	if (!DBUtil::dropTable('zafenio_links')) {
	return LogUtil::registerError(__('Error! Table deletion failed.', $dom).' (zafenio_links)');
	}

	if (!DBUtil::dropTable('zafenio_referrers')) {
	return LogUtil::registerError(__('Error! Table deletion failed.', $dom).' (zafenio_referrers)');
	}

	/* Delete the module vars */
	pnModDelVar('zafenio');

	/* Delete the Admin module register */
	pnModDBInfoLoad('Admin');
	DBUtil::deleteObjectByID('admin_module', (int)pnModGetIdFromName('zafenio'), 'mid');

	return true;
}

?>