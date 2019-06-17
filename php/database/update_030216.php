<?php

/**
 * Update to version 3.2.16
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add php_script_limit to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'hide_version_number' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030216', __LINE__);

if ($result===false) Response::error('Could not get current hide_version_number from database!');

if ($result->num_rows===0) {

   $query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('hide_version_number', '1')", array(LYCHEE_TABLE_SETTINGS));
   $result = Database::execute($connection, $query, 'update_030216', __LINE__);

   if ($result===false) Response::error('Could not add public_search to database!');
}


// Set version
if (Database::setVersion($connection, 'update_030216')===false) Response::error('Could not update version of database!');
