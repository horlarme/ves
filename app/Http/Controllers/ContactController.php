<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage()
    {
    	request()->validate([
    		'message' => 'required|min:10',
    		'email' => 'required|email',
    		'fullName' => 'required|min:4'
    	]);

    	\Mail::raw((request()->message), function($mail){
    		$mail->to(env('contact_mail'));
            $mail->from(request()->email, request()->fullName);
            $mail->subject("Someone Contacted you through the website.");
    	});

		return rediect()->route('contact_page')->with('message', "Your message is has been received.");
    }
}
