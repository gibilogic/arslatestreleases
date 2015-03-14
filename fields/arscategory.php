<?php

/*
 *      @version       fields/arscategory.php 2013-07-21 10:58:00Z zanardi
 *      @package       GiBi ArsLatestReleases
 *      @author        GiBiLogic
 *      @authorUrl     http://www.gibilogic.com
 *      @authorEmail   info@gibilogic.com
 *      @copyright     Copyright (C) 2012-2013 GiBiLogic snc - All rights reserved.
 *      @license       GNU/GPL v2 or later
 */
defined('_JEXEC') or die('The way is shut!');
jimport('joomla.html.html');
jimport('joomla.form.formfield');

class JFormFieldArscategory extends JFormFieldList
{

    protected $type = 'arscategory';

    protected function getInput()
    {
        $query = "SELECT `id`, `title` FROM `#__ars_categories` WHERE `published` = '1'";
        $db = JFactory::getDBO();
        $db->setQuery($query);

        $list = array();
        $list[] = JHTML::_('select.option', '', '-- ' . JText::_('MOD_ARSLATESTRELEASES_FIELD_CATEGORY_SELECT') . ' --', 'id', 'title');
        $list = array_merge($list, $db->loadObjectList());

        return JHTML::_('select.genericlist', $list, $this->name, '', 'id', 'title', $this->value, $this->id);
    }

}
