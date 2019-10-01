<?php

namespace Modules\Credits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$permissions = [
						[	 'name' 		=> 'credits-personal-list',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-personal-create',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-personal-update',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-personal-delete',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-author-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-editor-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-editor-update',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-editor-delete',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-editor-disapprove',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-editor-approve',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-update',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-delete',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-disapprove',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-approve',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-publish',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-publisher-unpublish',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-destroy-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-destroy-recall',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-destroy-permanent',
							  'group_name' 	=> 'Credits',
						],


						[	 'name' 		=> 'credits-information-personal-list',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-personal-create',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-personal-update',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-personal-delete',
							 'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-author-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-editor-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-editor-update',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-editor-delete',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-editor-disapprove',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-editor-approve',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-update',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-delete',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-disapprove',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-approve',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-publish',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-publisher-unpublish',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-destroy-list',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-destroy-recall',
							  'group_name' 	=> 'Credits',
						],
						[	 'name' 		=> 'credits-information-destroy-permanent',
							  'group_name' 	=> 'Credits',
						],

		];


		foreach ($permissions as $key => $permission) {
			Permission::create($permission);
		}
    }
}
