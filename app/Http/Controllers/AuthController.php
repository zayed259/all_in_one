<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // public function __construct() {
    //     $this->middleware('guest')->except('logout');
    // }

    // public function index()
    // {
    //     return view('welcome');
    // }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');

        // return redirect()->intended('index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // return redirect()->intended('dashboard');
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    //login with social
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $this->_registerOrLoginUser($user);

        return redirect()->route('dashboard');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();

        if (!$user) {
            
            $provider = explode('.', $data->avatar);
            if($provider[1] == 'githubusercontent') {
                $provider = 'github';
            }
            else if($provider[1] == 'googleusercontent') {
                $provider = 'google';
            }
            else if($provider[1] == 'facebook') {
                $provider = 'facebook';
            }
            else if($provider[1] == 'licdn') {
                $provider = 'linkedin';
            }
            else {
                $provider = 'unknown';
            }
            
            $email = $data->email;
            if($email == null)
            {
                $email = $data->id;
            }
            
            $user = new User();
            $user->name = $data->name;
            $user->email = $email;
            $user->provider = $provider;
            $user->provider_id = $data->id;
            $user->provider_token = $data->token;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
}
