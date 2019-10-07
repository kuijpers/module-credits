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
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('credits::index');
    }
    public function index_dashboard()
    {
        return view('credits::dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create_main()
    {
        return view('credits::dashboard.create_main');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create_info()
    {
        return view('credits::dashboard.create_info');
    }

	/**
	 * Store a newly created resource in storage.
	 * @param Request $request
	 * @return Response
	 */
	public function store_main(Request $request)
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store_info(Request $request)
    {
    	// we receive
		// -	$request('title')
		// -	$request('link')
		// -	$request('content')
		// -	$request('files') !!! Not in use but summernote sends it anyway No need to use this.

		// Steps we need to take


		// Validate incoming requests
		static::validate_information($request);


		// Add data to DB
		if(static::add_to_credits_information($request)){

			return redirect()->back()->with('success', 'Your entry is saved successfully.');

		}

		return redirect()->back()->with('error', 'Something went wrong.');




		return response()->json('Form is successfully validated and data has been saved');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('credits::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('credits::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


	private static function validate_information($request){

		Validator::make($request->all(), [
			'title' 	=> 'required|max:255',
			'link' 		=> 'nullable|active_url',
			'content' 	=> 'required',
		])->validate();

	}

	private static function add_to_credits_information($request){

    	// Add to the following fields:
			//	Title
			// 	Slug
			// 	Description
			// 	Content
			// 	Web_order
			//	Author id

		// Get current web_order
		$cur_web_order		=	static::get_highest_web_order();
		// Create new web_order
		$new_web_order		= $cur_web_order+1;


		$credits_info	=	new CreditsInformation;

		$credits_info->title 			=	$request->title;

		$credits_info->slug				=	str_slug($request->title.Carbon::now()->timestamp, '-');

		$credits_info->description		=	'Credit information for '.$request->name;

		$credits_info->content			=	$request->content;

		$credits_info->web_order		=	$new_web_order;

		$credits_info->author_id		=	Auth::user()->id;

		$credits_info->save();


    	return true;

	}

	private static function get_highest_web_order(){

		return CreditsInformation::max('web_order');
	}


}
