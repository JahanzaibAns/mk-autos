@extends('layouts.main')
@section('title', 
    $car->meta_title 
        ?? $car->model->brand->name . ' ' . 
           $car->model->name . ' ' . 
           $car->makeYear->year . 
           ' for Rent in Dubai | Luxury Car Rental'
)

@section('description', 
    $car->meta_description 
        ?? 'Rent ' . 
           $car->model->brand->name . ' ' . 
           $car->model->name . ' ' . 
           $car->makeYear->year . 
           ' in Dubai. ' . 
           $car->seat->seat . ' seats, ' . 
           $car->transmission->transmission . 
           ', premium luxury car with best daily, weekly & monthly rental prices. Book now!'
)

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"/>
<style>
/* Headings */
.description_Car_Row_div h1,
.description_Car_Row_div h2,
.description_Car_Row_div h3,
.description_Car_Row_div h4 {margin-top: 20px; margin-bottom: 10px; font-weight: 600;}
.description_Car_Row_div h1 { font-size: 28px; }
.description_Car_Row_div h2 { font-size: 24px; }
.description_Car_Row_div h3 { font-size: 20px; }
.description_Car_Row_div h4 { font-size: 18px; }

/* Paragraphs */
.description_Car_Row_div p {
  margin: 0 0 14px 0;
}
/* Lists */
.description_Car_Row_div ul, .description_Car_Row_div ol {margin: 0 0 16px 20px; padding: 0;}
.description_Car_Row_div li {padding:0px!important; list-style:disc;}
   /* Table wrapper (responsive) */
