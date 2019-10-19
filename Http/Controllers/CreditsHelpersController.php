<?php

namespace Modules\Credits\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Credits\Entities\Models\CreditsInformation;

class CreditsHelpersController extends Controller
{
	// Helper classes

	public static function get_highest_web_order_info(){

		return CreditsInformation::max('web_order');
	}

	public static function check_if_info_id_exists($id){


		if( CreditsInformation::where('id', '=', $id)->count() > 0) {
			return TRUE;
		}
		return false;

	}

}
