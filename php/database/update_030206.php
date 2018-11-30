<?php

/**
 * Update to version 3.2.6
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add license to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'default_license' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030206', __LINE__);

if ($result===false) Response::error('Could not get current license from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('default_license', 'none')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030206', __LINE__);

	if ($result===false) Response::error('Could not add default license to database!');

}

$query = Database::prepare($connection, "ALTER TABLE `?` ALTER `license` SET DEFAULT 'none'", array(LYCHEE_TABLE_PHOTOS));
	$result = Database::execute($connection, $query, 'update_030206', __LINE__);
	if ($result===false) Response::error('Could not change default license value.');

// Set version
if (Database::setVersion($connection, 'update_030206')===false) Response::error('Could not update version of database!');
