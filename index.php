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

Plugin::setInfos(array(
    'id'          => 'widget_collection',
    'title'       => __('Widget Collection'),
    'description' => __('A toolkit for Wolf CMS to enrich your website experience.'),
    'version'     => '1.0.0',
   	'license'     => 'GPL',
	'author'      => 'Lech H. Conde',
    'website'     => 'http://www.zyrx.com.mx/wolfcms/widget_collection',
    'update_url'  => 'http:/www.zyrx.com.mx/wolfcms/plugin-versions.xml',
    'require_wolf_version' => '0.5.5'
));

Plugin::addController('widget_collection', __('Widget Collection'), 'admin_view', false);