<?php defined('_JEXEC') or die;
/**
 * @version     $Id tmpl/default.php 2012-06-29 09:32:00Z zanardi $
 * @package		  Latest Releases module for Akeeba Release System
 * @author      GiBiLogic
 * @copyright	  Copyright (C) 2012 GiBiLogic snc. All rights reserved.
 * @license		  GNU General Public License version 2 or later; see LICENSE.txt
 */

?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<li>
    <a href="<?php echo $item->link ?>"><?php echo $item->cat_title . " " . $item->version ?></a>
	</li>
<?php endforeach; ?>
</ul>
