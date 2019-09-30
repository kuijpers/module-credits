<?php

namespace Modules\Credits\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CreditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $credits =	[
        				// ID = 1
        				[
							'title'					=> 'Laravel',
							'slug'					=> 'laravel',
							'description'			=> 'Het framework voor websites',
							'content'				=> 'Dit is de basis van de website',
							'link'					=> 'https://laravel.com/',
							'weborder'				=> 1,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 2
        				[
							'title'					=> 'Bootstrap',
							'slug'					=> 'bootstrap',
							'description'			=> 'perfect voor website layouts',
							'content'				=> 'Hierdoor ziet de website er mooi uit.',
							'link'					=> 'http://getbootstrap.com/',
							'weborder'				=> 2,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 3
        				[
							'title'					=> 'jquery',
							'slug'					=> 'jquery',
							'description'			=> 'jquery',
							'content'				=> 'Dit zorgt er voor dat er leuke animaties e.d. kunnen zijn.',
							'link'					=> 'https://jquery.com/',
							'weborder'				=> 3,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 4
        				[
							'title'					=> 'Font awesome',
							'slug'					=> 'font-awesome',
							'description'			=> 'Font awesome',
							'content'				=> 'Hier vandaan halen we de leuke icons.',
							'link'					=> 'https://fontawesome.com/',
							'weborder'				=> 4,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 5
        				[
							'title'					=> 'Leafletjs',
							'slug'					=> 'leafletjs',
							'description'			=> 'Leafletjs',
							'content'				=> 'Voor het leveren van de kaarten.',
							'link'					=> 'https://leafletjs.com/',
							'weborder'				=> 5,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 6
        				[
							'title'					=> 'Mapbox',
							'slug'					=> 'mapbox',
							'description'			=> 'Mapbox',
							'content'				=> 'Zorgen er voor dat de kaarten er mooi uit zien.',
							'link'					=> 'https://www.mapbox.com/',
							'weborder'				=> 6,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 7
        				[
							'title'					=> 'Laravel Modules van nwidart',
							'slug'					=> 'laravel-modules-van-nwidart',
							'description'			=> 'Laravel Modules van nwidart',
							'content'				=> 'nwidart heeft een package geschreven wat er voor zorgt dat ik makkelijker modules kan schrijven voor de pagina.
                                        <br>
                                        Dit scheelt heel veel tijd in het ontwikkelen van een website en daar ben ik hem dan ook dankbaar voor.',
							'link'					=> 'https://nwidart.com/',
							'weborder'				=> 7,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 8
        				[
							'title'					=> 'jquery-albe-timeline van Albejr',
							'slug'					=> 'jquery-albe-timeline-van-albejr',
							'description'			=> 'jquery-albe-timeline van Albejr',
							'content'				=> 'Package om tijdlijnen mee weer te geven.',
							'link'					=> 'https://github.com/Albejr/jquery-albe-timeline',
							'weborder'				=> 8,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 9
        				[
							'title'					=> 'Star rating plugin van Alexander Reece',
							'slug'					=> 'star-rating-plugin-van-alexander-reece',
							'description'			=> 'Star rating plugin van Alexander Reece',
							'content'				=> 'Package om het rating systeem werkend te krijgen.',
							'link'					=> 'https://github.com/vulcandigital/jquery-starrating',
							'weborder'				=> 9,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
        				// ID = 10
        				[
							'title'					=> 'Lightbox BS plugin van Ashley White',
							'slug'					=> 'lightbox-bs-plugin-van-ashley-white',
							'description'			=> 'Lightbox BS plugin van Ashley White',
							'content'				=> 'Image lightbox.',
							'link'					=> 'http://ashleydw.github.io/lightbox/',
							'weborder'				=> 10,

							'author_id'				=> 1,
							'author_approve'		=> Carbon::now(),

							'editor_id'				=> 1,
							'editor_approve'		=> Carbon::now(),

							'publisher_id'			=> 1,
							'publisher_approve'		=> Carbon::now(),

							'publish_permanent'		=> 1,
							'publish_date_start'	=> Carbon::now(),
							'publish_date_end'		=> ''

						],
		];
    }
}
