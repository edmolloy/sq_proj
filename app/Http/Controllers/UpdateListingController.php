<?php

// This controller handles the updating of listings information.

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateListingController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth');
    }


    public function update(Request $request, $listing_id) {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $id = \DB::table('listings')
            ->where('id', $listing_id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price
            ]);


        if($id) {

            $request->session()->flash('success', 'Your listing has been updated.');

            return back();

        }

        $request->session()->flash('failure', 'Your listing has not been updated.');

        return back();

    }
}
