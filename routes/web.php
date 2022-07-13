<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    //return view('welcome');
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/device', [PageController::class, 'device'])->name('device');

Route::get('/product', [PageController::class, 'product'])->name('product');
Route::post('/product/search', [PageController::class, 'search'])->name('product.search');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/table', function () {
    return view('table');
});
