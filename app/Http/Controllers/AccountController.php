<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function profile() {
        $user = Auth::user();
        return view('account.profile', compact('user'));
    }

    public function saveProfile(Request $request) {
        return $request;
    }
}
