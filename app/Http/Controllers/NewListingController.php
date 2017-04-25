<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class NewListingController extends Controller
{
    /*
     * Ensure the user is signed in to access this page
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Updates the email address for a user.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request) {
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

        if($id) {

            $request->session()->flash('success', 'Your listing has been created.');

            return back();

        }

        $request->session()->flash('failure', 'Your listing has not been created.');

        return back();

    }

}