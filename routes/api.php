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
Route::get('admin/home-block/{id}','admin\HomeController@HomeBlock');

Route::get('admin/communityList','admin\CommunityController@data'); 
Route::get('neigh-community-list','user\NeighbourhoodController@ShowCommunityList');
Route::get('neighbour/{type}/{id}','user\NeighbourhoodController@showCommunityHome');
Route::get('neighbour-map/{type}/{id}','user\NeighbourhoodController@map');
Route::post('admin/community/{id}','admin\CommunityController@update');

Route::get( 'admin/home-status', 'CommonController@status');
Route::get( 'admin/dashboard/user', 'CommonController@DashboardUser');
Route::get('admin/user-block/{id}','CommonController@UserBlock');

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
Route::post('admin/changePaas','UserController@changepass');


Route::get('admin/home-gallery/{id}','CommonController@showGallery');
Route::post('admin/update-gal/{id}','CommonController@updateGallery');
Route::delete('admin/home-gallery/{home_id}/{id}','CommonController@deleteGallery');

Route::get('admin/AllSelling/','CommonController@sellingEnquiry');
Route::get('admin/Selling-seen-update/{id}','CommonController@sellingEnquiryUpdate');


Route::get('admin/enquiry/','CommonController@enquiry');
Route::get('admin/enquiry/{id}','CommonController@enquiryDetail');
Route::delete('admin/enquiry/{id}','CommonController@enquiryDelete');
Route::get('/admin/enquiry/update/{id}', 'user\HomeController@UpdateEnquirySeen');


Route::get('admin/floorDetail/{id}','CommonController@userFloor');
Route::get('admin/notification/','CommonController@notification');
Route::get('admin/sell/notification/','CommonController@Sellnotification');




// User Module
Route::post('enquiry','user\HomeController@schedule');
Route::post('selling-home','user\HomeController@SellingHome');
Route::get('floorComponent/{type}/{floor_id}/{component_id}','CommonController@userFloorComponent');

//user create
Route::post('user','UserController@signup');
Route::post('admin/changeUserDeatil','UserController@ChangeDetail');
Route::get('userSell/{id}','CommonController@Userscheduleshow');
Route::get('userSchedule/{id}','CommonController@Usertour');
Route::get('userFavourite/{id}','CommonController@UserFavourite');
Route::get('admin/addFav/{userid}/{homeid}','User\HomeController@addfav');
Route::get('admin/showFav/{userid}/{homeid}','User\HomeController@addfavShow');



Route::get('map','user\HomeController@map');
Route::get('map/{id}','user\HomeController@mapSingle');
Route::get('mapHome','user\HomeController@mapHomeView');
Route::get('summary/{id}','user\HomeController@summary');
Route::get('mapMarkerHome/{lat}/{lng}','user\HomeController@mapMarkerHome');

Route::post('Available','admin\HomeController@Available');
Route::post('Available/{id}','admin\HomeController@Availableupdate');
Route::get('homeAvailable/{id}','CommonController@AvailableShow');
Route::get('Avail/{id}','CommonController@AvailableSingleHome');
Route::delete('home-Avail/{id}','CommonController@DeleteAvail');

Route::delete('userFavourite/{id}','CommonController@DeleteFav');







