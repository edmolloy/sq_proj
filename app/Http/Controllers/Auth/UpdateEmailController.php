<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UpdateEmailController extends Controller
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
    public function update(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'email_confirmation' => 'required'
        ]);

        $user = User::find(Auth::id());
        $count = User::where('email', '=', $request->email)->count();

        if ($request->email == $request->email_confirmation) {

            if ($request->email == $user->email) {

                $request->session()->flash('failure', 'Your email has not been changed. This email is already associated with your account.');

                return back();
            }

            if ($count) {

                $request->session()->flash('failure', 'Your email has not been changed. This email is already associated with another account.');

                return back();
            }

            if (!$count && ($request->email != $user->email)) {

                $user->fill([
                    'email' => $request->email
                ])->save();

                $request->session()->flash('success', 'Your email has been changed');

                return back();
            }
        }

        $request->session()->flash('failure', 'Your email has not been changed.');

        return back();
    }

}