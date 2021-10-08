<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inquiry',[App\Http\Controllers\InquiryController::class, 'show'])->name('inquiry');
Route::post('/inquiry/confirm',[App\Http\Controllers\InquiryController::class, 'confirm']);
Route::post('/inquiry/finish',[App\Http\Controllers\InquiryController::class, 'finish']);
