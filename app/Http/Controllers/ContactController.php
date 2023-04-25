<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
    {
        public function index()
        {
            return view('pages.contact');
        }
    
        public function send(Request $request)
    {
    // Get the authenticated user ID
    $userId = auth()->id();
    
    // Create a new Contact model instance
    $contact = new Contact();
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->message = $request->input('message');
    
    // Set the user ID on the Contact model instance
    $contact->user_id = $userId;
    
    // Save the Contact model instance to the database
    $contact->save();
    
            // Add your email sending logic here
    
            return redirect()->back()->with('success', 'Message sent successfully.');
        }
    }

