<?php

/**
 * @version       $Id helper.php 2013-01-15 21:41:00Z zanardi $
 * @package       Latest Releases module for Akeeba Release System
 * @author        GiBiLogic
 * @authorEmail   info@gibilogic.com
 * @authorUrl     http://www.gibilogic.com
 * @author        GiBiLogic
 * @copyright     Copyright (C) 2012-2013 GiBiLogic snc. All rights reserved.
 * @license       GNU/GPL v2 or later
 */
defined('_JEXEC') or die;

abstract class modArsLatestreleasesHelper
{

    public static function getList(&$params)
    {
        require_once JPATH_SITE . '/components/com_ars/models/browses.php';
        $model = new ArsModelBrowses();

        // Set the model state based on the module params
        $model->setState('limitstart', 0);
        $model->setState('maturity', $params->get('maturity', 'alpha')); // not working !!
        $model->setState('rel_orderby', 'rcreated');
        $model->setState('grouping', 'normal');

        $cat_id = $params->get('category', null);
        $releases = $model->getReleases($cat_id);
        $items = array();
        $categories = array();
        foreach ($releases as $release) {
            if ($params->get('unique_category', 0) && $categories[$release->category_id]) {
                continue;
            }
            $categories[$release->category_id] = true;
            if ($params->get('unique_category', 0) == 2) {
                $release->link = JRoute::_('index.php?option=com_ars&view=category&id=' . $release->category_id);
            }
            else {
                $release->link = JRoute::_('index.php?option=com_ars&view=release&id=' . $release->id);
            }
            $items [] = $release;
            if (count($items) == $params->get('count', 5)) {
                break;
            }
        }
        return $items;
    }

}
