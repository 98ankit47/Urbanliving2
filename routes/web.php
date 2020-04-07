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

    // admin section
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard');    

Route::get('/admin/floor',function(){
    return view('admin.floor.floor');
}); 

Route::get('/admin/settings',function(){
    return view('admin.settings.index');
})->name('settings'); 

Route::get('/admin/pages',function(){
    return view('admin.page');
})->name('pages'); 


Route::get('/admin/pages/edit/{id}',function(){
    return view('admin.edit');
})->name('edit-page');



Route::get('admin/homes',function(){
    return view('admin.homes.index');
})->name('homes');

Route::get('admin/home/edit/{id}', function(){
    return view('admin.homes.homeForm');
})->name('edit-home');
Route::get('admin/home/manage/{id}', function(){
    return view('admin.homes.manage_homes');
})->name('manage-homes');
Route::get('admin/home/create', function(){
    return view('admin.homes.homeForm');
})->name('create-home');


Route::get('admin/community',function(){
    return view('admin.communities.index');
})->name('communities');

Route::get('/undercons', function () {
    return view('admin.undercons');
});

Route::get('/availsold', function () {
    return view('admin.availsold');
});

Route::get('admin/floor', function () {
    return view('admin.floor.index');
})->name('floorView');
Route::get('admin/floor-component-gallery/{type}/{id}', function () {
    return view('admin.floor.floor_component');
})->name('FloorComponent');

Route::get( 'admin/home/manage/{id}', 'admin\HomeFeatureController@index');


// end of admin section
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
