<?php

namespace Mushahedur\Contact\Http\Controllers;

use Mushahedur\Contact\Models\Contact;
use Mushahedur\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function index(){
        return view('contact::contact.index');
    }
    public function store(Request $request){
        // dd($request->all());
       $validated = $request->validate([
        'name'    => 'required|string|max:255|min:2',
        'email'   => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    Mail::to(config('contact.send_email_to'))->send(new ContactMailable($validated['name'], $validated['email'], $validated['message']));
    Contact::create($validated);

    return redirect()->back()->with('success', 'Contact message saved successfully');
    }
}