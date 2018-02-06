<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use User;
use Validator;

class AccountController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function profile() {
        $user = Auth::user();
        return view('account.profile', compact('user'));
    }

    public function saveProfile(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required',
            'newPassword' => 'sometimes|confirmed',
        ]);

        $validator->validate();

        if ($validator->passes()) {
            if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request['password']])) {
                $user = Auth::user();
                $user->name = $request['name'];
                if ((!is_null($request['newPassword'])) && (!empty($request['newPassword']))) {
                    $user->password = bcrypt($request['newPassword']);
                }
                $user->save();
                session()->flash('message', 'Your profile has been updated.');
                return redirect(route('account.profile'));
            } else {
                return redirect(route('account.profile'))->withErrors(array('password' => 'These credentials do not match our records.'))->withInput($request->only(['name', 'email']));
            }
        }
    }
}
