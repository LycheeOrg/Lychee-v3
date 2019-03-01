<?php

/**
 * Update to version 3.2.14
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

$query  = Database::prepare($connection, "ALTER TABLE `?` ADD PRIMARY KEY( `key`); ", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030214', __LINE__);

if ($result===false) Response::error('Could not add primary key to settings! Clean up duplicate setting keys!');

$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'full_photo' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030214', __LINE__);

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('full_photo', '1')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030214', __LINE__);

	if ($result===false) Response::error('Could not insert setting key full_photo!');
}

// Set version
if (Database::setVersion($connection, 'update_030214')===false) Response::error('Could not update version of database!');
