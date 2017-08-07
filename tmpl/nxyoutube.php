<?php
/**
 * @version		1.1
 * @package		nx-YouTube custom field for Joomla! 3.x
 * @author		nx-designs
 * @copyright	Copyright (C) 2017 nx-designs
 * @license		http://opensource.org/licenses/GPL-2.0 GNU Public License, version 2.0
 */

defined( '_JEXEC' ) or die;

$val = $field->value;
$hidelabel = $field->fieldparams->get('hidelbl');
$box_shadow = $field->fieldparams->get('boxshadow');
$p_width = $field->fieldparams->get('width');
$p_align = $field->fieldparams->get('alignement');
$rndm = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) );
$p_classes = '';
$html = '';




if ($val == '')
{
	return;
}

// Add Class for Box Shadow if enabled
if($box_shadow){$p_classes = 'nx-boxshadow';};

// Switch between Classes for alignement & calculate offset
switch($p_align){
	case 0:
		$class = 'span'.$p_width;
		break;
	case 1:
		$class = 'span'.$p_width.' center-span';
		break;
	case 2:
		$offset = (12 - $p_width); // not divided by 2 because whole offset is left
		if(!$offset){ // $p_width = 12 means offset = 0;
			$class = 'span'.$p_width;	
		}else{
			$class = 'offset'.$offset.' span'.$p_width;
		}
		break;
}

// Cleanup Entered Value if needed and get the Video-ID
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

// Hide Fieldlabel if selected
if($hidelabel){
	$nx_fl_script = '<script>jQuery(document).ready(function(){jQuery(\'#'.$rndm.'\').parent().siblings("span.field-label").hide();});</script>';
	$html .= $nx_fl_script;
}

JFactory::getDocument()->addScript(JURI::root()."plugins/fields/nxyoutube/nxyoutube.js");
JFactory::getDocument()->addStyleSheet(JURI::root()."plugins/fields/nxyoutube/nxyoutube.css");

$html .= '<div id="'.$rndm.'" class="row-fluid">';
$html .= '<div class="'.$class.'">';
$html .= '<div class="nx-youtubefieldBox '.$p_classes.'" data-id="'.$videoID.'">'.$videoID.'</div>';
$html .= '</div>';
$html .= '</div>';


echo $html;
