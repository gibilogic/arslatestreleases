<?php
/**
 * @version     tmpl/default.php 2013-07-21 10:53:00Z zanardi
 * @package		  GiBi ArsLatestReleases module for Akeeba Release System
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright	  (C) 2012-2013 GiBiLogic snc. All rights reserved.
 * @license		  GNU/GPL v2 or later
 */
defined('_JEXEC') or die;
?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
    <?php foreach ($list as $item) : ?>
        <li>
            <a href="<?php echo $item->link ?>"><?php echo $item->cat_title . " " . $item->version ?></a>
        </li>
    <?php endforeach; ?>
</ul>
