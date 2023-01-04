<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('landing');
// });

// Route::get('/login',function () {
//     return view('forms.login');
// });
Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/home', [SiteController::class, 'index']);
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/users', [UserController::class, 'index']);
    // Route::get('dashboard', [AdminController::class, 'dashboard']);
    // Route::resource('/accommodations', AccommodationController::class);
    // Route::resource('/bookings', BookingController::class);
    // Route::resource('/customers', CustomerController::class);
    // Route::get('/home', function () {
    //     return view('welcome');
    // });
});


