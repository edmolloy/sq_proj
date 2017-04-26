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


Route::get('example', function () {
    $listings = \DB::table('listings')
        ->where('listings.description', 'LIKE', '%iPhone%')
        ->orWhere('listings.title', 'LIKE', '%iPhone%')->get();

    return view('example', ['listings'=>$listings]);
});

Route::get('updatelisting/{listing_id}', function ($listing_id) {
    $listing = \App\Listing::find($listing_id);

    return view('updatelisting', ['listing'=>$listing]);
});

Route::post('updatelisting/{listing_id}', 'UpdateListingController@update');


Route::get('removefromwatchlist/{listing_id}', 'WatchListController@remove');
Route::get('addtowatchlist/{listing_id}', 'WatchListController@add');

Route::get('searchforlistings/{key_word}', 'SearchForListingsController@search');


Route::get('mylistings', ['as'=>'mylistings',
    function () {
        $listings = \App\User::find(Auth::user()->id)->listings;

        return view('mylistings', ['listings'=>$listings]);
}]);


Route::get('watchlistings', ['as'=>'watchlistings',
    function () {
        $listings_temp = \App\User::find(Auth::user()->id)->listingsOnWatch;
        $listing_list = array();

        foreach ($listings_temp as $listing) {
            array_push($listing_list, $listing->listing_id);
        }
        $listings = \App\Listing::find($listing_list);

        return view('watchlistings', ['listings'=>$listings]);
}]);


Route::get('newlisting', ['as'=>'newlisting',
    function () {
        return view('newlisting');
}]);
Route::post('newlisting', 'NewListingController@create');


Route::get('listings/electronics/phones', ['as'=>'listings/electronics/phones',
    function () {
        $listings = \App\Listing::all();

        return view('listings/electronics/phones', ['listings'=>$listings]);
}]);

Route::get('listings/electronics/tvs', ['as'=>'listings/electronics/tvs',
    function () {
        $listings = \App\Listing::all();

        return view('listings/electronics/tvs', ['listings'=>$listings]);
}]);

Route::get('listings/electronics/computers', ['as'=>'listings/electronics/computers',
    function () {
        $listings = \App\Listing::all();

        return view('listings/electronics/computers', ['listings'=>$listings]);
}]);

Route::get('listings/electronics/appliances', ['as'=>'listings/electronics/appliances',
    function () {
        $listings = \App\Listing::all();

        return view('listings/electronics/appliances', ['listings'=>$listings]);
}]);

Route::get('listings/electronics/other', ['as'=>'listings/electronics/other',
    function () {
        $listings = \App\Listing::all();

        return view('listings/electronics/other', ['listings'=>$listings]);
}]);

Route::get('listings/automobiles/cars', ['as'=>'listings/automobiles/cars',
    function () {
        $listings = \App\Listing::all();

        return view('listings/automobiles/cars', ['listings'=>$listings]);
}]);

Route::get('listings/automobiles/trucks', ['as'=>'listings/automobiles/trucks',
    function () {
        $listings = \App\Listing::all();

        return view('listings/automobiles/trucks', ['listings'=>$listings]);
}]);

Route::get('listings/automobiles/motorcycles', ['as'=>'listings/automobiles/motorcycles',
    function () {
        $listings = \App\Listing::all();

        return view('listings/automobiles/motorcycles', ['listings'=>$listings]);
}]);

Route::get('listings/automobiles/other', ['as'=>'listings/automobiles/other',
    function () {
        $listings = \App\Listing::all();

        return view('listings/automobiles/other', ['listings'=>$listings]);
}]);

Route::get('listings/clothing/mens', ['as'=>'listings/clothing/mens',
    function () {
        $listings = \App\Listing::all();

        return view('listings/clothing/mens', ['listings'=>$listings]);
}]);

Route::get('listings/clothing/womens', ['as'=>'listings/clothing/womens',
    function () {
        $listings = \App\Listing::all();

        return view('listings/clothing/womens', ['listings'=>$listings]);
}]);

Route::get('listings/clothing/kids', ['as'=>'listings/clothing/kids',
    function () {
        $listings = \App\Listing::all();

        return view('listings/clothing/kids', ['listings'=>$listings]);
}]);

Route::get('listings/furniture/bedroom', ['as'=>'listings/furniture/bedroom',
    function () {
        $listings = \App\Listing::all();

        return view('listings/furniture/bedroom', ['listings'=>$listings]);
}]);

Route::get('listings/furniture/kitchen', ['as'=>'listings/furniture/kitchen',
    function () {
        $listings = \App\Listing::all();

        return view('listings/furniture/kitchen', ['listings'=>$listings]);
}]);

Route::get('listings/furniture/office', ['as'=>'listings/furniture/office',
    function () {
        $listings = \App\Listing::all();

        return view('listings/furniture/office', ['listings'=>$listings]);
}]);

Route::get('listings/furniture/other', ['as'=>'listings/furniture/other',
    function () {
        $listings = \App\Listing::all();

        return view('listings/furniture/other', ['listings'=>$listings]);
}]);



/**
 * Route::get returns view::reset_password.
 *
 * Route::post processes the user->reset_password
 */
Route::get('reset_password', ['as'=>'reset_password',
    function () {
        return view('reset_password');
}]);
Route::post('reset_password', 'Auth\UpdatePasswordController@update');


/**
 * Route::get returns view::reset_email
 *
 * Route::post processes the user->email change.
 */
Route::get('reset_email', ['as'=>'reset_email',
    function () {
        return view('reset_email');
}]);
Route::post('reset_email', 'Auth\UpdateEmailController@update');
