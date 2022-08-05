<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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
    return view('welcome');
});
Route::get('pages/aboutus', [ServiceController::class, 'aboutus'])->name('aboutus');
Route::get('pages/contactus', [ServiceController::class, 'contactus'])->name('contactus');
Route::get('/pages/home', [ServiceController::class, 'home'])->name('home');
Route::get('pages/teams', [ServiceController::class, 'teams'])->name('teams');
Route::get('pages/product', [ServiceController::class, 'product'])->name('product');

