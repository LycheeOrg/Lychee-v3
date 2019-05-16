<?php

/**
 * Update to version 3.2.15
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add php_script_limit to settings
$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'public_search' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030215', __LINE__);

if ($result===false) Response::error('Could not get current public_search from database!');

if ($result->num_rows===0) {

   $query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('public_search', '0')", array(LYCHEE_TABLE_SETTINGS));
   $result = Database::execute($connection, $query, 'update_030215', __LINE__);

   if ($result===false) Response::error('Could not add public_search to database!');
}


// Set version
if (Database::setVersion($connection, 'update_030215')===false) Response::error('Could not update version of database!');
