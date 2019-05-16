<?php

namespace Lychee\Access;

use Lychee\Modules\Response;
use Lychee\Modules\Validator;

abstract class Access {

	final protected static function fnNotFound() {

		Response::error('Function not found! Please check the spelling of the called function.');

	}


	// Search functions

	static function searchAction() {

		Validator::required(isset($_POST['term']), __METHOD__);

		Response::json(search($_POST['term']));

	}

}
