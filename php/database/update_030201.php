<?php

/**
 * Update to version 3.2.1
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Set version
if (Database::setVersion($connection, 'update_030201')===false) Response::error('Could not update version of database!');
