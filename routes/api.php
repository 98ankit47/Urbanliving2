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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resources([
    'page'              => 'Admin\PageController',
    'admin/home'        => 'Admin\HomeController',
    'admin/community'   => 'Admin\CommunityController',
    'admin/floor'       => 'Admin\FloorController',
]);

Route::post('admin/home/{id}','admin\HomeController@update');
Route::get('admin/homelist','admin\HomeController@data');

Route::get('admin/communityList','admin\CommunityController@data');
Route::post('admin/community/{id}','admin\CommunityController@update');

Route::get( 'admin/home-status', 'CommonController@status');
Route::get( 'admin/dashboard/user', 'CommonController@DashboardUser');

Route::post( 'admin/floor/{id}', 'admin\FloorController@update');
Route::get( 'admin/floor-home/{id}', 'admin\FloorController@showHomeFloor');
Route::get( 'admin/floor-data/{id}', 'admin\FloorController@showModelFloor');
Route::get( 'admin/floor-component-gallery/{type}/{home_id}', 'admin\FloorController@showFloorComponent');
Route::delete( 'admin/floor-component/delete/{id}', 'admin\FloorController@deleteFloorComponent');
Route::post( 'admin/floor-component', 'admin\FloorController@componentstore');
Route::post( 'admin/floor-component/{id}', 'admin\FloorController@componentupdate');
Route::get( 'admin/floor-component/{id}', 'admin\FloorController@componentshow');


Route::get( 'admin/home-feature/{id}', 'CommonController@features');
Route::post( 'admin/home-feature', 'admin\HomeFeatureController@store');
Route::post( 'admin/home-feature/{id}', 'admin\HomeFeatureController@update');
Route::get( 'admin/home-feature-data/{id}', 'CommonController@featureData');
Route::get( 'admin/home/feature/{id}', 'admin\HomeFeatureController@show');
Route::delete( 'admin/home-feature/{id}', 'admin\HomeFeatureController@destroy');

Route::get('admin/logo','CommonController@logo');
Route::post('admin/logo','CommonController@addLogo');


