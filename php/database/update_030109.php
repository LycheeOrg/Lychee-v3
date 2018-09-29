<?php

/**
 * Update to version 3.1.9
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add skipDuplicates to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'lang' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030109', __LINE__);

if ($result===false) Response::error('Could not get current lang from database!');

if ($result->num_rows===0) {

	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('lang', 'en')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030109', __LINE__);

	if ($result===false) Response::error('Could not add lang to database!');

}

// Set version
if (Database::setVersion($connection, 'update_030109')===false) Response::error('Could not update version of database!');
