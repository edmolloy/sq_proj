<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchListController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth');
    }

    public function add($listing_id) {

        \DB::beginTransaction();

        \DB::table('listings_on_watch')->insert(
            ['user_id' => \Auth::user()->id, 'listing_id' => $listing_id
        ]);

        \DB::commit();

        return redirect()->route('watchlistings');
    }


    public function remove($listing_id) {

        \DB::beginTransaction();

        \DB::table('listings_on_watch')->where([
            ['user_id', '=', \Auth::user()->id],
            ['listing_id', '=', $listing_id]
        ])->delete();

        \DB::commit();

        return redirect()->route('watchlistings');
    }
}
