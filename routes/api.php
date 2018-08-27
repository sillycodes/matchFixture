<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::post('register', 'API\RegisterController@register');

//Route::resource('login', 'API\UserController@login');
// // Route::resource('teams', 'API\TeamController@show');
Route::get('teams', 'API\TeamController@show');
Route::get('teams/{id}', 'API\TeamController@show');
// Route::get('get_players/{team_id}', 'API\TeamController@teamPlayers');
Route::get('players/{team_id}', 'API\PlayerController@index');
Route::get('fixture', 'API\FixtureController@index');
Route::get('fixture/create', 'API\FixtureController@createFixture');
Route::get('tournament', 'API\TournamentController@index');

// Route::middleware('auth:api')->group( function () {
	// Route::resource('teams', 'API\TeamController@show');
// });
////
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
