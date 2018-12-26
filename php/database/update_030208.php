<?php

/**
 * Update to version 3.2.8
 */

use Lychee\Modules\Database;
use Lychee\Modules\Response;

$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'small_max_width' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030208', __LINE__);
if ($result===false) Response::error('Could not get current small_max_width from database!');
if ($result->num_rows===0) {
	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('small_max_width', '0')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030208', __LINE__);
	if ($result===false) Response::error('Could not add small_max_width to database!');
}
if ($result===false) Response::error('Could not add small_max_width!');

$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'small_max_height' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030208', __LINE__);
if ($result===false) Response::error('Could not get current small_max_height from database!');
if ($result->num_rows===0) {
	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('small_max_height', '360')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030208', __LINE__);
	if ($result===false) Response::error('Could not add small_max_height to database!');
}
if ($result===false) Response::error('Could not add small_max_height!');

$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'medium_max_width' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030208', __LINE__);
if ($result===false) Response::error('Could not get current medium_max_width from database!');
if ($result->num_rows===0) {
	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('medium_max_width', '1920')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030208', __LINE__);
	if ($result===false) Response::error('Could not add medium_max_width to database!');
}
if ($result===false) Response::error('Could not add medium_max_width!');

$query  = Database::prepare($connection, "SELECT `key` FROM `?` WHERE `key` = 'medium_max_height' LIMIT 1", array(LYCHEE_TABLE_SETTINGS));
$result = Database::execute($connection, $query, 'update_030208', __LINE__);
if ($result===false) Response::error('Could not get current medium_max_height from database!');
if ($result->num_rows===0) {
	$query  = Database::prepare($connection, "INSERT INTO `?` (`key`, `value`) VALUES ('medium_max_height', '1080')", array(LYCHEE_TABLE_SETTINGS));
	$result = Database::execute($connection, $query, 'update_030208', __LINE__);
	if ($result===false) Response::error('Could not add medium_max_height to database!');
}
if ($result===false) Response::error('Could not add small_max_height!');

// and create the files :)
chmod(__DIR__ . '/../../dist/', 775);
touch(__DIR__ . '/../../dist/user.css');

// Set version
if (Database::setVersion($connection, 'update_030208')===false) Response::error('Could not update version of database!');
