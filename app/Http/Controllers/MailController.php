<?php

namespace App\Http\Controllers;

use App\Mail\MailSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function home(){
        return view('landingPage');
    }

    public function landingForm(Request $request)
    {
        // Validation
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'date_of_birth' => 'required|date',
            'marital_status' => 'required',
            'package' => 'required'
        ]);

        $data = $request->only([
            'first_name', 'last_name', 'email', 'phone', 'date_of_birth', 'marital_status', 'package','message'
        ]);
        // dd($data);

        try {
            // Send email
           $mailData = Mail::to('akgoswami086@gmail.com')->send(new MailSent($data));
        //    dd($mailData);

            return response()->json([
                'status' => 'success',
                'message' => 'Form submitted and email sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email sending failed: '.$e->getMessage()
            ]);
        }
    }
}