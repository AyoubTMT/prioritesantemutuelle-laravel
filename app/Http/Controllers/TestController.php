<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{

    
  

    public function test(Request $request)
    {
       dd($request->all());    
    }
}
