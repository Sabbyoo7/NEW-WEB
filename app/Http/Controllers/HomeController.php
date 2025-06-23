<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // Send email notification
            Mail::to('sunshineindustries99@gmail.com')->send(new ContactFormMail($request->all()));
            
            return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again or contact us directly.');
        }
    }
}