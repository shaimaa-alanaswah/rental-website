<?php

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
// routes/web.php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;


// Roles
Route::resource('roles', RoleController::class);

// Users
Route::resource('users', UserController::class);

// Properties
Route::resource('properties', PropertyController::class);

// PropertyTypes
Route::resource('property_types', PropertyTypeController::class);

// Locations
Route::resource('locations', LocationController::class);

// Bookings
Route::resource('bookings', BookingController::class);

// Reviews
Route::resource('reviews', ReviewController::class);

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/sign_up', 'sign_up')->name('sign_up');
    Route::get('/login1', 'login1')->name('login1');
    Route::post('/login', 'login')->name('login');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


