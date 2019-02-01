<?php

/**
 * Update to version 3.2.11
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add image_overlay_type to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'image_overlay_type' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030211', __LINE__);

if ($result===false) Response::error('Could not get current image_overlay_type from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('image_overlay_type', 'exif')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030211', __LINE__);

	if ($result===false) Response::error('Could not add image_overlay_type to database!');

}

// Add php_script_limit to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'php_script_limit' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030211', __LINE__);

if ($result===false) Response::error('Could not get current php_script_limit from database!');

if ($result->num_rows===0) {

   $query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('php_script_limit', '0')", array(LYCHEE_TABLE_SETTINGS));
   $result = Database::execute($connection, $query, 'update_030211', __LINE__);

   if ($result===false) Response::error('Could not add php_script_limit to database!');
}


// Set version
if (Database::setVersion($connection, 'update_030211')===false) Response::error('Could not update version of database!');
