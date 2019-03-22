<?php

/**
 * @return string Generated ID.
 */
function generateID() {

	// Generate id based on the current microtime
	$id = str_replace('.', '', sprintf("%015.4f", microtime(true)));

	// Return id as a string. Don't convert the id to an integer
	// as 14 digits are too big for 32bit PHP versions.
	return $id;

}
