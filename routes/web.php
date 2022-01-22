<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
    return view('pages.home');
});
Route::get('/home',[HomeController::class,'Home'])->name('home');
Route::get('/contactus',[HomeController::class,'ContactUs'])->name('contactus');
Route::get('/termsandconditions',[HomeController::class,'TermCondition'])->name('termsandcondition');
Route::get('/refundpolicy',[HomeController::class,'RefundPolicy'])->name('refundpolicy');
Route::get('/login',[LoginController::class,'Login'])->name('login');
Route::get('/signup',[LoginController::class,'SignUp'])->name('signup');
