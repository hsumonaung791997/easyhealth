<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;

class SendEmailController extends Controller
{
    //
    function index()
    {
    	return view('frontend.contact');
    }

    function send(MailRequest $request)
    {

    }
}
