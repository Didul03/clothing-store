<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Just 'contact.blade.php'
    }

    public function store(Request $request)
    {
        // Validate and save
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($data); // You must have Contact model and migration

        return redirect()->route('thankyou');
    }
}


