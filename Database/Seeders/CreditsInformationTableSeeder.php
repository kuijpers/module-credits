<?php

namespace Modules\Credits\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CreditsInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

		$information =	[
							// ID = 1
							[
								'title'					=> 'En de credits gaan naar:',
								'slug'					=> 'en-de-credits-gaan-naar',
								'description'			=> 'Uitleg over de credits die gegeven worden en waarom',
								'content'				=> 'Een website kan nooit gebouwd worden zonder de ondersteuning van verschillende organisaties, bedrijven en andere developers.
                    <br>
                    Voor deze website is gebruik gemaakt van open source software en vrije scripts.
                    <br>
                    Deze zijn allen ontwikkeld om gratis aan te bieden en worden vaak ondersteund door vele vrijwilligers.
                    <br>
                    Ik vind het daarom persoonlijk ook zeer belangrijk dat ze "geëerd" moeten worden voor de hulp en ondersteuning die ze leveren.
                    <br>
                    Hieronder een klein overzicht met de links naar de websites.
                    <br>',
								'weborder'				=> 1,

								'author_id'				=> 1,
								'author_approve'		=> Carbon::now(),

								'editor_id'				=> 1,
								'editor_approve'		=> Carbon::now(),

								'publisher_id'			=> 1,
								'publisher_approve'		=> Carbon::now(),

								'publish_permanent'		=> 1,
								'publish_date_start'	=> Carbon::now(),
								'publish_date_end'		=> '',

							],
							// ID = 2
							[
								'title'					=> 'En de credits gaan toch echt naar:',
								'slug'					=> 'en-de-credits-gaan-toch-echt-naar',
								'description'			=> 'itleg over de credits die gegeven worden en waarom',
								'content'				=> 'Een website kan nooit gebouwd worden zonder de ondersteuning van verschillende organisaties, bedrijven en andere developers.
                    <br>
                    Voor deze website is gebruik gemaakt van open source software en vrije scripts.
                    <br>
                    Deze zijn allen ontwikkeld om gratis aan te bieden en worden vaak ondersteund door vele vrijwilligers.
                    <br>
                    Ik vind het daarom persoonlijk ook zeer belangrijk dat ze "geëerd" moeten worden voor de hulp en ondersteuning die ze leveren.
                    <br>
                    Hieronder een klein overzicht met de links naar de websites.
                    <br>',
								'weborder'				=> 2,

								'author_id'				=> 1,
								'author_approve'		=> '',

								'editor_id'				=> '',
								'editor_approve'		=> '',

								'publisher_id'			=> '',
								'publisher_approve'		=> '',

								'publish_permanent'		=> '',
								'publish_date_start'	=> '',
								'publish_date_end'		=> '',

							],
					];


    }
}
