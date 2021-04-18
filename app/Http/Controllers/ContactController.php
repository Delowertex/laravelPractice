<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }

    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ];

        Mail::to('delower.tex30@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Mail has been sent successfully!');
    }
}
