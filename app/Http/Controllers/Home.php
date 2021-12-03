<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\contactMail;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Mail;

class Home extends Controller
{
   public function contact_form(Request $request){

    $to  =  "mauryapiyush713@gmail.com";

    $mailData  =  ["name"=>$request->name,
"email"=>$request->email,
"phone"=>$request->phone,
"msg"=>$request->msg];

Mail::to($to)->send(new contactMail($mailData));
return response()->json(['message'=>"<b>Thank you for getting in touch!</b><br>

We appreciate you contacting us. One of our colleagues will get back in touch with you soon!Have a great day!"]);

   }
}
