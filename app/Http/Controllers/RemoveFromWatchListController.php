<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemoveFromWatchListController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth');
    }

    public function update(Request $request, $listing_id) {


    }

}
