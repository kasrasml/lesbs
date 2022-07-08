<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TRController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('',[HomeController::class,'home'])->name('home');
Route::get('contact',[ContactController::class, 'contact'])->name('contact');
Route::get('TR',[TRController::class,'TR'])->name('TR');
Route::get('FAQ',[FAQController::class,'FAQ'])->name('FAQ');
Route::get('cart',[CartController::class,'cart'])->name('cart');
Route::get('checkout',[CheckController::class,'checkout'])->name('checkout');
Route::get('showCategory',[CategoryController::class,'showCategory'])->name('showCategory');
Route::get('showProduct',[ProductController::class,'showProduct'])->name('showProduct');
Route::get('login',[UserController::class,'login'])->name('login');
Route::get('register',[UserController::class,'register'])->name('register');
Route::get('poobon', [App\Http\Controllers\PoobonController::class, 'Poobon'])->name('Poobon');