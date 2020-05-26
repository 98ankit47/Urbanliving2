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

 

    // admin section


    

Route::get('/admin','CommonController@Dashboard')->name('dashboard')->middleware('role','auth');
Route::get( 'home', 'CommonController@Dashboard')->name('dashboard')->middleware('role','auth');

   

// Route::post('Alogin','Auth\LoginController@login')->name('Alogin'); 

Route::get('/admin/enquiry',function(){
    return view('admin.enquiry.index');
})->name('enquiry')->middleware('role','auth');

Route::get('/admin/enquiryDetail/{id}',function(){
    return view('admin.enquiry.enquiryDetail');
})->name('enquiry_detail')->middleware('role','auth');

Route::get('/admin/settings',function(){
    return view('admin.settings.index');
})->name('settings')->middleware('role','auth'); 

Route::get('/admin/pages',function(){
    return view('admin.page');
})->name('pages')->middleware('role','auth'); 


Route::get('/admin/pages/edit/{id}',function(){
    return view('admin.edit');
})->name('edit-page')->middleware('role');



Route::get('admin/homes',function(){
    return view('admin.homes.index');
})->name('homes')->middleware('role','auth');

Route::get('admin/home/edit/{id}', function(){
    return view('admin.homes.EditHomeForm');
})->name('edit-home')->middleware('role','auth');
Route::get('admin/home/manage/{id}', function(){
    return view('admin.homes.manage_homes');
})->name('manage-homes')->middleware('role','auth');
Route::get('admin/home/create', function(){
    return view('admin.homes.homeForm');
})->name('create-home')->middleware('auth','auth');


Route::get('admin/community',function(){
    return view('admin.communities.index');
})->name('communities')->middleware('role','auth');

Route::get('/undercons', function () {
    return view('admin.undercons');
})->middleware('role','auth');

Route::get('/availsold', function () {
    return view('admin.availsold');
})->middleware('role','auth');



Route::get('admin/floor', function () {
    return view('admin.floor.index');
})->name('floorView')->middleware('role','auth');;
Route::get('admin/floor-component-gallery/{type}/{id}', function () {
    return view('admin.floor.floor_component');
})->name('FloorComponent')->middleware('role','auth');


Route::get( 'admin/home/manage/{id}', 'admin\HomeFeatureController@index')->middleware('role','auth');

Route::get('/admin/selling/',function(){
    return view('admin.selling.selling');
})->middleware('role','auth');

Route::get('/admin/selling/',function(){
    return view('admin.selling.index');
})->name('selling')->middleware('role','auth');

Route::get('/admin/selling/{id}','CommonController@ShowSell')->middleware('role','auth');

Route::get('/admin/site',function(){
    return view('admin.sitePlan/index');
}); 

// USER FRONT-END

Route::get('/',function(){
    return view('user.index');
}); 
Route::get('/home-map',function(){
    return view('user.MapHome.index');
})->name('homeMap'); 

Route::get('/map-neighbour/{id}','user\HomeController@singleMap')->name('neighbour'); 

Route::get('/homes',function(){
    return view('user.homeDetail.index');
});

Route::get('/userProfile',function(){
    return view('user.userProfile.index');
})->name('profile')->middleware('auth');

Route::get('/neighborDetail/{id}','user\NeighbourhoodController@showCommunityDetail'); 

Route::get('/neighborHome/{type}/{id}','user\NeighbourhoodController@NeighTypeHome')->name('neigTypeHome');


Route::get('/neighbor',function(){
    return view('user.neighbor.index');
})->name('neighbor-map');

Route::get('/sellHome',function(){
    return view('user.sellHome.index');
})->name('selling-home');

Route::get('/development-Detail/{id}','user\HomeController@single')->name('developmentDetail');
 


// end of admin section
Auth::routes();




//user module
Route::get('/search','user\HomeController@search')->name('alldev');
Route::get('/all-development','user\HomeController@AllHome')->name('alldev');
