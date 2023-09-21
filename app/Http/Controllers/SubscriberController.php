<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
   
    public function registerSubscriber(Request $request)
    {

        Subscriber::firstOrCreate([
            'email' => $request->email
        ]);
        
        return back();
    }

}
