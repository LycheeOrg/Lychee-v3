<?php

/**
 * Update to version 3.2.2
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add lang to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'justified_layout' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030202', __LINE__);

if ($result===false) Response::error('Could not get current lang from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('justified_layout', '0')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030202', __LINE__);

	if ($result===false) Response::error('Could not add justified_layout to database!');

}

// Set version
if (Database::setVersion($connection, 'update_030202')===false) Response::error('Could not update version of database!');
