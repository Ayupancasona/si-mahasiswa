<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail; 
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send()
    {
        Mail::to("user1@biodata-mahasiswa.com")->send(new WelcomeEmail());

        return response()->json("Email send successfully!");
    }
}
