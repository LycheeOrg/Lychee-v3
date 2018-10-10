<?php

namespace Lychee\Modules;

use Lychee\Locale\Lang;

final class Settings {

	private static $cache = null;

	/**
	 * @return array Returns the settings of Lychee.
	 */
	public static function get() {

		if (self::$cache) return self::$cache;

		// Execute query
		$query    = Database::prepare(Database::get(), "SELECT * FROM ?", array(LYCHEE_TABLE_SETTINGS));
		$settings = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

		// Add each to return
		while ($setting = $settings->fetch_object()) $return[$setting->key] = $setting->value;

		// Convert plugins to array
		$return['plugins'] = explode(';', $return['plugins']);

		$return['lang_available'] = Lang::get_lang_available();

		self::$cache = $return;

		return $return;

	}

	/**
	 * @return boolean Returns true when successful.
	 */
	private static function set($key, $value, $row = false) {

		if ($row===false) {

			$query = Database::prepare(Database::get(), "UPDATE ? SET value = '?' WHERE `key` = '?'", array(LYCHEE_TABLE_SETTINGS, $value, $key));

		} elseif ($row===true) {

			// Do not prepare $value because it has already been escaped or is a true statement
			$query = Database::prepare(Database::get(), "UPDATE ? SET value = '$value' WHERE `key` = '?'", array(LYCHEE_TABLE_SETTINGS, $key));

		} else {

			return false;

		}

		$result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

		if ($result===false) return false;
		return true;

	}

	/**
	 * Sets the username and password when current password is correct.
	 * Exits on error.
	 * @return true Returns true when successful.
	 */
	public static function setLogin($oldPassword = '', $username, $password) {

	    $query = Database::prepare(Database::get(),
            "SELECT * FROM ?",
            array(LYCHEE_TABLE_USERS)
        );
	    $count = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

        if ($count && $count->num_rows === 0) {
            // No user accounts exists, create the first user.
            if (User::createUser($username, $password)) {
                return true;
            } else {
                Response::error("Failed to create new user");
            }
        } else {
            // User accounts exist, this must be an account update request.
            if (isset($_SESSION['username']) && Session::checkCredentials($_SESSION['username'], $oldPassword)) {
                if (User::changeAccount($_SESSION['username'], $username, $password)) {
                    return true;
                } else {
                    Response::error("Failed to update password");
                }
            } else {
                Response::error('Current password entered incorrectly!');
            }
        }
	}

	/**
	 * Sets a new dropboxKey.
	 * @return boolean Returns true when successful.
	 */
	public static function setDropboxKey($dropboxKey) {

		if (strlen($dropboxKey)<1||strlen($dropboxKey)>50) {
			Log::notice(Database::get(), __METHOD__, __LINE__, 'Dropbox key is either too short or too long');
			return false;
		}

		if (self::set('dropboxKey', $dropboxKey)===false) return false;
		return true;

	}

	public static function setLang($lang) {
		$lang_available = Lang::get_lang_available();
		for ($i = 0; $i < count($lang_available); $i++)
		{
			if($lang == $lang_available[$i])
			{
				if (self::set('lang', $lang, true)===false) return false;
				return true;
			}
		}
		Log::error(Database::get(), __METHOD__, __LINE__, 'Could not update settings. Unknown lang.');
		return false;
	}

	/**
	 * Sets a new sorting for the photos.
	 * @return boolean Returns true when successful.
	 */
	public static function setSortingPhotos($type, $order) {

		$sorting = 'ORDER BY ';

		// Set row
		switch ($type) {

			case 'id':          $sorting .= 'id'; break;
			case 'title':       $sorting .= 'title'; break;
			case 'description': $sorting .= 'description'; break;
			case 'public':      $sorting .= 'public'; break;
			case 'type':        $sorting .= 'type'; break;
			case 'star':        $sorting .= 'star'; break;
			case 'takestamp':   $sorting .= 'takestamp'; break;
			default:            Log::error(Database::get(), __METHOD__, __LINE__, 'Could not update settings. Unknown type for sorting.');
			                    return false;
			                    break;

		}

		$sorting .= ' ';

		// Set order
		switch ($order) {

			case 'ASC':  $sorting .= 'ASC'; break;
			case 'DESC': $sorting .= 'DESC'; break;
			default:     Log::error(Database::get(), __METHOD__, __LINE__, 'Could not update settings. Unknown order for sorting.');
			             return false;
			             break;

		}

		// Do not prepare $sorting because it is a true statement
		// Preparing (escaping) the sorting would destroy it
		// $sorting is save and can't contain user-input
		if (self::set('sortingPhotos', $sorting, true)===false) return false;
		return true;

	}

	/**
	 * Sets a new sorting for the albums.
	 * @return boolean Returns true when successful.
	 */
	public static function setSortingAlbums($type, $order) {

		$sorting = 'ORDER BY ';

		// Set row
		switch ($type) {

			case 'id':          $sorting .= 'id'; break;
			case 'title':       $sorting .= 'title'; break;
			case 'description': $sorting .= 'description'; break;
			case 'public':      $sorting .= 'public'; break;
			case 'min_takestamp':   $sorting .= 'min_takestamp'; break;
			case 'max_takestamp':   $sorting .= 'max_takestamp'; break;
			default:            Log::error(Database::get(), __METHOD__, __LINE__, 'Could not update settings. Unknown type for sorting.');
			                    return false;
			                    break;

		}

		$sorting .= ' ';

		// Set order
		switch ($order) {

			case 'ASC':  $sorting .= 'ASC'; break;
			case 'DESC': $sorting .= 'DESC'; break;
			default:     Log::error(Database::get(), __METHOD__, __LINE__, 'Could not update settings. Unknown order for sorting.');
			             return false;
			             break;

		}

		// Do not prepare $sorting because it is a true statement
		// Preparing (escaping) the sorting would destroy it
		// $sorting is save and can't contain user-input
		if (self::set('sortingAlbums', $sorting, true)===false) return false;
		return true;

	}

	/**
	 * @return array Returns the Imagick setting.
	 */
	public static function hasImagick() {
		return (bool)(extension_loaded('imagick') && self::get()['imagick'] === '1');
	}

}
