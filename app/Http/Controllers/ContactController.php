<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'captcha' => 'required|captcha', // Validate the CAPTCHA
        ], [
            'captcha.captcha' => 'The CAPTCHA verification failed. Please try again.',
        ]);

        try {
            // Send email
            Mail::to('jrjrjrjingru@gmail.com')->send(new SendEmail($request->all()));
            session()->flash('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            // Log the error and show an error message
            Log::error('Mail sending failed: ' . $e->getMessage());
            session()->flash('error', 'There was an error sending your email. Please try again later.');
        }
        return redirect()->back();
    }
}
