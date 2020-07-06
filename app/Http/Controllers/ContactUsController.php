<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactUsMail;
use App\Providers\ContactUsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function MongoDB\BSON\toCanonicalExtendedJSON;

class ContactUsController extends Controller
{

    public function contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        event(new ContactUsEvent($contact));
        return back()->with('success', 'Message Sent');
    }

}
