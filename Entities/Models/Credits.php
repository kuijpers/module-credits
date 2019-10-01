<?php

namespace Modules\Credits\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credits extends Model
{
	use SoftDeletes;

	protected $table = 'credits';

	protected $fillable = [
							'title',
							'slug',
							'description',
							'content',
							'link',
							'web_order',
							'author_id',
							'author_approve',
							'author_approve',
							'editor_id',
							'editor_approve',
							'editor_approve',
							'publisher_id',
							'publisher_approve',
							'publish_permanent',
							'publish_date_start',
							'publish_date_end',
						];

	protected $date = [
						'author_approve',
						'editor_approve',
						'publisher_approve',
						'publish_date_start',
						'publish_date_end',
					];


}
