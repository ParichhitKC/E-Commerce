<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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
Route::get('/Profile',[FrontendController::class, 'Profile'])->name('Profile');
Route::post('updateProfile',[FrontendController::class, 'save'])->name('updateProfile');
Route::get('cart/{id}', [FrontendController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [FrontendController::class, 'updateCart'])->name('cart.update');
Route::post('cart', [FrontendController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [FrontendController::class, 'clearAllCart'])->name('cart.clear');
Route::post('Order', [OrderController::class, 'Order'])->name('order');
// Route::post('CustOrder', [OrderController::class, 'CustOrder'])->name('order');
Route::post('Cust', [OrderController::class, 'Cust'])->name('Cust');
Route::any('Adminorder', [OrderController::class, 'AdminorderView'])->name('AdminorderView');
Route::post('Adminorder/{id}', [OrderController::class, 'Adminorder'])->name('Adminorder');
Route::post('OrderItems', [OrderController::class, 'OrderItems'])->name('orderItems');
Route::any('/esewa/sucess',[App\Http\Controllers\EsewaController::class,'sucess'])->name('esewa.sucess');
Route::any('/esewa/failure',[App\Http\Controllers\EsewaController::class,'failure'])->name('esewa.failure');
Route::post('/khalti/payment/verify',[App\Http\Controllers\KhaltiController::class,'verify'])->name('khalti.verifyPayment');

Route::post('/khalti/payment/store',[App\Http\Controllers\KhaltiController::class,'store'])->name('khalti.storePayment');
// Route::get('settings', [ProfileSettingsController::class, 'edit'])->name('settings.profile');
// Route::put('settings', [ProfileSettingsController::class, 'update'])->name('settings.profile.update');

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
