<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){

    	$message = request()->validate([
    		'txtname' => 'required',
    		'txtemail' => 'required|email',
    		'txtsubject' => 'required',
    		'txtcontent' => 'required',
    	],[
            'txtname.required' => __('I need your name')
        ]);

    	Mail::to('chepseyer@gmail.com')->queue(new MessageReceived($message));
    	return back()->with('status','Message was sent!');
    }
}