.description_Car_Row_div figure.table {margin: 20px 0; width: 100%; overflow-x: auto;      /* key for responsiveness */}
/* Optional: show scroll hint on small screens */
.description_Car_Row_div figure.table::-webkit-scrollbar {height: 6px;}
.description_Car_Row_div figure.table::-webkit-scrollbar-thumb {background: #ccc; border-radius: 3px;}

/* Table */
.description_Car_Row_div table {width: 100%; min-width: 500px;      /* prevents columns from squashing too much */
  border-collapse: collapse; font-size: 14px;}

.description_Car_Row_div table thead th {background-color: #f5f5f5; font-weight: 600;}
.description_Car_Row_div table th,
.description_Car_Row_div table td {border: 1px solid #ddd; padding: 10px 10px; text-align: left;}
/* Zebra rows */
.description_Car_Row_div table tbody tr:nth-child(even) {background-color: #fafafa;}
/* Extra bottom spacing */
.description_Car_Row_div > :last-child {margin-bottom: 20px;}
</style>

    <!-- <section class="page_banner our_fleet">
        <div class="container">
            <h1>Car Details</h1>
        </div>
    </section> -->
    <section class="car_details_sec pt-150 position-relative">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a> 
                </li>
                <li class="breadcrumb-item">
                    {{ $car->bodyType->body_type }} 
                </li>
                <li class="breadcrumb-item">
                    {{ $car->model->brand->name }} 
                </li>
                <li class="breadcrumb-item">
                    {{ $car->model->name }} 
                </li>
                <li class="breadcrumb-item">
                    {{ $car->makeYear->year }}
                </li>
            </ul>
            <h2 class="secHeading">
                {{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->makeYear->year }}
            </h2>
            <!--<p>-->
            <!--    Rent in Dubai: {{ $car->exteriorColor->color }} Luxury Car, {{ $car->seat->seat }} Seats, Sophisticated Style, Premium Comfort, Executive Features-->
            <!--</p>-->
            <div class="car_gallery_section">
                <div class="car_gallery_grid">
                    <div class="car_gallery_left">
                        @foreach($car->images->take(2) as $image)
                            <a href="{{ asset('public/storage/car_images/' . $image->image) }}" data-fancybox="gallery">
                                <img src="{{ asset('public/storage/car_images/' . $image->image) }}" alt="Car Image" />
                            </a>
                        @endforeach
                    </div>
                    <div class="car_gallery_right">
                        @foreach($car->images->skip(2)->take(2) as $image)
                            <a href="{{ asset('public/storage/car_images/' . $image->image) }}" data-fancybox="gallery">
                                <img src="{{ asset('public/storage/car_images/' . $image->image) }}" alt="Car Image" />
                            </a>
                        @endforeach
        
                        @if($car->images->count() > 4)
                            <a href="{{ asset('public/storage/car_images/' . $car->images[4]->image) }}" data-fancybox="gallery"
                                class="view-all-wrapper">
                                <img src="{{ asset('public/storage/car_images/' . $car->images[4]->image) }}" alt="Car Image" />
                                <div class="view-all-overlay">
                                    <span><i class="fa-solid fa-images me-2"></i> View All Photos</span>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="car_name_share">
                <div class="row">
                    <div class="col-md-8">
                        <div class="car_details_specs">
                            <div class="car_details_head">
                                <h3>
                                    {{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->makeYear->year }}
                                </h3>
                                <ul class="card_car_model">
                                    <li title="The model year of the car">
                                        <span>
                                            <i class="fa-solid fa-car"></i> {{ $car->makeYear->year }}
                                        </span>
                                    </li>
                                    <li title="Built for Gulf roads, climate, and standards.">
                                        <span>
                                            <i class="fa-solid fa-gear"></i> {{ $car->spec->spec }}
                                        </span>
                                    </li>
                                    <li title="Car Type">
                                        <span>
                                            {{ $car->bodyType->body_type }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="car_details_heading">
                                    <span> Pricing</span>
                                </h5>
                            </div>
                            @php
                                $daily = $car->prices->where('type', 'daily')->first();
                                $weekly = $car->prices->where('type', 'weekly')->first();
                                $monthly = $car->prices->where('type', 'monthly')->first();
                            @endphp
    
                            <div class="col-md-12">
                                <div class="card_car_pricing">
    
                                    {{-- Daily Price --}}
                                    @if($daily)
                                        <div class="card_pricing">
                                            @if($daily->discounted_price && $daily->discounted_price < $daily->price)
                                                <span class="original_price">
                                                    <span><span class="aed_sign">D</span> {{ number_format($daily->price) }}</span>
                                                </span>
                                            @endif
    
                                            <h5 class="dicounted_price">
                                                <span class="aed_sign">D</span> {{ number_format($daily->discounted_price ?? $daily->price) }} <span>/
                                                    Day</span>
                                            </h5>
    
                                            @if($daily->kilometers)
                                                <span class="kilometers">
                                                    <i class="fa-solid fa-road me-2"></i> {{ number_format($daily->kilometers) }} km
                                                </span>
                                            @endif
                                        </div>
                                    @endif
    
                                    {{-- Monthly (or Weekly if Monthly not available) --}}
                                    @php
                                        $longTerm = $monthly ?: $weekly;
                                    @endphp
    
                                    @if($longTerm)
                                        <div class="card_pricing">
                                            @if($longTerm->discounted_price && $longTerm->discounted_price < $longTerm->price)
                                                <span class="original_price">
                                                    <span><span class="aed_sign">D</span> {{ number_format($longTerm->price) }}</span>
                                                </span>
                                            @endif
    
                                            <h5 class="dicounted_price">
                                                <span class="aed_sign">D</span> {{ number_format($longTerm->discounted_price ?? $longTerm->price) }}
                                                <span>/ {{ ucfirst($longTerm->type) }}</span>
                                            </h5>
    
                                            @if($longTerm->kilometers)
                                                <span class="kilometers">
                                                    <i class="fa-solid fa-road me-2"></i> {{ number_format($longTerm->kilometers) }} km
                                                </span>
                                            @endif
                                        </div>
                                    @endif
    
                                </div>
                            </div>
    
                        </div>
                        <div class="row description_Car_Row">
                            <div class="col-12">
                                <h5 class="car_details_heading my-4">
                                    <span>Car Overview</span>
                                </h5>
                                <div class="car_deails_overview">
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            Make
                                        </span>
                                        <span class="item_span_bold">{{ $car->model->brand->name }}</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-car-side"></i>
                                            Model
                                        </span>
                                        <span class="item_span_bold">{{ $car->model->name }}</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-car-side"></i>
                                            Body Type
                                        </span>
                                        <span class="item_span_bold">{{ $car->bodyType->body_type }}</span>
                                    </div>
    
    
    
    
    
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            Transmission
                                        </span>
                                        <span class="item_span_bold">{{ $car->transmission->transmission }}</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-car-side"></i>
                                            Engine Size
                                        </span>
                                        <span class="item_span_bold">{{ $car->car_engine_size }}</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-gas-pump"></i>
                                            Fuel Type
                                        </span>
                                        <span class="item_span_bold">{{ $car->fuelType->fuel_type }}</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            Seating Capacity
                                        </span>
                                        <span class="item_span_bold">{{ $car->seat->seat }} passengers</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            No. of Doors
                                        </span>
                                        <span class="item_span_bold">{{ $car->door->door }}</span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            Fits No. of Bags
                                        </span>
                                        <span class="item_span_bold">{{ $car->bag->bag }}</span>
                                    </div>
    
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            Exterior / Interior Color
                                        </span>
                                        <span class="item_span_bold">{{ $car->exteriorColor->color }}
                                            /{{ $car->interiorColor->color }}
                                            </span>
                                    </div>
                                    <div class="car_overview_item">
                                        <span>
                                            <i class="fa-solid fa-wallet"></i>
                                            Payment Modes
                                        </span>
                                        <span class="item_span_bold">Cash, Credit Card & more</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description_Car_Row_div">
                            {!! $car->description !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_car_btns">
                            <div class="btn_flex">
                            <a href="tel:+971 58 835 7508" class="btn call_btn">
                                <i class="fa-solid fa-phone-volume"></i> Call
                            </a>
                            @php
                                $waMessage = "I visited your website and I am interested in : " 
                                            . $car->model->brand->name . " " 
                                            . $car->model->name . " " 
                                            . ($car->makeYear->year ?? '') 
                                            . "\n" 
                                            . route('car.details', $car->slug);
                            @endphp

                            <a href="https://api.whatsapp.com/send?phone=+971588357508&text={{ urlencode($waMessage) }}" 
                            target="_blank" 
                            class="btn wa_btn">
                                <i class="fa-brands fa-whatsapp"></i> Whatsapp
                            </a>
                        </div>
                            <div class="booking-form-wrapper">
                            <div class="booking-header">
                                <div class="luxury-badge">
                                    <i class="fa-solid fa-crown"></i>
                                    Luxury Car
                                </div>
                                <h3>BOOK <span>NOW</span></h3>
                                <p>
                                    <i class="fa-regular fa-calendar-check"></i>
                                    Reserve your premium ride
                                </p>
                            </div>

                            <form class="booking-form" action="{{ route('booking.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $car->id }}">
                                <input type="hidden" name="car_name" value="{{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->makeYear->year }}">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa-regular fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" name="name" placeholder="Your Full Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="phone-input">
                                        <input type="tel" class="form-control phone_mask" name="phone" placeholder="Phone Number" required>
                                    </div>
                                        <input type="hidden" name="country_code" class="country_code" value="">

                                </div>

                                <div class="form-group">
                                    <div class="date-group">
                                        <div>
                                            <label class="form-label" for="start_date">
                                                Start Date
                                            </label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="start_date" placeholder="Start Date" required>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label" for="end_date">
                                                End Date
                                            </label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="end_date" placeholder="End Date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="divider">-->
                                <!--    <span>Instant Confirmation</span>-->
                                <!--</div>-->

                                <button type="submit" class="btn-book">
                                    Book Now
                                    <i class="fa-regular fa-arrow-right"></i>
                                </button>

                                <div class="booking-benefits">
                                    <div class="booking-benefit-item">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>24/7 Support</span>
                                    </div>
                                    <div class="booking-benefit-item">
                                        <i class="fa-regular fa-shield"></i>
                                        <span>Secure Booking</span>
                                    </div>
                                    <div class="booking-benefit-item">
                                        <i class="fa-regular fa-gem"></i>
                                        <span>No Hidden Fees</span>
                                    </div>
                                    <div class="booking-benefit-item">
                                        <i class="fa-regular fa-bolt"></i>
                                        <span>Instant Reply</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="row">-->
            <!--    <div class="col-md-9">-->
                    
            <!--        <div class="row">-->
            <!--            <div class="col-md-12">-->
            <!--                <h5 class="car_details_heading">-->
            <!--                    <span> Documents Requirements</span>-->
            <!--                </h5>-->
            <!--                <h6 class="car_details_sub_heading">-->
            <!--                    Residents and UAE Nationals-->
            <!--                </h6>-->
            <!--                <ul class="card_car_features">-->
            <!--                    <li>-->
            <!--                        Copy of Driving License & Resident ID-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        Copy of Resident Visa-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        Passport Copy (Only for Residents)-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        Free Service and Maintenance-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--                <h6 class="car_details_sub_heading">-->
            <!--                    Foreign Visitors-->
            <!--                </h6>-->
            <!--                <ul class="card_car_features">-->
            <!--                    <li>-->
            <!--                        Original Passport or Copy-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        Original Visa or Copy-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        IDP & License Issued from Home Country-->
            <!--                    </li>-->
            <!--                </ul>-->

            <!--            </div>-->

            <!--        </div>-->
                    
            <!--    </div>-->
            <!--    <div class="col-md-3">-->

            <!--    </div>-->
            <!--</div>-->
            <div class="row g-3 footer_social_boxes social_boxes_category my-5 justify-content-center">
                <div class="col">
                    <a class="social_box" href="javascript:void(0);">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24">
                                <path d="M3 13l1-4a3 3 0 0 1 3-2h10a3 3 0 0 1 3 2l1 4"></path>
                                <circle cx="7" cy="17" r="1"></circle>
                                <circle cx="17" cy="17" r="1"></circle>
                             </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                24/7 Service
                            </span>
                            <span class="platform_name">
                                Best Support.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="social_box" href="javascript:void(0);">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="#000" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="5" width="16" height="15" rx="2"></rect>
                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                <line x1="16" y1="3" x2="16" y2="7"></line>
                            </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                No Deposit
                            </span>
                            <span class="platform_name">
                                Confirm in minutes.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="social_box" href="javascript:void(0);">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 21s7-4.5 7-11a7 7 0 0 0-14 0c0 6.5 7 11 7 11z"></path>
                                <circle cx="12" cy="10" r="2.5"></circle>
                            </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                Fast Delivery
                            </span>
                            <span class="platform_name">
                               Anywhere in Dubai.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="social_box" href="javascript:void(0);">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2l8 4v6c0 5-3.5 9.4-8 10-4.5-.6-8-5-8-10V6l8-4z"></path>
                                <path d="M9 12l2 2 4-5"></path>
                             </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                               Largest Fleet
                            </span>
                            <span class="platform_name">
                                Clean & inspected.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="social_box" href="javascript:void(0);">
                        <div class="icon_area">
                            <svg viewBox="0 0 24 24">
                                <path d="M7 3h10v18l-2-1-2 1-2-1-2 1-2-1-2 1z"></path>
                             </svg>
                        </div>
                        <div class="social_name">
                            <span class="on_platform">
                                Lowest Prices
                            </span>
                            <span class="platform_name">
                               No hidden costs.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <section class="product_section py-5">
                <div class="container">
                    <h2 class="secHeading">Discover <span>Similar Cars</span> in Dubai</h2>
            
                    <div class="slick-slider">
                        <div class="product_slider mt-4">
            
                            @forelse ($similarCars as $similarCar)
            
                                @php
                                    $day = $similarCar->prices->where('type','daily')->first();
                                    $week = $similarCar->prices->where('type','weekly')->first();
                                    $month = $similarCar->prices->where('type','monthly')->first();
                                @endphp
            
                                <div class="product_card position-relative p-3">
            
                                    {{-- Label --}}
                                    <ul class="product_card_labels list-unstyled d-flex gap-2 position-absolute flex-wrap">
                                        @if($similarCar->is_featured ?? false)
                                            <li class="promo_label text-dark">Featured</li>
                                        @endif
                                    </ul>
            
                                    <a href="{{ route('car.details', $similarCar->slug) }}"
                                       class="product_card_image"
                                       title="{{ $similarCar->model->brand->name }} {{ $similarCar->model->name }} {{ $similarCar->makeYear->year ?? '' }}">
                                    
                                        <img class="w-100"
                                             src="{{ $similarCar->feature_image
                                                ? asset('public/storage/car_images/' . $similarCar->feature_image)
                                                : (
                                                    $similarCar->images->first()
                                                        ? asset('public/storage/car_images/' . $similarCar->images->first()->image)
                                                        : asset('public/assets/images/no-car.png')
                                                  ) }}"
                                             alt="Rent {{ $similarCar->model->name }} {{ $similarCar->makeYear->year ?? '' }} in Dubai">
                                    </a>
            
            
                                    {{-- Title --}}
                                    <div class="product_card_title d-flex justify-content-between align-items-center">
                                        <div class="ms-3">
                                            <h5>
                                                {{ $similarCar->model->brand->name }}
                                                {{ $similarCar->model->name }}
                                                {{ $similarCar->makeYear->year ?? '' }}
                                            </h5>
                                            <p class="text-secondary m-0">
                                                {{ $similarCar->spec->spec ?? 'GCC Specs' }},
                                                {{ $similarCar->makeYear->year ?? '' }}
                                            </p>
                                        </div>
            
                                        {{-- Actions --}}
                                        <div class="d-flex align-items-center gap-2 border-start">
                                            <a href="https://api.whatsapp.com/send?phone=+971588357508&text={{ urlencode(
                                                'I visited your website and I am interested in: ' .
                                                $similarCar->model->brand->name . ' ' .
                                                $similarCar->model->name . ' (' .
                                                ($similarCar->makeYear->year ?? '') . ')'
                                            ) }}"
                                               target="_blank">
                                                <i class="fa-brands fa-whatsapp text-light fs-5 wa_icon"></i>
                                            </a>
            
                                            <a href="tel:+971588357508">
                                                <i class="fa-solid fa-phone text-light fs-6 phone_icon"></i>
                                            </a>
                                        </div>
                                    </div>
            
                                    {{-- Details --}}
                                    <div class="product_cardDetails">
                                        <span>
                                            <img src="{{ asset('public/assets/images/home/detail-icon1.png') }}" alt="">
                                            {{ $similarCar->seat->seat ?? '-' }} Seats
                                        </span>
            
                                        <span>
                                            <img src="{{ asset('public/assets/images/home/detail-icon2.png') }}" alt="">
                                            {{ $similarCar->transmission->transmission ?? 'Automatic' }}
                                        </span>
            
                                        @if($similarCar->no_deposit ?? false)
                                            <span class="no_deposit">
                                                <span class="aed_sign">D</span> No Deposit
                                            </span>
                                        @endif
                                    </div>
            
                                    {{-- Prices --}}
                                    <div class="product_card_price d-flex gap-3 justify-content-center">
                                        <div>
                                            <p class="m-0 day">Per Day</p>
                                            <p class="m-0 text-success price_orig">
                                                <span class="aed_sign">D</span>
                                                {{ number_format($day->discounted_price ?? $day->price ?? 0) }}
                                            </p>
                                        </div>
            
                                        <div>
                                            <p class="m-0 day">Per Week</p>
                                            <p class="m-0 text-success price_orig">
                                                <span class="aed_sign">D</span>
                                                {{ number_format($week->discounted_price ?? $week->price ?? 0) }}
                                            </p>
                                        </div>
            
                                        <div>
                                            <p class="m-0 day">Per Month</p>
                                            <p class="m-0 text-success price_orig">
                                                <span class="aed_sign">D</span>
                                                {{ number_format($month->discounted_price ?? $month->price ?? 0) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
            
                            @empty
                                <p class="text-center text-muted w-100">
                                    No similar cars available at the moment.
                                </p>
                            @endforelse
            
                        </div>
                    </div>
                </div>
            </section>
            

        </div>
    </section>
    <!-- Success Popup -->
<div class="success-popup-overlay" id="successPopup">
    <div class="success-popup">
        <i class="fa-regular fa-circle-check"></i>
        <h3>Thank You!</h3>
        <p>Your booking enquiry has been sent successfully.<br>We will contact you shortly.</p>
        <button class="btn-close-popup" onclick="closePopup()">Close</button>
    </div>
</div>

<style>
.success-popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.success-popup {
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    position: relative;
    animation: popupSlide 0.3s ease;
}

@keyframes popupSlide {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.success-popup i {
    font-size: 60px;
    color: #28a745;
    margin-bottom: 20px;
}

.success-popup h3 {
    color: #333;
    margin-bottom: 10px;
    font-size: 24px;
}

.success-popup p {
    color: #666;
    margin-bottom: 20px;
    line-height: 1.6;
}

.success-popup .btn-close-popup {
    background: #000;
    color: white;
    border: none;
    padding: 10px 30px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

.success-popup .btn-close-popup:hover {
    background: #333;
}
</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
<script>
      $(".phone_mask").each(function () {

    var input = $(this);

    // init plugin on this specific input
    input.intlTelInput({
        initialCountry: "ae",
        separateDialCode: true,
    });

    // function to update hidden country code field
    function updateCode() {
        var countryData = input.intlTelInput("getSelectedCountryData");
        input.closest(".form-group").find(".country_code").val("+" + countryData.dialCode);
    }

    // set initial value
    updateCode();

    // update when country changes
    input.on("countrychange", function () {
        updateCode();
    });

});
    // Success Popup Functions
function showSuccessPopup() {
    document.getElementById('successPopup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('successPopup').style.display = 'none';
}

// Close popup when clicking outside
window.onclick = function(event) {
    var popup = document.getElementById('successPopup');
    if (event.target == popup) {
        popup.style.display = 'none';
    }
}

// Show popup if success message exists
@if(session('success'))
    window.onload = function() {
        showSuccessPopup();
    }
@endif
</script>
@endsection