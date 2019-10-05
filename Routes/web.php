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
});