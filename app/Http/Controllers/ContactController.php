<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\ClientMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\HomeMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $jsonData = $request->json()->all();
        \Log::info('send email :: '.json_encode($jsonData));
        $fromAddress = 'contact@santeproaudio.fr';
        Mail::to('mohamed.tajmout@gmail.com')->send(new ContactMail($jsonData, $fromAddress));
        Mail::to('contact@santeproaudio.fr')->send(new ContactMail($jsonData, $fromAddress));
        return response()->json(['message' => 'Email sent successfully!']);
    }

    public function sendEmailClient(Request $request)
    {
        $jsonData = $request->json()->all();
        \Log::info('send email client :: '.json_encode($jsonData));
        $fromAddress = 'contact@santeproaudio.fr';
        Mail::to('mohamed.tajmout@gmail.com')->send(new ContactMail($jsonData, $fromAddress));
        if(isset($jsonData['step4']['email'])){
            Mail::to($jsonData['step4']['email'])->send(new ClientMail($jsonData, $fromAddress));
        }
        return response()->json(['message' => 'Email sent successfully!']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prenom' => 'required|string|max:255',
            'nom'  => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'telephone'     => 'required|string|max:20',
            'message'   => 'required|string|max:1000',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Send email
        Mail::to('mohamed.tajmout@gmail.com')->send(new HomeMail($request->all()));
        Mail::to('contact@santeproaudio.fr')->send(new HomeMail($request->all()));

        return response()->json(['message' => 'Message envoyé avec succès!'], 200);
    }
    
}
    