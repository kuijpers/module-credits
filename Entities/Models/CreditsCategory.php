<?php

namespace Modules\Credits\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditsCategory extends Model {

	use SoftDeletes;

	protected $table = 'credits_category';


	protected $fillable = [
								'name',
								'slug',
								'created_by',
							];
}


