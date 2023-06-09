<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    // echo number_format(usdToBdt(100),2);
    return view('domain_checker');
    // echo domainChecker('crackit-bd.com');
});


Route::middleware('guest')->group(function () {
    // Route::get('/', [AuthController::class, 'index'])->name('home');
    // login
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'check'])->name('checklogin');

    //login with social
    Route::get('login/{provider}', [AuthController::class, 'redirect']);
    Route::get('login/{provider}/callback', [AuthController::class, 'callback']);

    // register
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'store'])->name('store');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // documentation
    Route::get('socialite', [DocumentationController::class, 'socialite'])->name('socialite');
    Route::get('copy_to_clipboard', [DocumentationController::class, 'copy_to_clipboard'])->name('copy_to_clipboard');
    Route::get('dompdf', [DocumentationController::class, 'dompdf'])->name('dompdf');

    // logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    //student registration
    Route::get('student-registration', [DashboardController::class, 'index'])->name('student-registration');
    Route::post('student-registration', [DashboardController::class, 'store'])->name('student-registration-store');
});