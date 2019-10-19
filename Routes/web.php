<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('credits')->group(function() {
    Route::get('/', 'CreditsController@index')->name('main.credits');
});


Route::prefix('dashboard/credits')->group(function() {

	Route::get('/', 'CreditsController@index_dashboard')->name('dashboard.credits.index');




	Route::get('/information/create', 'CreditsInformationController@create')->name('dashboard.credits.information.create');

	Route::post('/information/store', 'CreditsInformationController@store')->name('dashboard.credits.information.store');

	Route::patch('/information/edit', 'CreditsInformationController@update')->name('dashboard.credits.information.update');

	Route::patch('/information/approve', 'CreditsInformationController@approve')->name('dashboard.credits.information.approve');

	Route::delete('/information/delete', 'CreditsInformationController@delete')->name('dashboard.credits.information.delete');

	Route::delete('/information/destroy', 'CreditsInformationController@destroy')->name('dashboard.credits.information.destroy');

});