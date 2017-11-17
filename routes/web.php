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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/competitions', 'Cricket\CompetitionsController@index')->name('competitions');
Route::get('/competition/{slug}', 'Cricket\CompetitionsController@show')->name('competition');
Route::get('/competition/{slugc}/league/{slugl}', 'Cricket\LeaguesController@index')->name('league');
Route::get('/competition/{slugc}/league/{slugl}/match/{slugm}', 'Cricket\MatchesController@index')->name('match');
