<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchForListingsController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth');
    }


    public function search($key_word) {

        $listings = \DB::table('listings')
            ->where('description', 'LIKE', '%$key_word%')->get();

    }
}
