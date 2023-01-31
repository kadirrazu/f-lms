<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

//Frontend Routes
Route::get('/', function(){
    return view('frontend.index');
});

//Login and Registration Routes
Route::get('/login', [SessionController::class, 'login']);
Route::post('/login', [SessionController::class, 'processLogin']);
Route::get('/guest-logout', [SessionController::class, 'guestLogout']);

//Dashboard and Admin Area Routes
Route::middleware('administrator')->group(function(){
    Route::get('/logout', [SessionController::class, 'logout']);
    Route::get('/dashboard', [SessionController::class, 'dashboard']);
});



