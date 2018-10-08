<?php

namespace Lychee\Modules;

use Lychee\Locale\Lang;

final class Session {

	/**
	 * Reads and returns information about the Lychee installation.
	 * @return array Returns an array with the login status and configuration.
	 */
	public function init($public = true) {

		// Call plugins
		Plugins::get()->activate(__METHOD__, 0, func_get_args());

		// Return settings
		$return['config'] = Settings::get();

		// Path to Lychee for the server-import dialog
		$return['config']['location'] = LYCHEE;

		// Remove sensitive from response
		unset($return['config']['username']);
		unset($return['config']['password']);
		unset($return['config']['identifier']);

		// Check if login credentials exist and login if they don't
		if ($this->noLogin()===true) {
			$public = false;
			$return['config']['login'] = false;
		} else {
			$return['config']['login'] = true;
		}

		if ($public===false) {

			// Logged in
			$return['status'] = LYCHEE_STATUS_LOGGEDIN;

		} else {

			// Logged out
			$return['status'] = LYCHEE_STATUS_LOGGEDOUT;

			// Unset unused vars
			unset($return['config']['skipDuplicates']);
			unset($return['config']['sortingAlbums']);
			unset($return['config']['sortingPhotos']);
			unset($return['config']['dropboxKey']);
			unset($return['config']['login']);
			unset($return['config']['location']);
			unset($return['config']['imagick']);
			unset($return['config']['plugins']);

		}

		$return['locale'] = Lang::get_lang(Settings::get()['lang']);

		// Call plugins
		Plugins::get()->activate(__METHOD__, 1, func_get_args());

		return $return;

	}

	/**
	 * Sets the session values when username and password correct.
	 * @return boolean Returns true when login was successful.
	 */
	public function login($username, $password) {

		// Call plugins
		Plugins::get()->activate(__METHOD__, 0, func_get_args());
        if (($user = self::checkCredentials($username, $password)) !== false) {
            $_SESSION['login']      = true;
            $_SESSION['identifier'] = Settings::get()['identifier'];
            $_SESSION['username']   = $user['username'];
            Log::notice(Database::get(), __METHOD__, __LINE__, 'User (' . $username . ') has logged in from ' . $_SERVER['REMOTE_ADDR']);
            return true;
        }

        // No login
        if ($this->noLogin()===true) return true;

        // Call plugins
        Plugins::get()->activate(__METHOD__, 1, func_get_args());

        // Log failed log in
        Log::error(Database::get(), __METHOD__, __LINE__, 'User (' . $username . ') has tried to log in from ' . $_SERVER['REMOTE_ADDR']);

        return false;

	}

    /**
     * Check if credentials are valid or not.
     * @param $username
     * @param $password
     *
     * @return array|bool Returns user array on success, bool on error.
     */
	public static function checkCredentials($username, $password) {
        //Find user based on username and password.
        $query = Database::prepare(
            Database::get(),
            "SELECT id, username, password FROM ? WHERE username = '?'",
            array(LYCHEE_TABLE_USERS, $username)
        );

        $accounts = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

        if ($accounts && $accounts->num_rows === 1) {
            $account = $accounts->fetch_assoc();
            if ($account && isset($account['password']) && password_verify($password, $account['password'])) {
                unset($account['password']);
                return $account;
            }
        } elseif ($accounts->num_rows > 1) {
            Log::error(Database::get(), __METHOD__, __LINE__, 'There are multiple users with the username (' . $username . ')');
        }

        return false;
    }

	/**
	 * Sets the session values when no there is no username and password in the database.
	 * @return boolean Returns true when no login was found.
	 */
	private function noLogin() {

        $q = Database::prepare(
            Database::get(),
            "SELECT * FROM ?",
            array(LYCHEE_TABLE_USERS)
        );

        $accounts = Database::execute(Database::get(), $q, __METHOD__, __LINE__);
        if ($accounts && $accounts->num_rows === 0) {
            $_SESSION['login']      = true;
            $_SESSION['identifier'] = Settings::get()['identifier'];
            return true;
        }
        return false;
	}

	/**
	 * Unsets the session values.
	 * @return boolean Returns true when logout was successful.
	 */
	public function logout() {

		// Call plugins
		Plugins::get()->activate(__METHOD__, 0, func_get_args());

		session_unset();
		session_destroy();

		// Call plugins
		Plugins::get()->activate(__METHOD__, 1, func_get_args());

		return true;

	}






}
