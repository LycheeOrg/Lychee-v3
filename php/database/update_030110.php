<?php

/**
 * Update to version 3.10.0
 *
 * Note: This update will require users to recreate their master accounts, as we cannot transfer their accounts
 *       over automatically due to the hashing algorithm being changed. They should be automatically prompted to
 *       enter the new login details after the upgrade is complete.
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;
use Lychee\Modules\Log;

$connection = Database::get();

// Check if users table exists
$exist  = Database::prepare($connection, 'SELECT * FROM ? LIMIT 0', array(LYCHEE_TABLE_USERS));
$result = Database::execute($connection, $exist, __METHOD__, __LINE__);

if ($result===false) {
    // Read file
    $file  = __DIR__ . '/users_table.sql';
    $query = @file_get_contents($file);

    if ($query===false) {
        Log::error($connection, __METHOD__, __LINE__, 'Could not load query for lychee_users');
        return false;
    }

    // Create table
    $query  = Database::prepare($connection, $query, array(LYCHEE_TABLE_USERS));
    $result = Database::execute($connection, $query, __METHOD__, __LINE__);

    if ($result===false) return false;
}

// Set version
if (Database::setVersion($connection, 'update_030110')===false) Response::error('Could not update version of database!');
