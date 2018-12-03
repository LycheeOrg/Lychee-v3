<?php

namespace Lychee\Run;

use Lychee\Modules\Photo;
use Lychee\Modules\Database;

class Small {

	static function run( $nb = 5, $from = 0, $timeout = 600) {
        set_time_limit($timeout);

        $query  = Database::prepare(Database::get(), "SELECT id, title, type, width, height, url, small FROM ? WHERE `small` != 1 ORDER BY `id` ASC LIMIT ?, ?;", array(LYCHEE_TABLE_PHOTOS, $from, $nb));
        $photos = Database::execute(Database::get(), $query, __METHOD__, __LINE__);

		if ($photos===false){
            echo "ERROR"."\n";
            exit;
        }

        if ($photos->num_rows===0) {
            echo 'No pictures requires small.<br>';
            exit;
        }

		while ($photo = $photos->fetch_assoc()) {
            $path = LYCHEE_UPLOADS_BIG . $photo['url'];

            if (Photo::createMedium($path, $photo['url'], $photo['type'], $photo['width'], $photo['height'], 0, 360, 'SMALL'))
            {
                $query  = Database::prepare(Database::get(), "UPDATE ? SET `small` = '1' WHERE `id` = ?", array(LYCHEE_TABLE_PHOTOS, $photo['id']));
                Database::execute(Database::get(), $query, __METHOD__, __LINE__);
                echo 'small for <i>'.$photo['title'].'</i> created.<br>';
            }
            else
            {
                echo 'Could not create small for <i>'.$photo['title'].'</i>.<br>';
            }
        }

		exit;
    }
}
