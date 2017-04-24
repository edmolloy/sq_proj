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


Route::get('/home', 'HomeController@index');


Route::get('settings', ['as'=>'settings',
    function () {
        return view('settings');
}]);


Route::get('electronics', function () {
    return view::make('electronics', array('main_id'=>1,
                                            'num_sub'=>1));
});

Route::get('example', function() {
    return view('example');
});


Route::get('listings', function() {
    return \App\Listing::all();
});

Route::get('users', function() {
    return \App\User::all();
});

Route::get('a', function() {
    return \App\ListingOnWatch::all();
});