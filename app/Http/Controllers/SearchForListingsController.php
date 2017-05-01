<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchForListingsController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth');
    }


    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',

        ]);

        $listings = \DB::table('listings')
            ->where('listings.description', 'LIKE', '%' . $request->search . '%')
            ->orWhere ('listings.title', 'LIKE', '%' . $request->search . '%')->get();

        return view('displaydesiredlistings', ['listings'=>$listings]);
    }

}
