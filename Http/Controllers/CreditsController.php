<?php

namespace Modules\Credits\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Modules\Credits\Entities\Models\CreditsInformation;

class CreditsController extends Controller
{

    public function index()
    {
        return view('credits::index');
    }

	public function index_dashboard()
    {

    	$personal_info_drafts	=	CreditsInformationController::get_personal_drafts();


        return view('credits::dashboard.index')->with(compact('personal_info_drafts'));
    }

    public function create_main()
    {
        return view('credits::dashboard.create_main');
    }

	public function store_main(Request $request)
	{
		//
	}

    public function update_main(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }



	// Index dashboard update

	// Validate Info








}
