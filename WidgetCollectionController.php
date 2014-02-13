<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2008-2010 Martijn van der Kleijn <martijn.niji@gmail.com>
 *
 * This file is part of Wolf CMS. Wolf CMS is licensed under the GNU GPLv3 license.
 * Please see license.txt for the full license text.
 */

/**
 * The WidgetCollection is a toolkit for Wolf CMS
 * to enrich your website experience.
 *
 * @package Plugins
 * @subpackage widget_collection
 *
 * @author Lech H. Conde <lech@zyrx.com.mx>
 * @copyright Lech H. Conde, 2014
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 *
 * @author Lech H. Conde <lech@zyrx.com.mx>
 * @copyright Lech H. Conde, 2014
 */
class WidgetCollectionController extends PluginController {

    public function __construct() {
        $this->setLayout('backend');
        $this->assignToLayout('sidebar', new View('../../plugins/widget_collection/views/sidebar'));
    }

    public function index() {
        $this->documentation();
    }

    public function documentation() {
        $this->display('skeleton/views/documentation');
    }

    function settings() {
        /** You can do this...
        $tmp = Plugin::getAllSettings('skeleton');
        $settings = array('my_setting1' => $tmp['setting1'],
                          'setting2' => $tmp['setting2'],
                          'a_setting3' => $tmp['setting3']
                         );
        $this->display('comment/views/settings', $settings);
         *
         * Or even this...
         */

        $this->display('skeleton/views/settings', Plugin::getAllSettings('skeleton'));
    }
}