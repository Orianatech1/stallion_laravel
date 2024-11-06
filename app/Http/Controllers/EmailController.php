<?php

namespace App\Http\Controllers;

use App\Notifications\SendContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|string|max:100',
            'email'=> 'required|string|max:100',
            'mobile'=> 'required|string|max:100',
            'f_date'=> 'required|string|max:100',
            't_date'=> 'required|string|max:100',
            'carrier'=> 'required|string|max:100',
            'from'=> 'required|string|max:100',
            'fromto'=> 'required|string|max:100',
            'message'=> 'required|string|max:200',
        ]);

        // Send the notification to the specified email
        Notification::route('mail', 'bookings@stallioncoaches.com')->notify(new SendContactForm($data));

        return redirect()->route('thankyou');
    }
}
