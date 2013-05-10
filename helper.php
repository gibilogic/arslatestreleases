<?php defined('_JEXEC') or die;
/**
 * @version       $Id helper.php 2013-01-15 21:41:00Z zanardi $
 * @package       Latest Releases module for Akeeba Release System
 * @author        GiBiLogic
 * @authorEmail   info@gibilogic.com
 * @authorUrl     http://www.gibilogic.com
 * @author        GiBiLogic
 * @copyright	  Copyright (C) 2012-2013 GiBiLogic snc. All rights reserved.
 * @license       GNU/GPL v2 or later
 */

abstract class modArsLatestreleasesHelper
{
    public static function getList(&$params)
    {
        require_once JPATH_SITE.DS.'components'.DS.'com_ars'.DS.'models'.DS.'browses.php';
        $model = new ArsModelBrowses();

	// Set the model state based on the module params
	$model->setState('limitstart', 0);
	$model->setState('maturity', $params->get('maturity', 'alpha') ); // not working !!
        $model->setState('rel_orderby', 'rcreated');
        
        $cat_id = $params->get('category', null);

	$items = array_slice( $model->getReleases($cat_id), 0, $params->get('count',5) );
        foreach( $items as &$item ) {
            $item->link = JRoute::_( 'index.php?option=com_ars&view=release&id=' . $item->id );
        }
	return $items;
    }
}
