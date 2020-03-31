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
]);

Route::post('admin/home/{id}','admin\HomeController@update');
Route::get('admin/communityList','admin\CommunityController@data');
Route::post('admin/community/{id}','admin\CommunityController@update');
Route::get( 'admin/home-status', 'CommonController@status');


Route::get( 'admin/home-feature/{id}', 'CommonController@features');
Route::post( 'admin/home-feature/{id}', 'admin\HomeFeatureController@update');
Route::get( 'admin/home-feature-data/{id}', 'CommonController@featureData');
Route::get( 'admin/home/feature/{id}', 'admin\HomeFeatureController@show');
Route::delete( 'admin/home-feature/{id}', 'admin\HomeFeatureController@destroy');


