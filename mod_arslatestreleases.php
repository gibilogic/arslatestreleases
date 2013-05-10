<?php defined('_JEXEC') or die;
/**
 * @version     $Id mod_arslatestreleases.php 2013-01-15 21:40:00Z zanardi $
 * @package	Latest Releases module for Akeeba Release System
 * @author      GiBiLogic
 * @authorEmail info@gibilogic.com
 * @authorUrl   http://www.gibilogic.com
 * @copyright	Copyright (C) 2012-2013 GiBiLogic snc. All rights reserved.
 * @license     GNU/GPL v2 or later
 */

require_once dirname(__FILE__).'/helper.php';
$list = modArsLatestreleasesHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_arslatestreleases', $params->get('layout', 'default'));