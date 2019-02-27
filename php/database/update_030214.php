<?php

/**
 * Update to version 3.2.14
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

$query  = Database::prepare($connection, "ALTER TABLE `?` ADD PRIMARY KEY( `key`); ", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030214', __LINE__);

if ($result===false) Response::error('Could not add primary key to settings! Clean up duplicate setting keys!');

// Set version
if (Database::setVersion($connection, 'update_030214')===false) Response::error('Could not update version of database!');
