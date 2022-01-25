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
Route::get('/property-detail/{id}', [PageController::class,'SingleProperty']);
Route::get('/contact-us', [PageController::class,'contactUs']);
Route::get('/team', [PageController::class,'team']);
Route::get('/all-properties', [PageController::class,'allProperty']);

Route::get('/property', [PropertyController::class,'index'])->middleware('auth');
Route::get('/add-property', [PropertyController::class,'create'])->middleware('auth');
Route::post('/post', [PropertyController::class,'store'])->middleware('auth');;
Route::delete('/property/delete/{id}', [PropertyController::class,'destroy'])->middleware('auth');;
Route::get('/property/edit/{id}', [PropertyController::class,'edit'])->middleware('auth');;
Route::delete('/property/deleteimage/{id}', [PropertyController::class,'deleteimage'])->middleware('auth');;
Route::delete('/property/deletecoverimage/{id}', [PropertyController::class,'deletecoverimage'])->middleware('auth');;
Route::put('/property/update/{id}', [PropertyController::class,'update'])->middleware('auth');;


Auth::routes();
Route::get('/home', [App\Http\Controllers\PropertyController::class, 'index'])->name('home');
