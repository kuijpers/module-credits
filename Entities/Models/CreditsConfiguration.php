<?php

namespace Modules\Credits\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditsConfiguration extends Model
{
	use SoftDeletes;

	protected $table = 'credits_configuration';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
								'name',
								'slug',
								'description',
								'value_bool',
								'value_text',
							];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		''
	];
}
