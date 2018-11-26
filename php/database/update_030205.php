<?php

/**
 * Update to version 3.2.5
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add small to photos
$query  = Database::prepare($connection, "SELECT `license` FROM `?` LIMIT 1", array(LYCHEE_TABLE_PHOTOS));
$result = Database::execute($connection, $query, 'update_030205', __LINE__);

if ($result===false) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` ADD `license` varchar(20) NOT NULL DEFAULT ''", array(LYCHEE_TABLE_PHOTOS));
	$result = Database::execute($connection, $query, 'update_030205', __LINE__);

	if ($result===false) Response::error('Could not add licnese-field to database!');

}

// Set version
if (Database::setVersion($connection, 'update_030205')===false) Response::error('Could not update version of database!');
