<?php

/**
 * Update to version 3.2.13
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add lang to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'layout' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030213', __LINE__);

if ($result===false) Response::error('Could not get current lang from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "UPDATE `?` SET `key`='layout' WHERE `key`='justified_layout'", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030213', __LINE__);

	if ($result===false) Response::error('Could not rename justified_layout!');

}

// Set version
if (Database::setVersion($connection, 'update_030213')===false) Response::error('Could not update version of database!');
