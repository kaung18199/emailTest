<?php

use App\Http\Controllers\MailController;
use App\Mail\SendEmailUsingGmail;
use Illuminate\Support\Facades\Mail;
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
    return view('input');
});

Route::get('/send-email-using-gmail',[MailController::class,'send'])->name('email#send');

//


