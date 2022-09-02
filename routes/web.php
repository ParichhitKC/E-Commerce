<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FileUploadController;
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

Route::get('fr', function () {
    return view('welcome');
});
Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/shop',[FrontendController::class, 'shop'])->name('shop');
Route::get('/about',[FrontendController::class, 'about'])->name('about');
Route::get('/contact',[FrontendController::class, 'contact'])->name('contact');
Route::get('/account',[FrontendController::class, 'account'])->name('account');
Route::get('/cart',[FrontendController::class, 'cart'])->name('cart');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin-view', [HomeController::class, 'adminView'])->name('index.view');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('category',CategoryController::class);
    Route::get('products.create', [ProductController::class, 'index']);
    Route::post('store', [ProductController::class, 'store']);
    Route::get('/view-image',[ProductController::class,'viewImage'])->name('images.view');

});
