<?php
/**
 * Get a list of system settings
 *
 * @param string $key (optional) If set, will search by this value
 * @param integer $start (optional) The record to start at. Defaults to 0.
 * @param integer $limit (optional) The number of records to limit to. Defaults
 * to 10.
 * @param string $sort (optional) The column to sort by. Defaults to name.
 * @param string $dir (optional) The direction of the sort. Defaults to ASC.
 *
 * @package modx
 * @subpackage processors.system.settings
 */
if (!$modx->hasPermission('settings')) return $modx->error->failure($modx->lexicon('permission_denied'));
$modx->lexicon->load('setting');

/* setup default properties */
//$isLimit = !empty($scriptProperties['limit']);
$start = $modx->getOption('start',$scriptProperties,0);
$limit = $modx->getOption('limit',$scriptProperties,0);
$sort = $modx->getOption('sort',$scriptProperties,'key');
$dir = $modx->getOption('dir',$scriptProperties,'ASC');
$key = $modx->getOption('key',$scriptProperties,'');
$namespace = $modx->getOption('namespace',$scriptProperties,'');
$area = $modx->getOption('area',$scriptProperties,'');

$criteria = array();
if (!empty($key)) {
    $criteria[] = array(
        'modSystemSetting.key:LIKE' => '%'.$key.'%',
        'OR:Entry.value:LIKE' => '%'.$key.'%',
        'OR:modSystemSetting.value:LIKE' => '%'.$key.'%',
        'OR:Description.value:LIKE' => '%'.$key.'%',
    );
}
if (!empty($namespace)) {
    $criteria[] = array('namespace' => $namespace);
}
if (!empty($area)) {
    $criteria[] = array('area' => $area);
}

$settingsResult = $modx->call('modSystemSetting', 'listSettings', array(&$modx, $criteria, array($sort=> $dir), $limit, $start));
$count = $settingsResult['count'];
$settings = $settingsResult['collection'];

$list = array();
foreach ($settings as $setting) {
    $settingArray = $setting->toArray();
    $k = 'setting_'.$settingArray['key'];

    /* if 3rd party setting, load proper text, fallback to english */
    $modx->lexicon->load('en:'.$setting->get('namespace').':default');
    $modx->lexicon->load($setting->get('namespace').':default');

    /* get translated area text */
    if ($modx->lexicon->exists('area_'.$setting->get('area'))) {
        $settingArray['area_text'] = $modx->lexicon('area_'.$setting->get('area'));
    } else {
        $settingArray['area_text'] = $settingArray['area'];
    }

    /* get translated name and description text */
    if (empty($settingArray['description_trans'])) {
        if ($modx->lexicon->exists($k.'_desc')) {
            $settingArray['description_trans'] = $modx->lexicon($k.'_desc');
            $settingArray['description'] = $k.'_desc';
        } else {
            $settingArray['description_trans'] = $settingArray['description'];
        }
    } else {
        $settingArray['description'] = $settingArray['description_trans'];
    }
    if (empty($settingArray['name_trans'])) {
        if ($modx->lexicon->exists($k)) {
            $settingArray['name_trans'] = $modx->lexicon($k);
            $settingArray['name'] = $k;
        } else {
            $settingArray['name_trans'] = $settingArray['key'];
        }
    } else {
        $settingArray['name'] = $settingArray['name_trans'];
    }

    $settingArray['oldkey'] = $settingArray['key'];
    
    $settingArray['editedon'] = $setting->get('editedon') == '-001-11-30 00:00:00' || $settingArray['editedon'] == '0000-00-00 00:00:00' || $settingArray['editedon'] == null
        ? ''
        : strftime('%b %d, %Y %I:%M %p',strtotime($setting->get('editedon')));

    $list[] = $settingArray;
}

return $this->outputArray($list,$count);