<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SslCommerzPaymentController;

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

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('/login',[LoginController::class,'Login'])->name('login');
Route::post('/userlogin',[LoginController::class,'UserLogin'])->name('user.login');
Route::get('/logout',[LoginController::class,'userlogout'])->name('logout');
Route::get('/signup',[LoginController::class,'SignUp'])->name('signup');
Route::post('/usersignup',[LoginController::class,'UserSignup'])->name('user.signup');
Route::get('/home',[HomeController::class,'Home'])->name('home');
Route::get('/contactus',[HomeController::class,'ContactUs'])->name('contactus');
Route::get('/termsandconditions',[HomeController::class,'TermCondition'])->name('termsandcondition');
Route::get('/refundpolicy',[HomeController::class,'RefundPolicy'])->name('refundpolicy');
Route::get('/privacypolicy',[HomeController::class,'PrivacyPolicy'])->name('privacy.policy');
Route::get('/faq',[HomeController::class,'Faq'])->name('faq');
Route::get('/cookiespolicy',[HomeController::class,'CookiesPolicy'])->name('cookies.policy');
Route::get('/license',[HomeController::class,'LicenseAgreement'])->name('license.agreement');
Route::get('/copyright',[HomeController::class,'CopyrightInformation'])->name('copyright');
Route::get('/aboutus',[HomeController::class,'AboutUs'])->name('about.us');
Route::get('/digital-marketting',[ServiceController::class,'Digitalmarketting'])->name('read.digital.marketting');
Route::get('/web-hosting',[ServiceController::class,'Webhosting'])->name('read.web.hosting');
Route::get('/web-development',[ServiceController::class,'Webdevelopment'])->name('read.web.development');
Route::get('/payment',[StripeController::class,'Payment'])->name('payment');
Route::post('/stripe', [StripeController::class, 'stripePost'])->name('stripe.post');




