<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request) {
        return [
            'email' => $request->{$this->username()},
            'password' => $request->password,
            'status' => 1
        ];
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProviderFacebook() {
        if (env('FACEBOOK_CLIENT_ID')) {
            return Socialite::driver('facebook')->redirect();
        } else {
            return view('message', ['message' => 'Access not allowed']);
        }
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallbackFacebook() {
        if (env('FACEBOOK_CLIENT_ID')) {
            $user = Socialite::driver('facebook')->user();

        // $user->token;
        } else {
            return view('message', ['message' => 'Access not allowed']);
        }
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return Response
     */
    public function redirectToProviderTwitter() {
        if (env('TWITTER_CLIENT_ID')) {
            return Socialite::driver('twitter')->redirect();
        } else {
            return view('message', ['message' => 'Access not allowed']);
        }
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return Response
     */
    public function handleProviderCallbackTwitter() {
        if (env('TWITTER_CLIENT_ID')) {
            $user = Socialite::driver('twitter')->user();

        // $user->token;
        } else {
            return view('message', ['message' => 'Access not allowed']);
        }
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToProviderGoogle() {
        if (env('GOOGLE_CLIENT_ID')) {
            return Socialite::driver('google')->redirect();
        } else {
            return view('message', ['message' => 'Access not allowed']);
        }
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleProviderCallbackGoogle() {
        if (env('GOOGLE_CLIENT_ID')) {
            $user = Socialite::driver('google')->user();

        // $user->token;
        } else {
            return view('message', ['message' => 'Access not allowed']);
        }
    }
}
