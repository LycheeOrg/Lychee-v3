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
			unset($return['config']['dropboxKey']);
			unset($return['config']['login']);
			unset($return['config']['location']);
			unset($return['config']['imagick']);
			unset($return['config']['plugins']);
			unset($return['config']['php_script_limit']);
			unset($return['config']['useExiftool']);

		}

		$return['locale'] = Lang::get_lang(Settings::get()['lang']);

		$return['update_json'] = 0;
		$return['update_available'] = false;
		if($return['config']['checkForUpdates'] == '1')
		{
			try {
				$json = file_get_contents('https://lycheeorg.github.io/update.json');
				$obj = json_decode($json);
				$return['update_json'] = $obj->lychee->version;
				$return['update_available'] = ((intval(substr($return['config']['version'],8))) < $return['update_json']);
			} catch (\Exception $e) {
				Log::notice(Database::get(), __METHOD__, __LINE__, 'Could not access: https://lycheeorg.github.io/update.json');
			}
		}

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

		if (password_verify($username, Settings::get()['username']) and password_verify($password, Settings::get()['password'])) {
			$_SESSION['login']      = true;
			$_SESSION['identifier'] = Settings::get()['identifier'];
			Log::notice(Database::get(), __METHOD__, __LINE__, 'User (' . $username . ') has logged in from ' . ($_SERVER['HTTP_X_REAL_IP'] ?? $_SERVER['REMOTE_ADDR']));
			return true;
		}

		// No login
		if ($this->noLogin()===true) return true;

		// Call plugins
		Plugins::get()->activate(__METHOD__, 1, func_get_args());

		// Log failed log in
		Log::error(Database::get(), __METHOD__, __LINE__, 'User (' . $username . ') has tried to log in from ' . ($_SERVER['HTTP_X_REAL_IP'] ?? $_SERVER['REMOTE_ADDR']));

		return false;
	}

	/**
	 * Sets the session values when no there is no username and password in the database.
	 * @return boolean Returns true when no login was found.
	 */
	private function noLogin() {

		// Check if login credentials exist and login if they don't
		if (Settings::get()['username']===''&&
			Settings::get()['password']==='') {
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
