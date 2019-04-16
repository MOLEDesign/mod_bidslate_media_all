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

$titlearrayseller = array(
    0 => array(
        "title" => "Fear of Family",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2019-02-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "files_allocated" => array (
            0 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "MASTER",
                "file_name" => "fear_master.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            1 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => "POSTER_ART",
                "file_name" => "fear_poster.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            2 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "TRAILER",
                "file_name" => "fear_trailer.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            3 => array(
                "file_type" => "srt",
                "file_group" => 3,
                "file_allocation" => "CLOSE_CAPTION",
                "file_name" => "fear_caption.srt",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            4 => array(
                "file_type" => "pdf",
                "file_group" => 3,
                "file_allocation" => "M_AND_E",
                "file_name" => "fear_me.pdf",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            5 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => null,
                "file_name" => "fear_random_graphic.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            )
        )
    ),
    1 => array(
        "title" => "Show Time",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2019-02-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "files_allocated" => array (
            0 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "MASTER",
                "file_name" => "st_master.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            1 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => "POSTER_ART",
                "file_name" => "st_poster.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            2 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "TRAILER",
                "file_name" => "st_trailer.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            3 => array(
                "file_type" => "srt",
                "file_group" => 3,
                "file_allocation" => "CLOSE_CAPTION",
                "file_name" => "st_caption.srt",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            4 => array(
                "file_type" => "jpg",
                "file_group" => 3,
                "file_allocation" => null,
                "file_name" => "st_random_graphic.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            )
        )
    ),
    2 => array(
        "title" => "Unallocated",
        "type" => null,
        "type_text" => null,
        "last_modified" => null,
        "status" => null,
        "status_text" => null,
        "files_allocated" => array (
            0 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => null,
                "file_name" => "something.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            1 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => null,
                "file_name" => "st_poster.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            2 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => null,
                "file_name" => "st_trailer.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            3 => array(
                "file_type" => "srt",
                "file_group" => 3,
                "file_allocation" => null,
                "file_name" => "st_caption.srt",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            ),
            4 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => null,
                "file_name" => "st_random_graphic.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => null,
                "file_download" => null
            )
        )
    )
);


$titlearraybuyer = array(
    0 => array(
        "title" => "Fear of Family",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2019-02-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "files_allocated" => array (
            0 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "MASTER",
                "file_name" => "fear_master.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            1 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => "POSTER_ART",
                "file_name" => "fear_poster.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            2 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "TRAILER",
                "file_name" => "fear_trailer.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            3 => array(
                "file_type" => "srt",
                "file_group" => 3,
                "file_allocation" => "CLOSE_CAPTION",
                "file_name" => "fear_caption.srt",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            4 => array(
                "file_type" => "pdf",
                "file_group" => 3,
                "file_allocation" => "M_AND_E",
                "file_name" => "fear_me.pdf",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            5 => array(
                "file_type" => "jpg",
                "file_group" => 3,
                "file_allocation" => null,
                "file_name" => "fear_random_graphic.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            )
        )
    ),
    1 => array(
        "title" => "Show Time",
        "type" => 1,
        "type_text" => "FEATURE",
        "last_modified" => "2019-02-01",
        "status" => 1,
        "status_text" => "PUBLISHED",
        "files_allocated" => array (
            0 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "MASTER",
                "file_name" => "st_master.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            1 => array(
                "file_type" => "jpg",
                "file_group" => 2,
                "file_allocation" => "POSTER_ART",
                "file_name" => "st_poster.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            2 => array(
                "file_type" => "mov",
                "file_group" => 1,
                "file_allocation" => "TRAILER",
                "file_name" => "st_trailer.mov",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            3 => array(
                "file_type" => "srt",
                "file_group" => 3,
                "file_allocation" => "CLOSE_CAPTION",
                "file_name" => "st_caption.srt",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            ),
            4 => array(
                "file_type" => "jpg",
                "file_group" => 3,
                "file_allocation" => null,
                "file_name" => "st_random_graphic.jpg",
                "file_status" => "PROCESSED",
                "file_low_rez_download" => "index.php",
                "file_download" => "index.php"
            )
        )
    )
);

if ($params->get('layout') === '_:buyer') {
    require JModuleHelper::getLayoutPath('mod_bidslate_media', $params->get('layout', 'buyer'));
} else {
    require JModuleHelper::getLayoutPath('mod_bidslate_media', $params->get('layout', 'default'));
}
