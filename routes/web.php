<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return redirect()->route('contact');
});

Route::get('/contact', [ProspectsController::class, 'form'])->name('contact');
Route::post('/contact', [ProspectsController::class, 'store'])->name('contact.store');
Route::get('/thank-you', [ProspectsController::class, 'thankYou'])->name('thank-you');

Route::get('/prospects', [ProspectsController::class, 'index'])->name('prospects.index');
Route::delete('/prospects/{prospect}', [ProspectsController::class, 'destroy'])->name('prospects.destroy');
Route::post('/prospects/{prospect}/transform', [ProspectsController::class, 'transform'])->name('prospects.transform');
Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrdersController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');
Route::put('/orders/{order}/status', [OrdersController::class, 'changeStatus'])->name('orders.changeStatus');


