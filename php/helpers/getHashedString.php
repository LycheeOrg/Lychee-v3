<?php

// We only support >= PHP7.1
// Use sane defaults for password_hash
function getHashedString($password) {
	return password_hash($password, PASSWORD_DEFAULT);
}
