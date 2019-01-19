<?php

/**
 * Update to version 3.2.10
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add license to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'deleteImported' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030210', __LINE__);

if ($result===false) Response::error('Could not load settings from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` engine=InnoDB", array(LYCHEE_TABLE_ALBUMS));
	$result = Database::execute($connection, $query, 'update_030210', __LINE__);
	$query  = Database::prepare($connection, "ALTER TABLE `?` engine=InnoDB", array(LYCHEE_TABLE_LOG));
	$result = Database::execute($connection, $query, 'update_030210', __LINE__);
	$query  = Database::prepare($connection, "ALTER TABLE `?` engine=InnoDB", array(LYCHEE_TABLE_PHOTOS));
	$result = Database::execute($connection, $query, 'update_030210', __LINE__);
	$query  = Database::prepare($connection, "ALTER TABLE `?` engine=InnoDB", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030210', __LINE__);

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('deleteImported', 1)", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030210', __LINE__);


	if ($result===false) Response::error('Could not add new setting to database!');
	// Set version if successful
	elseif (Database::setVersion($connection, 'update_030210')===false) Response::error('Could not update version of database!');

}
