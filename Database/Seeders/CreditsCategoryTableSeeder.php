<?php

namespace Modules\Credits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CreditsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $category = [
        				// ID = 1
        				[
        					'name' 			=> 'Software',
        					'slug' 			=> 'software',
        					'created_by' 	=> '1',
						],
						// ID = 2
        				[
        					'name' 			=> 'API',
        					'slug' 			=> 'api',
        					'created_by' 	=> '1',
						],
						// ID = 3
        				[
        					'name' 			=> 'Packages',
        					'slug' 			=> 'packages',
        					'created_by' 	=> '1',
						],
		];
    }
}
