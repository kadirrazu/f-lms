<?php

use App\Http\Controllers\AdminSearchController;
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
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\QuoteController;

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
Route::get('/', [FrontendController::class, 'index']);
Route::get('/facts', [FrontendController::class, 'getFactsPage']);
Route::get('/category-clouds', [FrontendController::class, 'getCategoryCloudsPage']);
Route::get('/advance-search', [FrontendController::class, 'getAdvanceSearchPage']);
Route::get('/latest-reads', [FrontendController::class, 'getLatestReadsPage']);
Route::post('front-end/anything-search', [AdminSearchController::class, 'ajaxAnythingSearch']);

//Login and Registration Routes
Route::get('/login/{refferer?}', [SessionController::class, 'login'])->middleware('auth.redirect');
Route::post('/login', [SessionController::class, 'processLogin']);
Route::get('/guest-logout/{refferer?}', [SessionController::class, 'guestLogout']);

Route::get('/registration', [UserController::class, 'registration'])->middleware('auth.redirect');
Route::post('/registration', [UserController::class, 'processRegistration']);

Route::get('/view-book/{id}', [FrontendController::class, 'viewBookById']);
Route::get('/view-author/{id}', [FrontendController::class, 'viewAuthorBooksById']);
Route::get('/view-publisher/{id}', [FrontendController::class, 'viewPublisherBooksById']);
Route::get('/view-category/{id}', [FrontendController::class, 'viewCategoryBooksById']);
Route::get('/favourite-list', [FrontendController::class, 'favouriteListByUser']);
Route::get('/add-favourite/{id}', [FrontendController::class, 'addIntoFavouriteList']);
Route::get('/remove-favourite/{id}', [FrontendController::class, 'removeFromFavouriteList']);

Route::post('/book-request-submission', [RequestController::class, 'fronendRequestSubmission']);

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
        Route::resource('/quote', QuoteController::class);

        Route::resource('/reading-list', ReadController::class)->except([
            'create'
        ]);

        Route::resource('/favourite', FavouriteController::class)->except([
            'create'
        ]);
        
        Route::resource('/request', RequestController::class)->except([
            'create'
        ]);

        Route::get('/reading-list-add/{book_id?}', [ReadController::class, 'create']);
        Route::get('/favourite-add/{book_id?}', [FavouriteController::class, 'create']);

        Route::post('/book-search', [BookController::class, 'ajaxBookSearch']);
        Route::post('/publisher-search', [PublisherController::class, 'ajaxPublisherSearch']);
        Route::post('/author-search', [AuthorController::class, 'ajaxAuthorSearch']);

        Route::get('/utility', [AdminUtilityController::class, 'index']);
        Route::get('/utility/delete-unused-images', [AdminUtilityController::class, 'deleteUnusedImages']);
        Route::get('/utility/resize-images', [AdminUtilityController::class, 'resizeImages']);
        Route::get('/utility/clean-cache', [AdminUtilityController::class, 'cleanCache']);

        Route::get('/export', [ExportController::class, 'index']);
        Route::get('/export/excel', [ExportController::class, 'exportToExcel']);

        Route::get('/search-author/{id}', [AdminSearchController::class, 'searchAuthorById']);
        Route::get('/search-publisher/{id}', [AdminSearchController::class, 'searchPublisherById']);
        Route::get('/search-category/{id}', [AdminSearchController::class, 'searchCategoryById']);
        Route::get('/search-collection-method/{id}', [AdminSearchController::class, 'searchCollectionMethodById']);
        Route::post('/anything-search', [AdminSearchController::class, 'ajaxAnythingSearch']);

    });

});




