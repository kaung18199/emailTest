<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailUsingGmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        // dd(request('email'));
        $email = request('email');
        Mail::to("$email")->send(new SendEmailUsingGmail());
        return "Mail sent";

    }
}
