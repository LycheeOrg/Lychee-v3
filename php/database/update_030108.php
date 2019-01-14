<?php

/**
 * Update to version 3.1.8
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add minimum takestamp to albums
$query  = Database::prepare($connection, "SELECT `min_takestamp` FROM `?` LIMIT 1", array(LYCHEE_TABLE_ALBUMS));
$result = Database::execute($connection, $query, 'update_030108', __LINE__);

if ($result===false) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` ADD `min_takestamp` INT(11) NOT NULL", array(LYCHEE_TABLE_ALBUMS));
	$result = Database::execute($connection, $query, 'update_030108', __LINE__);

	if ($result===false) Response::error('Could not add min_takestamp to database!');

}

// Add maximum takestamp to albums
$query  = Database::prepare($connection, "SELECT `max_takestamp` FROM `?` LIMIT 1", array(LYCHEE_TABLE_ALBUMS));
$result = Database::execute($connection, $query, 'update_030108', __LINE__);

if ($result===false) {

	$query  = Database::prepare($connection, "ALTER TABLE `?` ADD `max_takestamp` INT(11) NOT NULL", array(LYCHEE_TABLE_ALBUMS));
	$result = Database::execute($connection, $query, 'update_030108', __LINE__);

	if ($result===false) Response::error('Could not add max_takestamp to database!');

}

// Do the intial setup of the takestamps
$query  = Database::prepare($connection, "UPDATE ? a SET a.min_takestamp = (SELECT IFNULL(min(takestamp), 0) FROM ? WHERE a.id = album), a.max_takestamp = (SELECT IFNULL(max(takestamp), 0) FROM ? WHERE a.id = album)",
							array(LYCHEE_TABLE_ALBUMS, LYCHEE_TABLE_PHOTOS, LYCHEE_TABLE_PHOTOS));
$result = Database::execute($connection, $query, 'update_030108', __LINE__);

// Set version
if (Database::setVersion($connection, 'update_030108')===false) Response::error('Could not update version of database!');

?>
