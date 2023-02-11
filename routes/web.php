<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CollectionMethodController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\AdminUtilityController;
use App\Http\Controllers\ExportController;

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
Route::get('/login', [SessionController::class, 'login'])->middleware('auth.redirect');
Route::post('/login', [SessionController::class, 'processLogin']);
Route::get('/guest-logout', [SessionController::class, 'guestLogout']);

Route::get('/registration', [UserController::class, 'registration'])->middleware('auth.redirect');
Route::post('/registration', [UserController::class, 'processRegistration']);

//Dashboard and Admin Area Routes
Route::prefix('admin')->group(function () {

    Route::middleware('administrator')->group(function(){
        
        Route::get('/logout', [SessionController::class, 'logout']);
        Route::get('/dashboard', [SessionController::class, 'dashboard']);

        Route::resource('/user', AdminUserController::class);
        Route::resource('/publisher', PublisherController::class);
        Route::resource('/collection_method', CollectionMethodController::class);
        Route::resource('/storage', StorageController::class);
        Route::resource('/state', StateController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/author', AuthorController::class);
        Route::resource('/book', BookController::class);
        Route::resource('/reading-list', ReadController::class)->except([
            'create'
        ]);

        Route::get('/reading-list-add/{book_id?}', [ReadController::class, 'create']);

        Route::post('/book-search', [BookController::class, 'ajaxBookSearch']);
        Route::post('/publisher-search', [PublisherController::class, 'ajaxPublisherSearch']);
        Route::post('/author-search', [AuthorController::class, 'ajaxAuthorSearch']);

        Route::get('/utility', [AdminUtilityController::class, 'index']);
        Route::get('/utility/delete-unused-images', [AdminUtilityController::class, 'deleteUnusedImages']);

        Route::get('/export', [ExportController::class, 'index']);
        Route::get('/export/excel', [ExportController::class, 'exportToExcel']);

    });

});




