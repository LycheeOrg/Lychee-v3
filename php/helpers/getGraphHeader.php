<?php

use Lychee\Modules\Database;
use Lychee\Modules\Photo;

function getGraphHeader($theID,$getType) {

	// allow album data
	if ($getType == 'album'){
		$query  = Database::prepare(Database::get(), "SELECT id FROM ? WHERE album = '?' LIMIT 1", array(LYCHEE_TABLE_PHOTOS, $theID));
		$result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);
		if ($result===false) return false;
		$row = $result->fetch_object();
		$photoID = $row->id;
	} else {
		$photoID = $theID;
	}

	$photo = new Photo($photoID);
	if ($photo->getPublic('')===false) return false;

	$query  = Database::prepare(Database::get(), "SELECT title, description, url, medium FROM ? WHERE id = '?'", array(LYCHEE_TABLE_PHOTOS, $photoID));
	$result = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

	if ($result===false) return false;

	$row = $result->fetch_object();

	if ($row===null) {
		Log::error(Database::get(), __METHOD__, __LINE__, 'Could not find photo in database');
		return false;
	}

	if ($row->medium==='1') $dir = 'medium';
	else                    $dir = 'big';

	$parseUrl = parse_url('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	$url      = '//' . $parseUrl['host'] . $parseUrl['path'] . '?' . $parseUrl['query'];
	$picture  = '//' . $parseUrl['host'] . $parseUrl['path'] . '/../uploads/' . $dir . '/' . $row->url;

	$url     = htmlentities($url);
	$picture = htmlentities($picture);

	$row->title       = htmlentities($row->title);
	$row->description = htmlentities($row->description);

	$return = '<!-- General Meta Data -->'. "\n";
	$return .= "\t\t". '<meta name="title" content="' . $row->title . '">'. "\n";
	$return .= "\t\t". '<meta name="description" content="' . $row->description . ' - via Lychee">'. "\n";
	$return .= "\t\t". '<link rel="image_src" type="image/jpeg" href="' . $picture . '">'. "\n";

	$return .= "\t\t". '<!-- Twitter Meta Data -->'. "\n";
	$return .= "\t\t". '<meta name="twitter:card" content="summary_large_image">'. "\n";
	$return .= "\t\t". '<meta name="twitter:title" content="' . $row->title . '">'. "\n";
	$return .= "\t\t". '<meta name="twitter:description" content="' . $row->description . '">'. "\n";
	$return .= "\t\t". '<meta name="twitter:image" content="' . $picture . '">'. "\n";

	$return .= "\t\t". '<!-- Facebook Meta Data -->'. "\n";
	$return .= "\t\t". '<meta property="og:title" content="' . $row->title . '">'. "\n";
	$return .= "\t\t". '<meta property="og:description" content="' . $row->description . ' - via Lychee">'. "\n";
	$return .= "\t\t". '<meta property="og:image" content="' . $picture . '">'. "\n";
	$return .= "\t\t". '<meta property="og:url" content="' . $url . '">'. "\n";

	return $return;

}
