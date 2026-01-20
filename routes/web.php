<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;





Route::get('/category', [CategoryController::class, 'index'])
    ->name('category.index');

Route::get('/category/{slug}', [CategoryController::class, 'show'])
    ->name('category.show');





Route::get('/product/{slug}', [ProductController::class, 'show'])
    ->name('product.show');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contacts', [PageController::class, 'contacts'])
    ->name('contacts');

Route::post('/subscribe', [NewsletterController::class, 'store'])
    ->name('newsletter.subscribe');

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

