<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class,'index']);
Route::get('/about-us', [PageController::class,'aboutUs']);
Route::get('/property', [PageController::class,'property']);
Route::get('/property/{id}', [PageController::class,'SingleProperty']);
Route::get('/contact-us', [PageController::class,'contactUs']);

Route::get('/property', [PropertyController::class,'index']);
Route::get('/property/create', [PropertyController::class,'create']);
Route::post('/post', [PropertyController::class,'store']);
Route::delete('/property/delete/{id}', [PropertyController::class,'destroy']);
Route::get('/property/edit/{id}', [PropertyController::class,'edit']);
Route::delete('/property/deleteimage/{id}', [PropertyController::class,'deleteimage']);
Route::delete('/property/deletecoverimage/{id}', [PropertyController::class,'deletecoverimage']);
Route::put('/property/update/{id}', [PropertyController::class,'update']);


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
