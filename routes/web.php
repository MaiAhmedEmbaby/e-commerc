<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\FacebookController;

use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\AdminController;


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


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_product_view',[AdminController::class,'addview']);
Route::post('/upload_product',[AdminController::class,'upload'])->middleware('auth','verified');

Route::get('/showproduct',[AdminController::class,'showproduct']);
Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
Route::get('/search',[HomeController::class,'search']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::get('/showcart',[HomeController::class,'showcart']);
Route::get('/delete/{id}',[HomeController::class,'deletecart']);
Route::post('/order',[HomeController::class,'confirmorder']);

Route::get('/showorder',[AdminController::class,'showorder']);

Route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);

Route::get('/view_catagory',[AdminController::class,'view_catagory']);

Route::post('/add_catagory',[AdminController::class,'add_catagory']);

Route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);

Route::get('/showuser',[AdminController::class,'showuser']);




Route::get('/deleteuser/{id}',[AdminController::class,'delete']);

//facebook login url
//Route::prefix('facebook')->name('facebook.')->group( function(){/

    Route::get('auth', [FacebookController::class,'loginUsingFacebook'])->name('facebook.login');
    Route::get('callback', [FacebookController::class,'callbackfromFacebook'])->name('callback');

//});

