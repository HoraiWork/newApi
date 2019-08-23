<?php

use Illuminate\Http\Request;
Use App\Groups;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('groups', 'App\Api\Controllers\GroupController@index');
});


//$api->get('groups', 'Api\Controllers\GroupController@show');


//Route::get('groups', 'GroupController@index');

