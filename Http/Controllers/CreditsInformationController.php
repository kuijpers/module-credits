<?php

namespace Modules\Credits\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Credits\Entities\Models\CreditsInformation;
use Auth;


class CreditsInformationController extends Controller
{


	public function create()
	{
		return view('credits::dashboard.create_info');
	}

	public function store(Request $request)
	{
		// we receive
		// -	$request('title')
		// -	$request('link')
		// -	$request('content')
		// -	$request('files') !!! Not in use but summernote sends it anyway No need to use this.

		// Steps we need to take


		// Validate incoming requests
		static::create_validate_info($request);


		// Add data to DB
		if(static::add_to_credits_information($request)){

			return redirect()->back()->with('success', 'entry-added-successfully');

		}

		return redirect()->back()->with('error', 'something-wrong');

	}

	public function update(Request $request)
	{

//    	return $request;

		// Steps we need to take


		// Check if ID exists
		if (CreditsHelpersController::check_if_info_id_exists($request->id)) {

//			return "ID bestaat";
			// Valideer de input

			if(static::update_validator_info($request)){

//				return "Data is gevalideerd";

				if(static::update_info_data($request)){

					return redirect()->back()->with('success', 'entry-updated-successfully');

				}else{
					return redirect()->back()->with('error', 'something-wrong');
				}
			}else{
				return redirect()->back()->with('error', 'something-wrong');
			}

		}

		// Return naar de pagina en stuur een error message mee
		return redirect()->back()->with('error', 'something-wrong');

	}

	public function approve(Request $request){

		// We receive the following
		// - $request->id
		// - $request->update_type

//    	return $request;

		if(CreditsHelpersController::check_if_info_id_exists($request->id)){

//				return "ID is valid";

			if(static::approve_info_data($request)){

				return redirect()->back()->with('success', 'entry-updated-successfully');

			}else{
				return redirect()->back()->with('error', 'something-wrong');
			}

		}

		return redirect()->back()->with('error', 'something-wrong');
	}

	public function delete(Request $request){
//		return $request;

		if(CreditsHelpersController::check_if_info_id_exists($request->id))
			{

//				return "ID is valid";

				if(static::delete_info_data($request->id)){

					return redirect()->back()->with('success', 'entry-deleted-successfully');

				}else{

					return redirect()->back()->with('error', 'something-wrong');
				}


			}
	}

	public function destroy(Request $request){
		//
	}



	// Index dashboard view

	public static function get_personal_drafts(){

		$personal_info_drafts = CreditsInformation::where('author_id', '=', Auth::user()->id )
			->whereNull('author_approve')
			->whereNull('editor_approve')
			->whereNull('publisher_approve')
			->get();

		return $personal_info_drafts;
	}

	public static function get_author_drafts(){
		//
	}

	public static function get_editor_drafts(){
		//
	}

	public static function get_publisher_drafts(){
		//
	}

	public static function get_all_published(){
		//
	}

	public static function get_all_archived(){
		//
	}

	public static function get_all_deleted(){
		//
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
		$cur_web_order		=	CreditsHelpersController::get_highest_web_order_info('CreditsInformation');
		// Create new web_order
		$new_web_order		= $cur_web_order+1;


		$credits_info	=	new CreditsInformation;

		$credits_info->title 			=	$request->title;

		$credits_info->slug				=	str_slug($request->title.Carbon::now()->timestamp, '-');

		$credits_info->description		=	'Credit information for '.$request->title;

		$credits_info->content			=	$request->content;

		$credits_info->web_order		=	$new_web_order;

		$credits_info->author_id		=	Auth::user()->id;

		$credits_info->save();


		return true;

	}


	private static function create_validate_info($request){

	Validator::make($request->all(), [
		'title' 	=> 'required|max:255',
		'link' 		=> 'nullable|active_url',
		'content' 	=> 'required',
	])->validate();

}

	private static function update_validator_info($request){

//    	return "Validation time";

		switch ($request->update_type) {
			case "author":

					return static::update_validation_info_author($request);

					break;
			case "editor":

					static::update_validation_info_editor($request);

					break;
			case "publisher":

					static::update_validation_info_publisher($request);

					break;
			case "webmaster":

					static::update_validation_info_webmaster($request);

					break;
			default:
					return 'Verstuur een error';
			}

	}

	private static function update_validation_info_author($request){


//    	return "now we will really validate";

		// we receive
		// -	$request('title')
		// -	$request('description')
		// -	$request('content')

		Validator::make($request->all(), [
			'title' 		=> 'required|max:255',
			'description' 	=> 'required|max:255',
			'content' 		=> 'required',
		])->validate();


//		return "validation is done";

		return TRUE;
	}

	private static function update_validation_info_editor($request){
		return 'editor';
	}

	private static function update_validation_info_publisher($request){
		return 'publisher';
	}

	private static function update_validation_info_webmaster($request){
		return 'webmaster';
	}

	// Update info

	private static function update_info_data($request){

//    	return "Now start adding to database";

		switch ($request->update_type) {
			case "author":

				// we receive
				// -	$request->title
				// -	$request->description
				// -	$request->content
					return static::update_info_author($request);

					break;
			case "editor":

					static::update_info_editor($request);

					break;
			case "publisher":

					static::update_info_publisher($request);

					break;
			case "webmaster":

					static::update_info_webmaster($request);

					break;
			default:
					return 'Verstuur een error';
			}
	}

	private static function update_info_author($request){

//    	return $request;

//		return "Now start adding to database";

		// we receive
		// -	$request('title')
		// -	$request('description')
		// -	$request('link')
		// -	$request('content')

		$credits_info = CreditsInformation::find($request->id);

		$credits_info->title				=	$request->title;

		$credits_info->slug					=	str_slug($request->title.Carbon::now()->timestamp, '-');

		$credits_info->description			=	$request->description;

		$credits_info->content				=	$request->content;

		if($request->approve == 'on'){
			$credits_info->author_approve	=	Carbon::now();
		}

		$credits_info->save();

		return TRUE;

	}

	private static function update_info_editor($request){
		//
	}

	private static function update_info_publisher($request){
		//
	}

	private static function update_info_webmaster($request){
		//
	}

	// Approve info

	private static function approve_info_data($request){

		switch ($request->update_type) {
			case "author":

				// we receive
				// -	$request->id
					return static::approve_info_author($request->id);

					break;
			case "editor":

					return static::approve_info_editor($request);

					break;
			case "publisher":

					return static::approve_info_publisher($request);

					break;
			case "webmaster":

					return static::approve_info_webmaster($request);

					break;
			default:
					return 'Verstuur een error';
			}
	}

	private static function approve_info_author($id){

		$credits_info = CreditsInformation::find($id);

		$credits_info->author_approve	=	Carbon::now();

		$credits_info->save();

		return TRUE;

	}

	private static function approve_info_editor($request){
		//
	}

	private static function approve_info_publisher($request){
		//
	}

	private static function approve_info_webmaster($request){
		//
	}


	private static function delete_info_data($id){

//		return true;

		return CreditsInformation::find($id)->delete();

	}

}
