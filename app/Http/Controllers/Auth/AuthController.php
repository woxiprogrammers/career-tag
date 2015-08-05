<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        //$user = Socialite::driver('github')->user();

        try {
            $user = Socialite::driver('github')->user();
            dd($user);
        } catch (Exception $e) {
            return Redirect::to('auth/github');
        }

        /*$authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('home');*/
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToLinkedIn()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallbackLinkedIn()
    {
        //$user = Socialite::driver('github')->user();

        try {
            $user = Socialite::driver('linkedin')->user();
            dd($user);
        } catch (Exception $e) {
            return Redirect::to('auth/linkedin');
        }

        /*$authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('home');*/
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToXing()
    {
        return Socialite::with('xing')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallbackXing()
    {
        //$user = Socialite::driver('github')->user();

        try {
            $user = Socialite::with('xing')->user();
            dd($user);
        } catch (Exception $e) {
            return Redirect::to('auth/linkedin');
        }

        /*$authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('home');*/
    }
}
