<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ExhibitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

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








Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->middleware('verified')->name('home');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sms', [HomeController::class, 'sms'])->middleware('verified')->name('sms');


Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-cart/{id}', [ProductController::class, 'addCart'])->name('cart.add');
Route::patch('update-cart', [ProductController::class, 'updateCart'])->name('cart.update');
Route::delete('remove-cart', [ProductController::class, 'removeCart'])->name('cart.remove');

Route::middleware('auth')->group(function () {  
    Route::post('exhibit/dropzoneMedia', [ExhibitController::class, 'dropzoneMedia'])->name('exhibit.media');
    Route::resource('exhibit', ExhibitController::class);

    Route::get('payment-card', [PaymentController::class, 'card_index'])->name('card.index');
    Route::post('payment-card', [PaymentController::class, 'card_pay'])->name('card.pay');
    Route::get('payment-bank', [PaymentController::class, 'bank_index'])->name('bank.index');
    Route::post('payment-bank', [PaymentController::class, 'bank_pay'])->name('bank.pay');
});