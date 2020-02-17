<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;
use App\Mail\SendMail;
use Mail;
use App\Model\Location;
class SendEmailController extends Controller
{
    //
    /*function index()
    {
    	$locactions = Location::all();
    	return view('frontend.contact',compact('locations'));
    }*/

    function send(MailRequest $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'phone' => $request->phone,
    		'message' => $request->message,
    	);

    	Mail::to('hsumonaung109796@gmail.com')->send(new SendMail($data));
    	return redirect('contact')->with('success', ' Thanks! Your request has been sent.');
    }
}
