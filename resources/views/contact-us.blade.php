@extends('layouts.main')
@section('title', '')
@section('description', '')
@section('content')
<style>
    .breadcrumb-item+.breadcrumb-item::before{
        content: var(--bs-breadcrumb-divider, ">");
    }
</style>
<section class="contact_us_sec pt-150 pb-5">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="/">
                   Home
               </a> 
            </li>
            <li class="breadcrumb-item">
                Contact Us
            </li>
        </ul>
        <div class="contact_heading">
            <h1 class="secHeading">
                Contact Us
            </h1>
            <p class="para">
                <em>
                    Experience the Elite difference. Our dedicated support team is ready to assist you with premium service, every mile of the way.
                </em>
            </p>
        </div>
        <h2>
            Need help? Get in touch
        </h2>
        <div class="row g-4">
            <div class="col-lg-9">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <label for="first-name" class="form-label">Your First Name</label>
                            <input type="text" name="first-name" id="first-name" placeholder="Enter your first name" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="last-name" class="form-label">Your Last Name</label>
                            <input type="text" name="last-name" id="last-name" placeholder="Enter your last name" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email address" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Your Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Message" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn themeBtn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <div class="contact_box">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <a href="tel:+971 58 835 7508">+971 58 835 7508</a>
                        <p>
                            Call us directly if you need any urgent help. Our agents will help you.
                        </p>
                    </div>
                </div>
                <div class="contact_box">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <a href="mailto:admin@mkautos.ae">admin@mkautos.ae</a>
                        <p>
                            Email us directly if you need any help. Our agents will help you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection