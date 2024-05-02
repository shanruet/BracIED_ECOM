<?php

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

Route::get('/', function () {
 
                return view('welcome');
   
})->name('home');
Route::get('/home', function () {
    
    return view('welcome');
});



Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/adminpanel', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpanel')->middleware('verified');
Route::get('/adminpanel/product-category', [App\Http\Controllers\CategoryController::class, 'productcategory'])->name('productcategory')->middleware('verified');
Route::get('/adminpanel/products', [App\Http\Controllers\ProductController::class, 'products'])->name('products')->middleware('verified');
Route::get('/adminpanel/products/view/details/{id}', [App\Http\Controllers\ProductController::class, 'viewproductsdetails'])->name('viewproductsdetails')->middleware('verified');
Route::get('/adminpanel/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users')->middleware('verified');
Route::get('/cart', function () {
    
    return view('view_cart');
});
Route::get('/cart/checkout', function () {
    
    return view('view_checkout');
});
