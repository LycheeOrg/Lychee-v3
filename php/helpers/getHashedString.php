<?php

// We only support >= PHP5.5 
// Use sane defaults for password_hash
function getHashedString($password) {
	return password_hash($password, PASSWORD_DEFAULT);
}
