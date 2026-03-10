<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CarEnquiryMail;

class CarBookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country_code' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'car_id' => 'required',
            'car_name' => 'required'
        ]);
    
        // Combine country code and phone number
        $fullPhoneNumber = $request->country_code . ' ' . $request->phone;
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $fullPhoneNumber,
            'car_name' => $request->car_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'car_id' => $request->car_id
        ];
    
        Mail::to(['jahanzebansari503@gmail.com', 'admin@mkautos.ae'])->send(new CarEnquiryMail($data));
        
    
        return back()->with('success', 'Booking enquiry sent successfully!');
    }
}