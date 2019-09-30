<?php

namespace Modules\Credits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CreditsConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $configurations = [
        					[
								'name' => 'Set title',
								'slug' => 'set-title',
								'description' => 'Title visible on website yes or no ?',
								'value_bool' => '1',
								'value_text' => '',
							],
        					[
								'name' => 'Set body',
								'slug' => 'set-body',
								'description' => 'Body visible on website yes or no ?',
								'value_bool' => '1',
								'value_text' => '',
							],
        					[
								'name' => 'Languages for this module',
								'slug' => 'languages-for-this-module',
								'description' => 'What languages are availlable for this module',
								'value_bool' => '',
								'value_text' => json_encode(['nl','gb']),
							],
						];
    }
}
