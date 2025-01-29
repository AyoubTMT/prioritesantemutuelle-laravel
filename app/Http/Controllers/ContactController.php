<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\ClientMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $jsonData = $request->json()->all();
        \Log::info('send email :: '.json_encode($jsonData));
        $fromAddress = 'contact@santeproaudio.fr';
        Mail::to('mohamed.tajmout@gmail.com')->send(new ContactMail($jsonData, $fromAddress));
        Mail::to('contact@santeproaudio.fr')->send(new ContactMail($jsonData, $fromAddress));
        if(isset($jsonData['step4']['email'])){
            Mail::to($jsonData['step4']['email'])->send(new ClientMail($jsonData, $fromAddress));
        }
        return response()->json(['message' => 'Email sent successfully!']);
    }
}
    