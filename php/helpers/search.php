<?php

use Lychee\Modules\Album;
use Lychee\Modules\Database;
use Lychee\Modules\Photo;
use Lychee\Modules\Settings;
use Lychee\Modules\Session;
use Lychee\Modules\Log;

/**
 * @return array|false Returns an array with albums and photos.
 */
function search($term) {

	// Initialize return var
	$return = array(
		'photos' => null,
		'albums' => null,
		'hash'   => ''
	);

	/**
	 * Photos
	 */

	$query  = Database::prepare(Database::get(), "
		SELECT
			p.id, p.title, p.tags, p.public, p.star, p.album, p.thumbUrl, p.takestamp, p.url, p.medium, p.small, p.width, p.height
		FROM
			? p
			left join ? a on a.id = p.album
		WHERE (
				p.title LIKE '%?%'
				OR p.description LIKE '%?%'
				OR p.tags LIKE '%?%'
			)
			AND (
				? = 1
				OR (
					a.public = 1
					AND a.visible = 1
					AND a.password IS NULL
				)
			)
	", array(LYCHEE_TABLE_PHOTOS, LYCHEE_TABLE_ALBUMS, $term, $term, $term, ((Session::isLoggedIn()) ? 1 : 0)));
	$result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

	if ($result===false) return false;

	$i = 0;
	while($photo = $result->fetch_assoc()) {

		$photo = Photo::prepareData($photo);
		$return['photos'][$i] = $photo;
		$i++;

	}

	/**
	 * Albums
	 */

	$query  = Database::prepare(Database::get(), "
		SELECT
			id, title, public, sysstamp, password
		FROM
			?
		WHERE (
				title LIKE '%?%'
				OR description LIKE '%?%'
			)
			AND (
				? = 1
				OR public = 1
				AND visible = 1
			)
		", array(LYCHEE_TABLE_ALBUMS, $term, $term,((Session::isLoggedIn()) ? 1 : 0)));
	$result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

	if ($result===false) return false;

	$i = 0;
	while($album = $result->fetch_assoc()) {

		// Turn data from the database into a front-end friendly format
		$album = Album::prepareData($album);

		if ($album['password'] === '0' || Session::isLoggedIn()) {
			// Thumbs
			$query  = Database::prepare(Database::get(), "SELECT thumbUrl, type FROM ? WHERE album = '?' ORDER BY star DESC, " . substr(Settings::get()['sortingPhotos'], 9) . " LIMIT 3", array(LYCHEE_TABLE_PHOTOS, $album['id']));
			$thumbs = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

			if ($thumbs===false) return false;

			// For each thumb
			$k = 0;
			while ($thumb = $thumbs->fetch_object()) {
				$album['thumbs'][$k] = LYCHEE_URL_UPLOADS_THUMB . $thumb->thumbUrl;
				$album['types'][$k] = $thumb->type;
				$k++;
			}
		}

		// Add to return
		$return['albums'][$i] = $album;
		$i++;

	}

	// Hash
	$return['hash'] = md5(json_encode($return));

	return $return;

}
