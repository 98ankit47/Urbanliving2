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
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');    

Route::get('/admin/floor',function(){
    return view('admin.floor.floor');
})->middleware('auth'); 

Route::get('/admin/settings',function(){
    return view('admin.settings.index');
})->name('settings')->middleware('auth'); 

Route::get('/admin/pages',function(){
    return view('admin.page');
})->name('pages')->middleware('auth'); 


Route::get('/admin/pages/edit/{id}',function(){
    return view('admin.edit');
})->name('edit-page')->middleware('auth');



Route::get('admin/homes',function(){
    return view('admin.homes.index');
})->name('homes')->middleware('auth');

Route::get('admin/home/edit/{id}', function(){
    return view('admin.homes.homeForm');
})->name('edit-home');
Route::get('admin/home/manage/{id}', function(){
    return view('admin.homes.manage_homes');
})->name('manage-homes')->middleware('auth');
Route::get('admin/home/create', function(){
    return view('admin.homes.homeForm');
})->name('create-home')->middleware('auth');


Route::get('admin/community',function(){
    return view('admin.communities.index');
})->name('communities')->middleware('auth');

Route::get('/undercons', function () {
    return view('admin.undercons');
})->middleware('auth');

Route::get('/availsold', function () {
    return view('admin.availsold');
})->middleware('auth');

Route::get('admin/floor', function () {
    return view('admin.floor.index');
})->name('floorView');
Route::get('admin/floor-component-gallery/{type}/{id}', function () {
    return view('admin.floor.floor_component');
})->name('FloorComponent')->middleware('auth');

Route::get( 'admin/home/manage/{id}', 'admin\HomeFeatureController@index');


// end of admin section
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
