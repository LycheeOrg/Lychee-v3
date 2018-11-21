<?php

/**
 * Update to version 3.2.3
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add small to photos
$query  = Database::prepare($connection, "SELECT `small` FROM `?` LIMIT 1", array(LYCHEE_TABLE_PHOTOS));
$result = Database::execute($connection, $query, 'update_030203', __LINE__);

if ($result===false) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` ADD `small` TINYINT(1) NOT NULL DEFAULT 0", array(LYCHEE_TABLE_PHOTOS));
	$result = Database::execute($connection, $query, 'update_030203', __LINE__);

	if ($result===false) Response::error('Could not add small-field to database!');

}

// Set version
if (Database::setVersion($connection, '030203')===false) Response::error('Could not update version of database!');
