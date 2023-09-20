<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormNotification;



class ContactFormController extends Controller
{
  
    public function submitContactForm(Request $request) 
    {
        $contactData = ContactForm::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::to('michaelsaiba84@gmail.com')->send( new ContactFormNotification($contactData) );

        return back()->with('messsage', 'We will reach out in a few');

    }

}