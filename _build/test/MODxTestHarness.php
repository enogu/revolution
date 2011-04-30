<?php
/**
 * MODX Revolution
 *
 * Copyright 2006-2011 by MODX, LLC.
 * All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modx-test
 */
require_once dirname(__FILE__).'/MODxTestCase.php';
/**
 * Main MODX test harness.
 *
 * Use by running this in command-line:
 *
 * sh modxtestharness.sh
 *
 * @package modx-test
 */
class MODxTestHarness {
    /**
     * @var modX Static reference to modX instance.
     */
    public static $modx = null;
    /**
     * @var array Static reference to configuration array.
     */
    public static $properties = array();

    /**
     * Load all Test Suites for xPDO Test Harness.
     */
    public static function suite() {
        $suite = new MODxTestHarness('MODxHarness');
        return $suite;
    }

    /**
     * Grab a persistent instance of the xPDO class to share connection data
     * across multiple tests and test suites.
     * 
     * @param array $options An array of configuration parameters.
     * @return xPDO An xPDO object instance.
     */
    public static function _getConnection($options = array()) {
        $modx = MODxTestHarness::$modx;
        if (is_object($modx)) {
            if (!$modx->request) { $modx->getRequest(); }
            if (!$modx->error) { $modx->request->loadErrorHandler(); }
            $modx->error->reset();
            MODxTestHarness::$modx = $modx;
            return MODxTestHarness::$modx;
        }
        
        /* include config.core.php */
        $properties = array();
        require_once strtr(realpath(dirname(dirname(dirname(__FILE__)))) . '/config.core.php','\\','/');
        require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
        require_once MODX_CORE_PATH.'model/modx/modx.class.php';
        include_once strtr(realpath(dirname(__FILE__)) . '/properties.inc.php','\\','/');
        if (!defined('MODX_REQP')) {
            define('MODX_REQP',false);
        }
        $modx = new modX(null,$properties);
        $ctx = !empty($options['ctx']) ? $options['ctx'] : 'web';
        $modx->initialize($ctx);

        $debug = !empty($options['debug']);
        $modx->setDebug($debug);
        if (!empty($properties['logTarget'])) $modx->setLogTarget($properties['logTarget']);
        if (!empty($properties['logLevel'])) $modx->setLogLevel($properties['logLevel']);
        $modx->user = $modx->newObject('modUser');
        $modx->user->set('id',$modx->getOption('modx.test.user.id',null,1));
        $modx->user->set('username',$modx->getOption('modx.test.user.username',null,'test'));

        $modx->getRequest();
        $modx->getParser();
        $modx->request->loadErrorHandler();
        
        MODxTestHarness::$modx = $modx;
        return $modx;
    }
}