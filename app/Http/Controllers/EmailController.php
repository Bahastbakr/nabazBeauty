<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\models\Email;

class EmailController extends Controller
{


    public function store(Request $request)
    {
        $contact = new Email();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        \Mail::send('contact.contactMail', array(

            'name' => $request->name,

            'email' => $request->email,

            'messages' => $request->message

        ), function ($message) use ($request) {

            $message->from($request->email);
            $message->subject("New Message!");

            $message->to('info@nabazbeauty.com', 'Admin');
        });
        return redirect('/#submitted')->with(['success' => "Your form has been submitted successfully !"]);
    }
}
