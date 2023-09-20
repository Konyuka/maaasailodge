<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Mail\BookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BookingController extends Controller
{
    public function submitBookingForm(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'message' => 'required',
                'inDate' => 'after_or_equal:today'
            ]
        );

        $bookingData = Booking::create([
            'name' => $validate['name'],
            'phone' => $validate['phone'],
            'message' => $validate['message'],
            'inDate' => $validate['inDate'],
            'email' => $request->email,
            'outDate' => $request->outDate,
            'adults' => $request->adults,
            'children' => $request->children,
        ]);

        Mail::to(env('SUPPORT_EMAIL'))->send(new BookingNotification($bookingData));

    }

}
