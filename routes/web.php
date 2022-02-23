<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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



Route::post('/loginfo',[UserController::class ,'login'])->name('logpage');

Route::get('/',function(){
        return view('ecommerce.login');
    });

Route::get('/product', [ProductController::class ,'product']);

Route::post('/add',[ProductController::class ,'add']);

Route::get('/showadd',[ProductController::class ,'showadd']);
Route::get('/detail/{id}',[ProductController::class ,'detail']);
Route::post('/add-to-cart',[ProductController::class ,'addTocart']);

Route::get('/logout' ,function(){
    Session::forget('user');
    return redirect('/');
});

Route::get('/mylogin' ,function(){
    return view('ecommerce.mylogin');
});

Route::post('/mylogin' ,[ProductController::class ,'login']);

Auth::routes();


