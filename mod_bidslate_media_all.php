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

/**
	$db = JFactory::getDBO();
	$db->setQuery("SELECT * FROM #__mod_bidslate_content where del=0 and module_id=".$module->id);
	$objects = $db->loadAssocList();
*/

$checklistarray = array(
    0 => array (
        "name" => "poster_art", 
        "label" => "POSTER_ART"
    ),
    1 => array (
        "name" => "master",
        "label" => "MASTER"
    ),
    2 => array (
        "name" => "trailer",
        "label" => "TRAILER"
    ),
    3 => array (
        "name" => "cc",
        "label" => "CC"
    ),
    4 => array (
        "name" => "me",
        "label" => "ME"
    )
);

$titlearray = array(
    0 => array(
        "title" => "Fear of Family",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2019-02-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "poster_art" => "https://storage.googleapis.com/bidslate_production_bucket/4402_8dc6b24f708a5973d5689f7afbcc4681.jpg",
        "file_poster_art" => "fear_poster.jpg",
        "file_master" => "fear_master.mov",
        "file_trailer" => "fear_trailer.mov",
        "file_cc" => "fear_caption.srt",
        "file_me" => "fear_me.pdf"
    ),
    1 => array(
        "title" => "Show Business",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2019-01-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "poster_art" => "https://storage.googleapis.com/bidslate_production_bucket/4548_0a10f7e836fe704f20e3d286268b1510.jpg",
        "file_poster_art" => "show_poster.jpg",
        "file_master" => "show_master.mov",
        "file_trailer" => "show_trailer.mov",
        "file_cc" => "show_caption.srt",
        "file_me" => "show_me.pdf"
    ),
    2 => array(
        "title" => "Before they were Pros",
        "episode_title" => "Basketball",
        "season" => 1,
        "episode" => 1,
        "type" => 3,
        "type_text" => "SERIES",
        "last_modified" => "2019-04-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "poster_art" => "https://storage.googleapis.com/bidslate_production_bucket/1117_6f6e40f69e439f7aa739b9f5dad378cc.jpg",
        "file_poster_art" => "btwp_poster.jpg",
        "file_master" => "btwp_master.mov",
        "file_trailer" => "btwp_trailer.mov",
        "file_cc" => "btwp_caption.srt",
        "file_me" => "btwp_me.pdf"
    ),
    3 => array(
        "title" => "Before they were Pros",
        "episode_title" => "Basketball",
        "season" => 1,
        "episode" => 2,
        "type" => 3,
        "type_text" => "SERIES",
        "last_modified" => "2019-04-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "poster_art" => "https://storage.googleapis.com/bidslate_production_bucket/1117_6f6e40f69e439f7aa739b9f5dad378cc.jpg",
        "file_poster_art" => "btwp_poster.jpg",
        "file_master" => "btwp_master.mov",
        "file_trailer" => "btwp_trailer.mov",
        "file_cc" => "btwp_caption.srt",
        "file_me" => "btwp_me.pdf"
    ),
    4 => array(
        "title" => "Worth",
        "type" => 2,
        "type_text" => "SHORT",
        "last_modified" => "2019-03-10",
        "status" => 0,
        "status_text" => "UNPUBLISHED",
        "poster_art" => "https://storage.googleapis.com/bidslate_production_bucket/4402_8dc6b24f708a5973d5689f7afbcc4681.jpg",
        "file_poster_art" => "woth_poster.jpg",
        "file_master" => "",
        "file_trailer" => "worth_trailer.mov",
        "file_cc" => "worth_caption.srt",
        "file_me" => ""
    ),
    5 => array(
        "title" => "Mile Marker",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2018-12-10",
        "status" => 2,
        "status_text" => "ARCHIVED",
        "poster_art" => "https://storage.googleapis.com/bidslate_production_bucket/1014_dfc2222e8ce3a8579a39fddb4c660677.jpg",
        "file_poster_art" => "mile_poster.jpg",
        "file_master" => "mile_master.mov",
        "file_trailer" => "mile_trailer.mov",
        "file_cc" => "mile_caption.srt",
        "file_me" => "mile_me.pdf"
    )
);

require JModuleHelper::getLayoutPath('mod_bidslate_media', $params->get('layout', 'default'));