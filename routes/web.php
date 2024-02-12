<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class, 'index']) ;
Route::get('/product',[ProductController::class, 'product']) ;
Route::get('/product/{id}', function (int $id) {
    return "ficheDeProduit $id";
});

Route::get('/cart', function () {
    return 'cart';
});
