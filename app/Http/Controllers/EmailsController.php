<?php

namespace App\Http\Controllers;

use \App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    //
    public function sendEmail(Request $request) 
    {
    	$this->validate($request, [
	    	'name' => 'required',
	    	'email' => 'required|email',
	    	'body' => 'required'
	    ]);

	    $name = $request->get('name');
	    $email = $request->get('email');
	    $body = $request->get('body');
	    $subject = 'Message from AshotKartalyan.com';

	    Mail::to(env('TO_EMAIL'))->send(new ContactUs($name, $email, $subject, $body));

	    return view('contact_confirmation');

    }
}
