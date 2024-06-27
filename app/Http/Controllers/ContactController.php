<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'message' => 'required',
        ]);

        Log::info('Contact Form Submission:', $validatedData);

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}