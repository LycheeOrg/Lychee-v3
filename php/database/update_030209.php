<?php

/**
 * Update to version 3.2.9
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

// Set version
if (Database::setVersion($connection, 'update_030209')===false) Response::error('Could not update version of database!');
