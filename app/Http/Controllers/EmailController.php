<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact()
    {
        return view('contactus.home');
    }

    public function sendEmail(Request $request){
        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'messages' => $request->messages,
        ];

        $emailData = new Email();
        $emailData->name = $details['name'];
        $emailData->email = $details['email'];
        $emailData->phone = $details['phone'];
        $emailData->messages = $details['messages'];
        $emailData->save();
        
        Mail::to('hamidganteng667@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}