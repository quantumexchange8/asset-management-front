<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
           
            'recaptcha_token' => 'required'
        ]);
        $recaptchaResponse = $request->input('recaptcha_token');
        
        $client = new Client();
            // Verify the reCAPTCHA response
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptchaResponse,
                    'remoteip' => $request->ip(),
                ]
            ]);

            $responseBody = json_decode((string) $response->getBody());
        if ($responseBody->success && $responseBody->score >= 0.5) {
            try {
                // Send email
                Mail::to('jrjrjrjingru@gmail.com')->send(new SendMail($request->all()));
                session()->flash('success', 'Email sent successfully!');

            } catch (\Exception $e) {
                Log::error('Mail sending failed: ' . $e->getMessage());
                session()->flash('error', 'There was an error sending your email. Please try again later.');
            }
        } else {
            session()->flash('error', 'reCAPTCHA verification failed. Please try again.');
        }  
        return redirect()->back();
    }
}
