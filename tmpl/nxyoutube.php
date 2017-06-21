<?php
/**
 * @version		1.0
 * @package		nx-YouTube custom field for Joomla! 3.x
 * @author		nx-designs
 * @copyright	Copyright (C) 2017 nx-designs
 * @license		http://opensource.org/licenses/GPL-2.0 GNU Public License, version 2.0
 */

defined( '_JEXEC' ) or die;

$val = $field->value;



if ($val == '')
{
	return;
}

if ((strpos($val,"https://")!==false) OR (strpos($val,"http://")!==false))
{ 
	$ytarray=explode("/", $val);
	$ytendstring=end($ytarray);
	$ytendarray=explode("?v=", $ytendstring);
	$ytendstring=end($ytendarray);
	$ytendarray=explode("&", $ytendstring);
	$videoID=$ytendarray[0];
} else {
	$videoID = $val;
}

JFactory::getDocument()->addScript(JURI::root()."plugins/fields/nxyoutube/nxyoutube.js");
JFactory::getDocument()->addStyleSheet(JURI::root()."plugins/fields/nxyoutube/nxyoutube.css");

echo '<div class="nx-youtubefieldBox" data-id="'.$videoID.'">'.$videoID.'</div>';