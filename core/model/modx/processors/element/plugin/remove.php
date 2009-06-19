<?php
/**
 * Delete a plugin.
 *
 * @param integer $id The ID of the plugin
 *
 * @package modx
 * @subpackage processors.element.plugin
 */
$modx->lexicon->load('plugin');

if (!$modx->hasPermission('delete_plugin')) return $modx->error->failure($modx->lexicon('permission_denied'));

/* get plugin */
if (empty($_POST['id'])) return $modx->error->failure($modx->lexicon('plugin_err_ns'));
$plugin = $modx->getObject('modPlugin',$_POST['id']);
if ($plugin == null) return $modx->error->failure($modx->lexicon('plugin_err_not_found'));

/* remove plugin */
if ($plugin->remove() == false) {
    return $modx->error->failure($modx->lexicon('plugin_err_remove'));
}

/* invoke OnPluginFormDelete event */
$modx->invokeEvent('OnPluginFormDelete',array(
	'id' => $plugin->get('id'),
));

/* log manager action */
$modx->logManagerAction('plugin_delete','modPlugin',$plugin->get('id'));

/* empty cache */
$cacheManager= $modx->getCacheManager();
$cacheManager->clearCache();

return $modx->error->success();