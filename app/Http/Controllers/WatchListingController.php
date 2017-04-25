<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchListingController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Updates the email address for a user.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'sub_cat_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $user_id = Auth::user()->id;

        $id = \DB::table('listings')->insertGetId([
            'user_id' => $user_id,
            'sub_cat_id' => $request->sub_cat_id,
            'price' => $request->price,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($id) {

            $request->session()->flash('success', 'This listing has been added to you "Listings on Watch".');

            return back();
        }

        $request->session()->flash('failure', 'Your listings has not been added to you "Listings on Watch".');

        return back();
    }
}
