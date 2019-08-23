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

$api->version('v1',['middleware' => 'api_token'] ,function ($api) {
    $api->get('groups/', 'App\Api\Controllers\GroupController@index');
    $api->get('groups/{id}', 'App\Api\Controllers\GroupController@show');
    $api->get('groups/{lang}/{id}', 'App\Api\Controllers\GroupController@showTranslate');

});


//Route::get('/example/{api_token}/{name}', function (Request $request) {
//    return response()->json([
//        'name' => $request->name,
//    ]);
//})->middleware('api_token');


//$api->get('groups', 'Api\Controllers\GroupController@show');


//Route::get('groups', 'GroupController@index');

