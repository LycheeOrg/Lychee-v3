<?php


namespace Lychee\Modules;

/**
 * Class User
 * @package Lychee\Modules
 */
class User
{
    /**
     * Creates a new user.
     * @param $username string
     * @param $password string
     *
     * @return bool
     */
    public static function createUser($username, $password) {
        $q = Database::prepare(
            Database::get(),
            "SELECT * FROM ? WHERE username = '?'",
            array(LYCHEE_TABLE_USERS, $username)
        );

        $accounts = Database::execute(Database::get(), $q, __METHOD__, __LINE__);
        if ($accounts && $accounts->num_rows > 0) {
            Log::error(Database::get(), __METHOD__, __LINE__, "Username (" . $username . ") is already in use.");
            return false;
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $q = Database::prepare(
            Database::get(),
            "INSERT INTO ? (username, password) VALUES ('?','?')",
            array(LYCHEE_TABLE_USERS, $username, $passwordHash)
        );
        $result = Database::execute(Database::get(), $q, __METHOD__, __LINE__);
        if ($result) {
            Log::notice(
                Database::get(),
                __METHOD__,
                __LINE__,
                "New user created (" .  $username . ")"
                . (isset($_SESSION['username']) ? " by " . $_SESSION['username'] : "")
            );
            return true;
        } else {
            Log::error(
                Database::get(),
                __METHOD__,
                __LINE__,
                "Failed to create new user [" . Database::error(Database::get()) . "]"
            );
            return false;
        }
    }

    /**
     * Update account password given username.
     * @param $username string
     * @param $password string
     * @return bool
     */
    public static function changePassword($username, $password) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $query = Database::prepare(
            Database::get(),
            "UPDATE ? SET password = '?' WHERE username = '?'",
            array(LYCHEE_TABLE_USERS, $passwordHash, $username)
        );
        $result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);
        if ($result !== false) {
            Log::notice(
                Database::get(),
                __METHOD__,
                __LINE__,
                "Password for " . $username . " was updated"
            );
            return true;
        }
        return false;
    }

    /**
     * Update an account username and password given the current username.
     * @param $currentUsername string The current username
     * @param $newUsername string The new username (can be the same username).
     * @param $newPassword string The new password
     * @return bool
     */
    public static function changeAccount($currentUsername, $newUsername, $newPassword) {
        if (($usernameChanged = $currentUsername !== $newUsername)) {
            // Check if the username is already in use or not?
            $query = Database::prepare(
                Database::get(),
                "SELECT * FROM ? WHERE username = '?'",
                array(LYCHEE_TABLE_USERS, $newUsername)
            );
            $result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);
            if ($result && $result->num_rows > 0) {
                Log::notice(
                    Database::get(),
                    __METHOD__,
                    __LINE__,
                    $_SESSION['username'] . " tried to change the username of " . $currentUsername . " to "
                    . $newUsername . " but the new username was already in use."
                );
                response::error("Username already in use.");
            }
        }

        $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        $q = Database::prepare(
            Database::get(),
            "UPDATE ? SET username = '?', password = '?' WHERE username = '?'",
            array(LYCHEE_TABLE_USERS, $newUsername, $newPasswordHash, $currentUsername)
        );
        $result = Database::execute(Database::get(), $q, __METHOD__, __LINE__);
        if ($result !== false) {
            Log::notice(
                Database::get(),
                __METHOD__,
                __LINE__,
                $currentUsername . " account was updated by " . $_SESSION['username']
                . ". The password was updated"
                . ($usernameChanged ? " and the username has changed to " . $newUsername : "")
            );
            return true;
        } else {
            Log::error(
                Database::get(),
                __METHOD__,
                __LINE__,
                "Failed to update user account (" . $currentUsername . "), [" . Database::error(Database::get()) . "]"
            );
            response::error("Failed to update account credentials");
        }
    }

    /**
     * Generate a list of users to send back to the client.
     * @return array Array of users
     */
    public static function listAllUsers() {
        $query = Database::prepare(
            Database::get(),
            "SELECT id, username FROM ?",
            array(LYCHEE_TABLE_USERS)
        );
        $accounts = Database::execute(Database::get(), $query, __METHOD__, __LINE__);
        if ($accounts) {
            return $accounts->fetch_all(MYSQLI_ASSOC);
        } else {
            Log::error(
                Database::get(),
                __METHOD__,
                __LINE__,
                "Failed to get list of all users [" . Database::error(Database::get()) . "]"
            );
        }
    }
}