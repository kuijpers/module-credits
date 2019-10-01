<?php

namespace Modules\Credits\Entities\Models;

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
}
