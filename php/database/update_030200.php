<?php

/**
 * Update to version 3.2.0
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Add skipDuplicates to settings
$query  = Database::prepare($connection, "ALTER TABLE `?` CHANGE `type` `type` VARCHAR(15)", array(LYCHEE_TABLE_PHOTOS));
$result = Database::execute($connection, $query, 'update_030200', __LINE__);

if ($result===false) Response::error('Could not alter type for video compatibility');

// Set version
if (Database::setVersion($connection, 'update_030200')===false) Response::error('Could not update version of database!');
