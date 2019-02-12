<?php

/**
 * Update to version 3.2.12
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add useExiftool to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'useExiftool' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030212', __LINE__);

if ($result===false) Response::error('Could not get useExiftool from database!');

if ($result->num_rows===0) {

   $query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('useExiftool', '0')", array(LYCHEE_TABLE_SETTINGS));
   $result = Database::execute($connection, $query, 'update_030212', __LINE__);

   if ($result===false) Response::error('Could not add useExiftool to database!');
}


// Set version
if (Database::setVersion($connection, 'update_030212')===false) Response::error('Could not update version of database!');
