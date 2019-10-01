<?php

namespace Modules\Credits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CreditsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


		$this->call(CreditsInformationTableSeeder::class);

		$this->call(CreditsTableSeeder::class);

		$this->call(CreditsCategoryTableSeeder::class);

		$this->call(CreditsCreditsCategoryTableSeeder::class);

		$this->call(CreditsConfigurationTableSeeder::class);

		$this->call(PermissionsTableSeeder::class);
    }
}
