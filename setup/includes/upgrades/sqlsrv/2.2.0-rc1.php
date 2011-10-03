<?php
/**
 * Specific upgrades for Revolution 2.2.0-rc1
 *
 * @package setup
 * @subpackage upgrades
 */
/* handle new class creation */
$classes = array(
    'modDashboard',
    'modDashboardWidget',
    'modDashboardWidgetPlacement',
    'sources.modAccessMediaSource',
    'sources.modMediaSource',
    'sources.modMediaSourceElement',
    'sources.modMediaSourceContext',
);
if (!empty($classes)) {
    $this->createTable($classes);
}
unset($classes);

/* add hide_children_in_tree to modResource */
$class = 'modResource';
$table = $modx->getTableName($class);
$description = $this->install->lexicon('add_column',array('column' => 'hide_children_in_tree','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addField'), array($class, 'hide_children_in_tree'));

$description = $this->install->lexicon('add_index',array('index' => 'hide_children_in_tree','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addIndex'), array($class, 'hide_children_in_tree'));

/* add show_in_tree to modResource */
$class = 'modResource';
$table = $modx->getTableName($class);
$description = $this->install->lexicon('add_column',array('column' => 'show_in_tree','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addField'), array($class, 'show_in_tree'));

$description = $this->install->lexicon('add_index',array('index' => 'show_in_tree','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addIndex'), array($class, 'show_in_tree'));

/* add primary_group field and index to modUser */
$class = 'modUser';
$table = $modx->getTableName($class);
$description = $this->install->lexicon('add_column',array('column' => 'primary_group','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addField'), array($class, 'primary_group'));
$description = $this->install->lexicon('add_index',array('index' => 'primary_group','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addIndex'), array($class, 'primary_group'));

/* assign primary_group for users in at least one group based on group and member rank */
$tableUserGroups = $modx->getTableName('modUserGroup');
$tableMemberGroups = $modx->getTableName('modUserGroupMember');
$sql = "UPDATE {$table}
SET [primary_group] = (SELECT TOP 1 [user_group] FROM {$tableMemberGroups} [memb], {$tableUserGroups} [groups] WHERE [memb].[user_group] = [groups].[id] AND [memb].[member] = {$table}.[id] ORDER BY [memb].[rank] ASC, [groups].[rank] ASC, [groups].[id] ASC)
WHERE [primary_group] = 0
AND EXISTS (SELECT 1 FROM {$tableMemberGroups} WHERE {$tableMemberGroups}.[member] = {$table}.[id])";
$description = $this->install->lexicon('update_table_column_data',array('table' => $table, 'column' => 'primary_group', 'class' => $class));
$this->processResults($class, $description, $sql);

/* add dashboard field/index to modUserGroup */
$class = 'modUserGroup';
$table = $modx->getTableName($class);
$description = $this->install->lexicon('add_column',array('column' => 'dashboard','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addField'), array($class, 'dashboard'));
$description = $this->install->lexicon('add_index',array('index' => 'dashboard','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addIndex'), array($class, 'dashboard'));

/* add rank to modContext */
$class = 'modContext';
$table = $modx->getTableName($class);
$description = $this->install->lexicon('add_column',array('column' => 'rank','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addField'), array($class, 'rank'));
$description = $this->install->lexicon('add_index',array('index' => 'rank','table' => $table));
$this->processResults($class, $description, array($modx->manager, 'addIndex'), array($class, 'rank'));

/* add sources.modAccessMediaSource to principal_targets */
/** @var modSystemSetting $setting */
$setting = $modx->getObject('modSystemSetting',array(
    'key' => 'principal_targets',
));
if ($setting) {
    $value = $setting->get('value');
    $value = explode(',',$value);
    $value[] = 'sources.modAccessMediaSource';
    $value = array_unique($value);
    $setting->set('value',implode(',',$value));
    $setting->save();
}

/* media sources upgrades */
include dirname(dirname(__FILE__)).'/common/2.2-media-sources.php';