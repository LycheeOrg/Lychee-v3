<?php

/**
 * Update to version 3.2.4
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add small to photos
$query  = Database::prepare($connection, "SELECT `lens` FROM `?` LIMIT 1", array(LYCHEE_TABLE_PHOTOS));
$result = Database::execute($connection, $query, 'update_030204', __LINE__);

if ($result===false) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` ADD `lens` varchar(100) NOT NULL DEFAULT '' AFTER `model`", array(LYCHEE_TABLE_PHOTOS));
	$result = Database::execute($connection, $query, 'update_030204', __LINE__);

	if ($result===false) Response::error('Could not add lens-field to database!');

}

// Add image_overlay to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'image_overlay' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030204', __LINE__);

if ($result===false) Response::error('Could not get current image_overlay from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('image_overlay', '0')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030204', __LINE__);

	if ($result===false) Response::error('Could not add image_overlay to database!');

}

// Set version
if (Database::setVersion($connection, 'update_030204')===false) Response::error('Could not update version of database!');
