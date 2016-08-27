<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests;

class ContactController extends Controller
{
     public function getContact(Request $request)
    {
     return view('others.contact');
    }

    public function postContact(Request $request)
    {
      Contact::create ([
      'name'=> $request->input('name'),
      'email'=> $request->input('email'),
      'subject'=> $request->input('subject'),
      'message'=> $request->input('message'),
      
      ]);
       return redirect()->route('contact')->with('info','Message has been sent successfully');
    }

}
