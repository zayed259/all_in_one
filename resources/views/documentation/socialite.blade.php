@extends('layouts/backend')

@section('title')
Socialite Package
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <h2 class="card-title package-heading">Laravel Socialite Package</h2>
                        <div class="divider divider-primary divider-dashed">
                            <!-- <div class="divider-text">Primary</div> -->
                            <div class="divider-text">
                                <i class="bx bx-star"></i>
                            </div>
                        </div>
                        <ul class="title-ul">
                            <li>
                                <a href="#introduction">Introduction</a>
                            </li>
                            <li>
                                <a href="#installation">Installation</a>
                            </li>
                            <li>
                                <a href="#configuration">Configuration</a>
                            </li>
                            <li>
                                <a href="#view">View</a>
                            </li>
                            <li>
                                <a href="#social">Creation of the Social app</a>
                            </li>
                            <li>
                                <a href="#env">.env</a>
                            </li>
                            <li>
                                <a href="#routing">Routing</a>
                            </li>
                            <li>
                                <a href="#migration">Migration</a>
                            </li>
                            <li>
                                <a href="#controller">Controller</a>
                            </li>
                            <!-- <li>
                                <a href="#authentication">Authentication</a>
                                <ul>
                                    <li>
                                        <a href="#authentication-and-storage">Authentication &amp; Storage</a>
                                    </li>
                                    <li>
                                        <a href="#access-scopes">Access Scopes</a>
                                    </li>
                                    <li>
                                        <a href="#optional-parameters">Optional Parameters</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="introduction"><a href="#introduction">Introduction</a></h2>
                            <p>In addition to typical, form based authentication, Laravel also provides a simple, convenient way to authenticate with OAuth providers using <a href="https://github.com/laravel/socialite" target="_blank">Laravel Socialite</a>. Socialite currently supports authentication via Facebook, Twitter, LinkedIn, Google, GitHub, GitLab, and Bitbucket.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="installation"><a href="#installation">Installation</a></h2>
                            <p>To get started with Socialite, use the Composer package manager to add the package to your project's dependencies:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>composer require laravel/socialite</pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="configuration"><a href="#configuration">Configuration</a></h2>
                            <p>Before using Socialite, you will need to add credentials for the OAuth providers your application utilizes. Typically, these credentials may be retrieved by creating a "developer application" within the dashboard of the service you will be authenticating with.</p>
                            <p>These credentials should be placed in your application's <code>config/services.php</code> configuration file, and should use the key <code>facebook</code>, <code>twitter</code> (OAuth 1.0), <code>twitter-oauth-2</code> (OAuth 2.0), <code>linkedin</code>, <code>google</code>, <code>github</code>, <code>gitlab</code>, or <code>bitbucket</code>, depending on the providers your application requires:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
=====================
<span class="text-success">config/services.php</span>
=====================

'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    'redirect' => "http://example.com/public/login/google/callback",
],

'facebook' => [
    'client_id' => env('FACEBOOK_CLIENT_ID'),
    'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
    'redirect' => "http://example.com/public/login/facebook/callback",
],

'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => "http://example.com/public/login/github/callback",
],
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="view"><a href="#view">View</a></h2>
                            <p>Now, you need to add some columns in your users table. So, you need to create a migration file for adding columns in your users table. You can create a migration file by using the following command:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">resources/views/auth/login.blade.php</span>
================
<xmp>
//login with google, facebook or github
<div class="social-media">
    <a href="{{ route('login.google') }}" class="google">Login with Google</a>
    <a href="{{ route('login.facebook') }}" class="facebook">Login with Facebook</a>
    <a href="{{ route('login.github') }}" class="github">Login with Github</a>
</div>
</xmp>
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="social"><a href="#social">Creation of the Social App</a></h2>
                            <p>Now, you need to create a social app on the social platform. You can create a social app by using the following links:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
<xmp>
https://github.com/settings/applications/new
https://developers.facebook.com/apps
https://console.developers.google.com/apis/credentials
https://developer.twitter.com/en/apps
https://www.linkedin.com/developers/apps/new
</xmp>
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="env"><a href="#env">.env</a></h2>
                            <p>Now, <code>.env</code> file add your social media credentials. So, you need to add your social media credentials in your <code>.env</code> file. You can add your social media credentials in your <code>.env</code> file by using the following code:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">.env</span>
================
<xmp>
GOOGLE_CLIENT_ID=262552594177-45jaiam3vedn8nt3vigcckge9r14987u.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=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

GITHUB_CLIENT_ID=c9ba6eae99yd072642a27
GITHUB_CLIENT_SECRET=80cf376c1d5dcb65a954b4f1266a5beb4e54f232

FACEBOOK_CLIENT_ID=787852204429620
FACEBOOK_CLIENT_SECRET=869c3cb7e5d097c0667e18fe3db0b6b3
</xmp>
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="routing"><a href="#routing">Routing</a></h2>
                            <p>To authenticate users using an OAuth provider, you will need two routes: one for redirecting the user to the OAuth provider, and another for receiving the callback from the provider after authentication. The example routes below demonstrate the implementation of both routes:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">routes/web.php</span>
================

//login with google
Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

//login with facebook
Route::get('login/facebook', [AuthController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('login.facebook.callback');

//login with github
Route::get('login/github', [AuthController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [AuthController::class, 'handleGithubCallback'])->name('login.github.callback');
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="migration"><a href="#migration">Migration</a></h2>
                            <p>Now, you need to add some columns in your users table. So, you need to create a migration file for adding columns in your users table. You can create a migration file by using the following command:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">database/migrations/2014_10_12_000000_create_users_table.php</span>
================

public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        <mark>$table->string('provider_id')->nullable();</mark>
        <mark>$table->string('avatar')->nullable();</mark>
        $table->timestamp('email_verified_at')->nullable();
        <mark>$table->string('password')->nullable();</mark>
        $table->rememberToken();
        $table->timestamps();
    });
}
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="controller"><a href="#controller">Controller</a></h2>
                            <p>Now, you need to create a controller file for handling the authentication process. You can create a controller file and add the following code in your controller file:</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">app/Http/Controllers/AuthController.php</span>
================

use Laravel\Socialite\Facades\Socialite;


//login with google
public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    $user = Socialite::driver('google')->user();

    $this->_registerOrLoginUser($user);

    return redirect()->route('dashboard');
}

//login with facebook
public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

public function handleFacebookCallback()
{
    $user = Socialite::driver('facebook')->user();

    $this->_registerOrLoginUser($user);

    return redirect()->route('dashboard');
}

//login with github
public function redirectToGithub()
{
    return Socialite::driver('github')->redirect();
}

public function handleGithubCallback()
{
    $user = Socialite::driver('github')->user();

    $this->_registerOrLoginUser($user);

    return redirect()->route('dashboard');
}

protected function _registerOrLoginUser($data)
{
    $user = User::where('email', '=', $data->email)->first();

    if (!$user) {
        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        $user->provider_id = $data->id;
        $user->avatar = $data->avatar;
        $user->save();
    }

    Auth::login($user);
}
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection