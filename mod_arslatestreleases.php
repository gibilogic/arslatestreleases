<?php
/**
 * @version     mod_arslatestreleases.php 2013-07-21 10:58:00Z zanardi
 * @package     GiBi ArsLatestReleases module for Akeeba Release System
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2012-2013 GiBiLogic snc. All rights reserved.
 * @license     GNU/GPL v2 or later
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';
$list = modArsLatestreleasesHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_arslatestreleases', $params->get('layout', 'default'));