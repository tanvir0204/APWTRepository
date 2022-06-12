<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteStudentProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('pages/registration', [StudentController::class, 'registration'])->name('registration');
Route::post('pages/registration', [StudentController::class, 'studentCreateSubmitted'])->name('registration');
Route::get('pages/login', [StudentController::class, 'login'])->name('login');
Route::post('pages/login', [StudentController::class, 'loginSubmitted'])->name('login');
Route::get('pages/contactus', [StudentController::class, 'contactus'])->name('contactus');
Route::post('pages/contactus', [StudentController::class, 'messageSend'])->name('contactus');
