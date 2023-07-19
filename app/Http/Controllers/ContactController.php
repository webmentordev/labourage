<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => "required|max:255",
            'subject' => "required|max:255",
            'email' => "required|email|max:255",
            'message' => "required"
        ]);

        Contact::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return back()->with('success', 'Message successfuly sent! We will contact your shortly');

    }
}
