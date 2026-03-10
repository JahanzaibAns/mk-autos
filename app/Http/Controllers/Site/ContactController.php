<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEnquiryMail;
use App\Mail\HomeEnquiryMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ]);
    
        $data = [
            'first_name' => $request->input('first-name'),
            'last_name' => $request->input('last-name'),
            'name' => $request->input('first-name') . ' ' . $request->input('last-name'),
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
    
        Mail::to(['jahanzebansari503@gmail.com', 'admin@mkautos.ae'])->send(new ContactEnquiryMail($data));
        
        return back()->with('success', 'Your message has been sent successfully! We will contact you shortly.');
    }

    public function homeEnquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'country_code' => 'required|string',
            'message' => 'nullable|string'
        ]);
    
        // Combine country code and phone number
        $fullPhoneNumber = $request->country_code . ' ' . $request->phone;
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $fullPhoneNumber,
            'message' => $request->message ?? ''
        ];
    
        Mail::to(['jahanzebansari503@gmail.com', 'admin@mkautos.ae'])->send(new HomeEnquiryMail($data));
        
        return back()->with('success', 'Your enquiry has been sent successfully! We will contact you shortly.');
    }
}
