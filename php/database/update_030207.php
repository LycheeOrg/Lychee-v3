<?php

/**
 * Update to version 3.2.7
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add small to photos
$query  = Database::prepare($connection, "SELECT `license` FROM `?` LIMIT 1", array(LYCHEE_TABLE_ALBUMS));
$result = Database::execute($connection, $query, 'update_030207', __LINE__);

if ($result===false) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` ADD `license` varchar(20) DEFAULT 'none'", array(LYCHEE_TABLE_ALBUMS));
	$result = Database::execute($connection, $query, 'update_030207', __LINE__);

	if ($result===false) Response::error('Could not add license-field to database!');

}

// Set version
if (Database::setVersion($connection, 'update_030207')===false) Response::error('Could not update version of database!');
