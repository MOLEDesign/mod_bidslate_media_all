<?php
/**
 * @copyright	Copyright © 2019 BidSlate- All rights reserved.
 * @license		Copyrighted Commercial Software
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
/* Available fields:"seller", */
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_bidslate_media_all/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_bidslate_media/assets_all/js/script.js");
// $width 			= $params->get("width");

require_once(JPATH_ADMINISTRATOR.'/components/com_bidslate/helpers/loader.php');


$user = JFactory::getUser();
$userid = $user->id;

$checklistarray = json_decode($checklistarray);

$url="https://development.bidslate.com/api/apiCore.php?task=dashboard_media_all&secureKey=password&userid=".$userid;

$result = file_get_contents($url);

// Will dump a beauty json :3

$mediaarray = json_decode($result);

if ($params->get('layout') === '_:buyer') {
    require JModuleHelper::getLayoutPath('mod_bidslate_media_all', $params->get('layout', 'buyer'));
} else {
    require JModuleHelper::getLayoutPath('mod_bidslate_media_all', $params->get('layout', 'default'));
}
