<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectsController;
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
