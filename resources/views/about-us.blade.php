@extends('layouts.main')
@section('title', 'About MK Luxury Car Rental Dubai | Premium Fleet & Trusted Service')
@section('description', 'Learn about MK Luxury Car Rental—our mission, vision, and unwavering commitment to exceptional luxury car rentals in Dubai. Discover premium supercars, SUVs, convertibles & exotics with no hidden fees, easy booking, free delivery, and 24/7 support for hassle-free experiences.')
@section('content')
<style>
    .breadcrumb-item+.breadcrumb-item::before{
        content: var(--bs-breadcrumb-divider, ">");
    }
</style>
    <section class="blogs_sec pt-150">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                   <a href="/">
                       Home
                   </a> 
                </li>
                <li class="breadcrumb-item">
                    About Us
                </li>
            </ul>
            <h1 class="secHeading">About Us</h1>

            <div class="row g-4 py-5 align-items-center">
                <div class="col-lg-6">
                    <!--<h2 class="fw-bold">-->
                    <!--    About Us-->
                    <!--</h2>-->
                    <p>
                        Welcome to MK Autos, your ultimate destination for luxury car rental in Dubai. We redefine premium car hire with a fast and secure online booking system, 100% insurance coverage, transparent pricing, and no deposit required. Whether you’re visiting Dubai or living here, MK Autos delivers an exceptional car rental experience tailored to your lifestyle.
                    </p>
                    <p>
                        Explore our exclusive fleet of luxury cars, sports cars, GT vehicles, SUVs, and convertibles, designed for unforgettable drives across Dubai. From daily rentals to long-term bookings, we offer flexible and affordable luxury car rental solutions with outstanding customer service.
                    </p>
                    <h2 class="fw-bold">
                        Why Choose MK Autos Car Rental Dubai?
                    </h2>
                    <ul class="about-list">
                        <li>No Deposit Required</li>
                        <li>100% Insurance Coverage</li>
                        <li>Transparent & Competitive Pricing</li>
                        <li>Fast Online Booking</li>
                        <li>Free Delivery & Pickup Anywhere in Dubai</li>
                        <li>Door-to-Door Service</li>
                        <li>Multiple Payment Options (Cash, Card & Cryptocurrency)</li>
                    </ul>
                    <h2 class="fw-bold">
                        Exclusive Fleet of Luxury & Exotic Cars
                    </h2>
                    <p>At MK Autos, we offer a wide range of premium and exotic cars for rent in Dubai, including:</p>
                    <ul class="about-list">
                        <li>BMW</li>
                        <li>Mercedes-Benz</li>
                        <li>Lamborghini</li>
                        <li>Ferrari</li>
                        <li>Rolls-Royce</li>
                        <li>McLaren</li>
                        <li>Porsche</li>
                        <li>Cadillac</li>
                        <li>And many more luxury brands</li>
                    </ul>
                    <p>
                        Whether you need a luxury SUV for family travel, an economy car for daily use, or an exotic supercar for a special occasion, we have the perfect vehicle at competitive prices.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/home/about-1.jpeg') }}" alt="Our Mission"
                        class="img-fluid d-block mx-auto w-100 rounded">
                </div>
            </div>
            <div class="row g-4 py-5 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('public/assets/images/home/about-2.png') }}" alt="Our Mission"
                        class="img-fluid d-block mx-auto w-100 rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold">
                        Affordable Luxury with Flexible Rental Options
                    </h2>
                    <p>
                        Enjoy up to 25% discount on monthly car rentals in Dubai. Our flexible rental plans are designed for short-term and long-term needs, offering exceptional value without compromising luxury or performance.
                    </p>
                    <p>
                        From a single day of elegance to an extended stay, MK Autos provides comparative luxury car hire prices in Dubai with premium service standards.
                    </p>
                    <h2 class="fw-bold">
                        Seamless Global Experience
                    </h2>
                    <p>
                        Our user-friendly website, available in five languages and equipped with currency conversion tools, ensures a smooth and accessible booking experience for customers worldwide. We also accept cryptocurrency payments, making MK Autos a future-ready luxury car rental company in Dubai.
                    </p>
                    <h2 class="fw-bold">
                        Book Your Luxury Drive Today
                    </h2>
                    <p>
                        Experience the perfect blend of comfort, style, and performance with MK Autos. Elevate your journey and enjoy Dubai like never before with the best luxury car rental service in Dubai.
                    </p>
                    <p>👉 Book your premium car rental today and drive in ultimate luxury with MK Autos.</p>
                </div>
            </div>
        </div>
    </section>
@endsection