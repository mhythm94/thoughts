<?php

namespace App\Http\Controllers\HandleMails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class HandleMail extends Controller
{
    public function postContact(Request $request){

        $this->validate($request, [
            'email'=>'required|email',
            'message'=>'required|min:16',
            'phone'=>'required|numeric',
            'name'=>'required'
            ]);

            $data=Array(
                'name' => $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'messageBody'=> $request->message
            );

        Mail::send('emails.contact', $data, function ($message) use ($data){
            $message->from($data['email'], $data['name']);
            $message->to('mohaytham94@gmail.com', 'Mohamed Haytham');
            $message->subject('Thoughts Contact');
        });
    }
}
