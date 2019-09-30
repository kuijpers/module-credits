<?php

namespace Modules\Credits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CreditsCreditsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$connections =	[
							// ID = 1
							[
								'credits_id'			=> 1,
								'credits_category_id'	=> 1,

							],
							// ID = 2
							[
								'credits_id'			=> 2,
								'credits_category_id'	=> 1,

							],
							// ID = 3
							[
								'credits_id'			=> 3,
								'credits_category_id'	=> 1,

							],
							// ID = 4
							[
								'credits_id'			=> 4,
								'credits_category_id'	=> 1,

							],
							// ID = 5
							[
								'credits_id'			=> 5,
								'credits_category_id'	=> 2,

							],
							// ID = 6
							[
								'credits_id'			=> 7,
								'credits_category_id'	=> 2,

							],
							// ID = 7
							[
								'credits_id'			=> 7,
								'credits_category_id'	=> 3,

							],
							// ID = 8
							[
								'credits_id'			=> 8,
								'credits_category_id'	=> 3,

							],
							// ID = 9
							[
								'credits_id'			=> 10,
								'credits_category_id'	=> 3,

							],
							// ID = 10
							[
								'credits_id'			=> 10,
								'credits_category_id'	=> 3,

							],
						];
    }
}
