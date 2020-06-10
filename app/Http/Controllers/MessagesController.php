<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
   public function store()
    {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' =>'required',
    		'content' =>'required|min:3'

    	]);

        Mail::to('pedro.tapiacast@gmail.com')->send(new MessageReceived($message));

        return 'mensaje enviado';

    }
}
