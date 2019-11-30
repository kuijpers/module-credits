<?php

namespace Modules\Credits\Entities\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditsInformation extends Model
{
	use SoftDeletes;

	protected $table = 'credits_information';


	protected $fillable = [
							'title',
							'slug',
							'description',
							'content',
							'web_order',
							'author_id',
							'author_approve',
							'editor_id',
							'editor_approve',
							'publisher_id',
							'publisher_approve',
							'publish_permanent',
							'publish_date_start',
							'publish_date_end',
						];


	protected $dates = [
							'author_approve',
							'editor_approve',
							'publisher_approve',
							'publish_date_start',
							'publish_date_end',
						];

	public function author()
	{
		return $this->belongsTo(User::class,'author_id')->first();
	}

	public function editor()
	{
		return $this->belongsTo(User::class,'editor_id')->first();
	}

	public function editor_name(){

		$editor_data	=	$this->belongsTo(User::class,'editor_id')->first();

		if($editor_data == null){
			$editor_name	=	'';
		}else{
			$editor_name	=	$editor_data->name;
		}

		return $editor_name;

	}
}
