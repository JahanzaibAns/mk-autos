@extends('layouts.main')
@section('title', 'Luxury & Supercar Rental Dubai | No Deposit | MK Luxury Car Rental')
@section('description', 'Rent luxury cars in Dubai with top deals at MK Luxury Car Rental! Choose supercars, SUVs, sports cars, sedans, convertibles & exotics from our premium fleet. Easy booking, no deposit or hidden fees, free delivery, 24/7 support—hassle-free experience. Book now!')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"/>
    <section class="hero_section hero_section_new hero_slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero_main"
                    style="background-image: url('{{ asset('assets/images/luxury-bg.jpeg') }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="d-flex hero_heading_div hero_heading_div_new flex-column pt-5">
                                    <h1>
                                        <span>Luxury Car</span> Rentals in Dubai
                                    </h1>
                                    <p class="h4 text-light">
                                        Step into sophistication. Our luxury car rentals in Dubai deliver refined interiors, powerful performance, and seamless service—with clear pricing and excellence in every drive.
                                    </p>
                                    <a href="https://wa.me/971588357508" class="themeBtn">Book Now</a>
                                </div>
                            </div>
                            <!--<div class="col-md-7">-->
                            <!--    <figure class="hero_main_img_new">-->
                            <!--        <img src="{{ asset('assets/images/home/banner-person1.png') }}"-->
                            <!--            class="img-fluid">-->
                            <!--    </figure>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero_main"
                    style="background-image: url('{{ asset('assets/images/sports-bg.jpeg') }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="d-flex hero_heading_div hero_heading_div_new flex-column pt-5">
                                    <h1>
                                        Experience <span>Sports Cars</span> in Dubai
                                    </h1>
                                    <p class="h4 text-light">
                                        Feel the rush of pure performance and bold design. Choose from our range of iconic sports cars and turn every drive into an unforgettable experience — fast, smooth, and completely transparent.</p>
                                    <a href="https://wa.me/971588357508" class="themeBtn">Book Now</a>
                                </div>
                            </div>
                            <!--<div class="col-md-7">-->
                            <!--    <figure class="hero_main_img_new">-->
                            <!--        <img src="{{ asset('assets/images/home/banner-person2.png') }}"-->
                            <!--            class="img-fluid">-->
                            <!--    </figure>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero_main"
                    style="background-image: url('{{ asset('assets/images/economy-bg.jpeg') }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="d-flex hero_heading_div hero_heading_div_new flex-column pt-5">
                                    <h1>
                                        Smart & <span>Affordable</span> Car Rentals in Dubai
                                    </h1>
                                    <p class="h4 text-light">
                                        Reliable, comfortable, and easy on your budget. Our affordable car rentals are perfect for daily travel, business,
                                        or city exploration — with honest pricing and zero hidden costs.
                                    </p>
                                    <a href="https://wa.me/971588357508" class="themeBtn">Book Now</a>
                                </div>
                            </div>
                            <!--<div class="col-md-7">-->
                            <!--    <figure class="hero_main_img_new">-->
                            <!--        <img src="{{ asset('assets/images/home/banner-person3.png') }}"-->
                            <!--            class="img-fluid">-->
                            <!--    </figure>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-pagination swiper-pagination"></div>
    </section>
    
    <!-- Brand Logos Start -->
    <section class="brand-logos py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <h2 class="secHeading">Our <span>Brands</span></h2>
                    <p>Discover unbeatable prestige from MK Luxury. Explore Ferrari, Cadillac, BMW, McLaren, Mercedes, Rolls-Royce, and more. Rent luxury cars in Dubai hourly.</p>
                </div>
            </div>
            <div class="brandLogo__slider mt-4">
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo1.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo2.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo3.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo4.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo5.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo6.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo7.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo8.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo9.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo10.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo11.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo12.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo13.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo14.webp') }}" class="img-fluid">
                </figure>
                <figure class="brand-logos__img">
                    <img src="{{ asset('assets/images/home/logo15.webp') }}" class="img-fluid">
                </figure>
            </div>
        </div>
    </section>
    <!-- Brand Logos End -->

    <!-- About Section Start -->
    <!--<section class="home_about_bg padd-y"-->
    <!--    style="background-image: url('{{ asset('assets/images/home/plain-bg.jpeg') }}')">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col">-->
    <!--                <div class="home_about_content text-center">-->
    <!--                    <h2 class="secHeading">Why <span>MK Autos?</span></h2>-->
    <!--                    <p class="mt-4">-->
    <!--                        If you're looking to explore Dubai or Abu Dhabi, then you are at the right spot.We’re proud to-->
    <!--                        be one of the top car rental in UAE, providing outstanding vehicles and service to ensure your-->
    <!--                        journey is memorable. We serve everyone who is coming in and living here. Our inventory is-->
    <!--                        diverse, so we cater to any journey and any budget. Standing out in the rental market because we-->
    <!--                        make sure you get the best deal without compromising any service. We have spent years-->
    <!--                        maintaining our position in the car rental market, allowing our clients to safely take the ride-->
    <!--                        of a well-serviced vehicle. From classy high-end Mercedes to affordable SUVs from trusted names-->
    <!--                        like GMC, Chevrolet, Kia, Peugeot, Nissan, and more, you're sure to find the perfect vehicle to-->
    <!--                        suit your preferences and requirements. With us, you can rent a car from <span class="aed_sign">D</span> 80 a day or AED-->
    <!--                        1410 a month. If you need a car for one day, a week, or longer, we have affordable plans for any-->
    <!--                        occasion to please our clients. In case of any assistance, we're here 24/7.For more details or-->
    <!--                        to book yourself a car, reach out to us at <a href="tel:+971 58 835 7508">+971 58 835 7508</a> or-->
    <!--                        email us at <a href="mailto:admin@mkautos.ae">admin@mkautos.ae</a>.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- About Section End -->

    <!-- Advantages Section Start -->
    <!--<section class="bg_light_blue about_bottom py-4">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-6 col-6 mt-4 mt-md-0 mx-auto mx-md-0">-->
    <!--                <div class="d-md-flex align-items-center gap-3">-->
    <!--                    <div>-->
    <!--                        <img class="mx-auto mx-md-0 d-block"-->
    <!--                            src="{{ ('assets/images/home/contract_terms.webp') }}"-->
    <!--                            alt="our-advantage" />-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <p class="fw-bold text-center advantage_p">Contract terms apply</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-6 col-6 mt-4 mt-md-0 mx-auto mx-md-0">-->
    <!--                <div class="d-md-flex align-items-center gap-3">-->
    <!--                    <div>-->
    <!--                        <img class="mx-auto mx-md-0 d-block"-->
    <!--                            src="{{ asset('assets/images/home/free_delivery.webp') }}"-->
    <!--                            alt="free-delivery" />-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <p class="fw-bold text-center advantage_p">Free Delivery</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-6 col-6 mt-4 mt-md-0 mx-auto mx-md-0">-->
    <!--                <div class="d-md-flex align-items-center gap-3">-->
    <!--                    <div>-->
    <!--                        <img class="mx-auto mx-md-0 d-block"-->
    <!--                            src="{{ asset('assets/images/home/free_service.webp') }}"-->
    <!--                            alt="maintenance" />-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <p class="fw-bold text-center advantage_p">Free Service and Maintenance</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-6 col-6 mt-4 mt-md-0 mx-auto mx-md-0">-->
    <!--                <div class="d-md-flex align-items-center gap-3">-->
    <!--                    <div>-->
    <!--                        <img class="mx-auto mx-md-0 d-block"-->
    <!--                            src="{{ asset('assets/images/home/easy_booking.webp') }}"-->
    <!--                            alt="booking-process" />-->
    <!--                    </div>-->
    <!--                    <div>-->
    <!--                        <p class="fw-bold text-center advantage_p">Easy Booking Process</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Advantages Section End -->
     
    <section class="product_section py-5">
        <div class="container">
            <h2 class="secHeading text-center">Explore by <span>Category</span></h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="category-cards mt-4">
                        <div class="product_card position-relative">
                            <a href="{{ route('car.category', 'sports-cars') }}" class="product_card_image" title="">
                                <img class="w-100" src="https://mkluxurycarrental.ae/public/storage/car_images/1769526938_HfKmMm.jpg" alt="car image" />
                                <h5>Sports</h5>
                            </a>
                            <!--<div class="product_card_title d-flex justify-content-between align-items-center">-->
                            <!--    <div class="ms-3">-->
                            <!--       <a href="{{ route('car.category', 'sports-car-rental-dubai') }}"><h5>Exotic Cars</h5></a>-->
                            <!--        <p class="text-secondary m-0">High-end supercars built for speed, style, and exclusivity</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-cards mt-4">
                        <div class="product_card position-relative">
                            <a href="{{ route('car.category', 'suv-cars') }}" class="product_card_image" title="">
                                <img class="w-100" src="https://mkluxurycarrental.ae/public/storage/car_images/1769199195_opBFo5.jpg" alt="car image" />
                                <h5>SUV</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-cards mt-4">
                        <div class="product_card position-relative">
                            <a href="{{ route('car.category', 'luxury-cars') }}" class="product_card_image" title="">
                                <img class="w-100" src="https://mkluxurycarrental.ae/public/storage/car_images/1769864407_I4ZYy4.jpg" alt="car image" />
                                <h5>Luxury</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-cards mt-4">
                        <div class="product_card position-relative">
                            <a href="{{ route('car.category', 'exotic-cars') }}" class="product_card_image" title="">
                                <img class="w-100" src="https://mkluxurycarrental.ae/public/storage/car_images/1769198697_rwHLlh.jpg" alt="car image" />
                                <h5>Exotic</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-cards mt-4">
                        <div class="product_card position-relative">
                            <a href="{{ route('car.category', 'convertible-cars') }}" class="product_card_image" title="">
                                <img class="w-100" src="https://mkluxurycarrental.ae/public/storage/car_images/1769189234_oHXqj8.jpg" alt="car image" />
                                <h5>Convertible</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-cards mt-4">
                        <div class="product_card position-relative">
                            <a href="{{ route('car.category', 'economy-cars') }}" class="product_card_image" title="">
                                <img class="w-100" src="https://mkluxurycarrental.ae/public/storage/car_images/1769528924_4ZhmpU.jpg" alt="car image" />
                                <h5>Economy</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="text-center mt-5">-->
            <!--    <a href="{{route('our.fleet')}}" class="btn themeBtn">-->
            <!--        View All Categories&nbsp;-->
            <!--        <i class="fa-solid fa-chevron-right"></i>-->
            <!--    </a>-->
            <!--</div>-->
        </div>
    </section>
    
    <!-- Sports Cards Section Start -->
    <section class="product_section py-5">
        <div class="container">
            <h2 class="secHeading">Discover <span>High-Performance Sports Cars</span> in Dubai</h2>
            <div class="slick-slider">
                <div class="product_slider mt-4">
                    @forelse($sportsCars as $car)
                        <div class="product_card position-relative p-3">
                            <ul class="product_card_labels list-unstyled d-flex gap-2 position-absolute flex-wrap">
                                @if($car->is_featured ?? false)
                                    <li class="promo_label text-dark">Featured</li>
                                @endif
                            </ul>
    
                            <a href="{{ route('car.details', $car->slug) }}"
                            class="product_card_image"
                            title="{{ $car->model->brand->name ?? '' }} {{ $car->model->name ?? '' }} {{ $car->makeYear->year ?? '' }}">
                                <img class="w-100"
                                    src="{{ asset('public/storage/car_images/' . $car->feature_image) }}"
                                    alt="car image" />
                            </a>
    
                            <div class="product_card_title d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h5>{{ $car->model->brand->name ?? '' }} {{ $car->model->name ?? '' }} {{ $car->makeYear->year ?? '' }}</h5>
                                    <p class="text-secondary m-0">{{ $car->spec->spec ?? '' }}, {{ $car->makeYear->year ?? '' }}</p>
                                </div>
                                <!--<div class="d-flex align-items-center gap-2 border-start">-->
                                <!--    <a href="https://api.whatsapp.com/send?phone=+971 58 835 7508&text=I+visited+your+website+and+I+am+interested+in+%3A+{{ urlencode($car->model->brand->brand . ' ' . $car->model->model . ' (' . ($car->makeYear->year ?? '') . ')') }}%0A{{ urlencode(url('our-fleet/' . Str::slug($car->model->brand->brand . '-' . $car->model->model . '-' . $car->makeYear->year) . '-iid-' . $car->id)) }}"-->
                                <!--    target="_blank">-->
                                <!--        <i class="fa-brands fa-whatsapp text-light fs-5 wa_icon" data-id="{{ $car->id }}"></i>-->
                                <!--    </a>-->
                                <!--    <a href="tel:+971 58 835 7508">-->
                                <!--        <i class="fa-solid fa-phone text-light fs-6 phone_icon" data-id="{{ $car->id }}"></i>-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                            
                            @php
                                $daily = $car->prices->where('type', 'daily')->first();
                                $weekly = $car->prices->where('type', 'weekly')->first();
                                $monthly = $car->prices->where('type', 'monthly')->first();
                                $kilometers = $daily->kilometers ?? $weekly->kilometers ?? $monthly->kilometers ?? null;
                            @endphp
    
                            <div class="product_cardDetails">
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon1.png') }}" alt="image" class="img-fluid" />
                                    {{ $car->seat->seat ?? 'N/A' }} Seats
                                </span>
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon2.png') }}" alt="image" class="img-fluid" />
                                    {{ $car->transmission->transmission ?? 'N/A' }}
                                </span>
                                @if($kilometers)
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon3.png') }}" alt="image" class="img-fluid" />
                                    {{ $kilometers }} km
                                </span>
                                @endif
                                <span class="no_deposit">
                                    <!--<img src="{{ asset('assets/images/home/detail-icon4.png') }}" alt="image" class="img-fluid" />-->
                                    <span class="aed_sign">D</span>
                                    No Deposit
                                </span>
                            </div>
    
                            <div class="product_card_price d-flex gap-3 justify-content-center">
                                {{-- Daily --}}
                                @if($daily)
                                    <div>
                                        <p class="m-0 day">Per Day</p>
                                        @if($daily->discounted_price && $daily->discounted_price < $daily->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($daily->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($daily->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($daily->price) }}</p>
                                        @endif
                                    </div>
                                @endif
    
                                {{-- Weekly --}}
                                @if($weekly)
                                    <div>
                                        <p class="m-0 day">Per Week</p>
                                        @if($weekly->discounted_price && $weekly->discounted_price < $weekly->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($weekly->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</p>
                                        @endif
                                    </div>
                                @endif
    
                                {{-- Monthly --}}
                                @if($monthly)
                                    <div>
                                        <p class="m-0 day">Per Month</p>
                                        @if($monthly->discounted_price && $monthly->discounted_price < $monthly->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($monthly->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="product_card_btn mt-3 btn_flex social_card_btns">
                                @php
                                    $carName = $car->model->brand->name . ' ' . $car->model->name . ' (' . ($car->makeYear->year ?? '') . ')';
                                    $carUrl  = url('our-fleet/' . $car->slug);
                                
                                    $message = "I visited your website and I am interested in:\n" . $carName . "\n" . $carUrl;
                                @endphp
                                
                                <a href="https://api.whatsapp.com/send?phone=971588357508&text={{ urlencode($message) }}"
                                   target="_blank"
                                   class="wa_icon text-light">
                                    <i class="fa-brands fa-whatsapp fs-5"></i> Whatsapp
                                </a>

                                <a href="tel:+971 58 835 7508" class="btn themeBtn">
                                    <i class="fa-solid fa-phone fs-6" data-id="{{ $car->id }}"></i> Call us
                                </a>
                            </div>
    
                            <!-- <div class="product_card_btn mt-3">
                                <a href="javascript:void(0);" class="btn themeBtn w-100 sendInquiry" data-id="{{ $car->id }}">
                                    Send Inquiry
                                </a>
                            </div> -->
                        </div>
                    @empty
                        <p class="text-center w-100 py-5">No featured cars available at the moment.</p>
                    @endforelse
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('car.category', 'sports-cars') }}" class="btn themeBtn">
                    View All Sports Cars&nbsp;
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Sports Cards Section End -->
    
    <!-- SUV Cards Section Start -->
    <section class="product_section py-5">
        <div class="container">
            <h2 class="secHeading">Find the <span>Perfect SUV </span> Rental in Dubai</h2>
            <div class="slick-slider">
                <div class="product_slider mt-4">
                    @forelse($suvCars as $car)
                        <div class="product_card position-relative p-3">
                            <ul class="product_card_labels list-unstyled d-flex gap-2 position-absolute flex-wrap">
                                @if($car->is_featured ?? false)
                                    <li class="promo_label text-dark">Featured</li>
                                @endif
                            </ul>
    
                            <a href="{{ route('car.details', $car->slug) }}"
                            class="product_card_image"
                            title="{{ $car->model->brand->name ?? '' }} {{ $car->model->name ?? '' }} {{ $car->makeYear->year ?? '' }}">
                                <img class="w-100"
                                    src="{{ asset('public/storage/car_images/' . $car->feature_image) }}"
                                    alt="car image" />
                            </a>
    
                            <div class="product_card_title d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h5>{{ $car->model->brand->name ?? '' }} {{ $car->model->name ?? '' }} {{ $car->makeYear->year ?? '' }}</h5>
                                    <p class="text-secondary m-0">{{ $car->spec->spec ?? '' }}, {{ $car->makeYear->year ?? '' }}</p>
                                </div>
                                <!--<div class="d-flex align-items-center gap-2 border-start">-->
                                <!--    <a href="https://api.whatsapp.com/send?phone=+971 58 835 7508&text=I+visited+your+website+and+I+am+interested+in+%3A+{{ urlencode($car->model->brand->brand . ' ' . $car->model->model . ' (' . ($car->makeYear->year ?? '') . ')') }}%0A{{ urlencode(url('our-fleet/' . Str::slug($car->model->brand->brand . '-' . $car->model->model . '-' . $car->makeYear->year) . '-iid-' . $car->id)) }}"-->
                                <!--    target="_blank">-->
                                <!--        <i class="fa-brands fa-whatsapp text-light fs-5 wa_icon" data-id="{{ $car->id }}"></i>-->
                                <!--    </a>-->
                                <!--    <a href="tel:+971 58 835 7508">-->
                                <!--        <i class="fa-solid fa-phone text-light fs-6 phone_icon" data-id="{{ $car->id }}"></i>-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                            
                            @php
                                $daily = $car->prices->where('type', 'daily')->first();
                                $weekly = $car->prices->where('type', 'weekly')->first();
                                $monthly = $car->prices->where('type', 'monthly')->first();
                                $kilometers = $daily->kilometers ?? $weekly->kilometers ?? $monthly->kilometers ?? null;
                            @endphp
    
                            <div class="product_cardDetails">
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon1.png') }}" alt="image" class="img-fluid" />
                                    {{ $car->seat->seat ?? 'N/A' }} Seats
                                </span>
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon2.png') }}" alt="image" class="img-fluid" />
                                    {{ $car->transmission->transmission ?? 'N/A' }}
                                </span>
                                @if($kilometers)
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon3.png') }}" alt="image" class="img-fluid" />
                                    {{ $kilometers }} km
                                </span>
                                @endif
                                <span class="no_deposit">
                                    <!--<img src="{{ asset('assets/images/home/detail-icon4.png') }}" alt="image" class="img-fluid" />-->
                                    <span class="aed_sign">D</span>
                                    No Deposit
                                </span>
                            </div>
    
                            <div class="product_card_price d-flex gap-3 justify-content-center">
                                {{-- Daily --}}
                                @if($daily)
                                    <div>
                                        <p class="m-0 day">Per Day</p>
                                        @if($daily->discounted_price && $daily->discounted_price < $daily->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($daily->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($daily->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($daily->price) }}</p>
                                        @endif
                                    </div>
                                @endif
    
                                {{-- Weekly --}}
                                @if($weekly)
                                    <div>
                                        <p class="m-0 day">Per Week</p>
                                        @if($weekly->discounted_price && $weekly->discounted_price < $weekly->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($weekly->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</p>
                                        @endif
                                    </div>
                                @endif
    
                                {{-- Monthly --}}
                                @if($monthly)
                                    <div>
                                        <p class="m-0 day">Per Month</p>
                                        @if($monthly->discounted_price && $monthly->discounted_price < $monthly->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($monthly->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="product_card_btn mt-3 btn_flex social_card_btns">
                                @php
                                    $carName = $car->model->brand->name . ' ' . $car->model->name . ' (' . ($car->makeYear->year ?? '') . ')';
                                    $carUrl  = url('our-fleet/' . $car->slug);
                                
                                    $message = "I visited your website and I am interested in:\n" . $carName . "\n" . $carUrl;
                                @endphp
                                
                                <a href="https://api.whatsapp.com/send?phone=971588357508&text={{ urlencode($message) }}"
                                   target="_blank"
                                   class="wa_icon text-light">
                                    <i class="fa-brands fa-whatsapp fs-5"></i> Whatsapp
                                </a>

                                <a href="tel:+971 58 835 7508" class="btn themeBtn">
                                    <i class="fa-solid fa-phone fs-6" data-id="{{ $car->id }}"></i> Call us
                                </a>
                            </div>
    
                            <!-- <div class="product_card_btn mt-3">
                                <a href="javascript:void(0);" class="btn themeBtn w-100 sendInquiry" data-id="{{ $car->id }}">
                                    Send Inquiry
                                </a>
                            </div> -->
                        </div>
                    @empty
                        <p class="text-center w-100 py-5">No featured cars available at the moment.</p>
                    @endforelse
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('car.category', 'luxury-car-rental-dubai') }}" class="btn themeBtn">
                    View All Luxury Cars&nbsp;
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- SUV Cards Section End -->
    
    <!-- Economy Cards Section Start -->
    <section class="product_section py-5">
        <div class="container">
            <h2 class="secHeading">Explore <span>Affordable Economy Car</span> Rentals in Dubai</h2>
            <div class="slick-slider">
                <div class="product_slider mt-4">
                    @forelse($economyCars as $car)
                        <div class="product_card position-relative p-3">
                            <ul class="product_card_labels list-unstyled d-flex gap-2 position-absolute flex-wrap">
                                @if($car->is_featured ?? false)
                                    <li class="promo_label text-dark">Featured</li>
                                @endif
                            </ul>
    
                            <a href="{{ route('car.details', $car->slug) }}"
                            class="product_card_image"
                            title="{{ $car->model->brand->name ?? '' }} {{ $car->model->name ?? '' }} {{ $car->makeYear->year ?? '' }}">
                                <img class="w-100"
                                    src="{{ asset('public/storage/car_images/' . $car->feature_image) }}"
                                    alt="car image" />
                            </a>
    
                            <div class="product_card_title d-flex justify-content-between align-items-center">
                                <div class="ms-3">
                                    <h5>{{ $car->model->brand->name ?? '' }} {{ $car->model->name ?? '' }} {{ $car->makeYear->year ?? '' }}</h5>
                                    <p class="text-secondary m-0">{{ $car->spec->spec ?? '' }}, {{ $car->makeYear->year ?? '' }}</p>
                                </div>
                                <!--<div class="d-flex align-items-center gap-2 border-start">-->
                                <!--    <a href="https://api.whatsapp.com/send?phone=+971 58 835 7508&text=I+visited+your+website+and+I+am+interested+in+%3A+{{ urlencode($car->model->brand->brand . ' ' . $car->model->model . ' (' . ($car->makeYear->year ?? '') . ')') }}%0A{{ urlencode(url('our-fleet/' . Str::slug($car->model->brand->brand . '-' . $car->model->model . '-' . $car->makeYear->year) . '-iid-' . $car->id)) }}"-->
                                <!--    target="_blank">-->
                                <!--        <i class="fa-brands fa-whatsapp text-light fs-5 wa_icon" data-id="{{ $car->id }}"></i>-->
                                <!--    </a>-->
                                <!--    <a href="tel:+971 58 835 7508">-->
                                <!--        <i class="fa-solid fa-phone text-light fs-6 phone_icon" data-id="{{ $car->id }}"></i>-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                            
                            @php
                                $daily = $car->prices->where('type', 'daily')->first();
                                $weekly = $car->prices->where('type', 'weekly')->first();
                                $monthly = $car->prices->where('type', 'monthly')->first();
                                $kilometers = $daily->kilometers ?? $weekly->kilometers ?? $monthly->kilometers ?? null;
                            @endphp
    
                            <div class="product_cardDetails">
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon1.png') }}" alt="image" class="img-fluid" />
                                    {{ $car->seat->seat ?? 'N/A' }} Seats
                                </span>
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon2.png') }}" alt="image" class="img-fluid" />
                                    {{ $car->transmission->transmission ?? 'N/A' }}
                                </span>
                                @if($kilometers)
                                <span>
                                    <img src="{{ asset('assets/images/home/detail-icon3.png') }}" alt="image" class="img-fluid" />
                                    {{ $kilometers }} km
                                </span>
                                @endif
                                <span class="no_deposit">
                                    <!--<img src="{{ asset('assets/images/home/detail-icon4.png') }}" alt="image" class="img-fluid" />-->
                                    <span class="aed_sign">D</span>
                                    No Deposit
                                </span>
                            </div>
    
                            <div class="product_card_price d-flex gap-3 justify-content-center">
                                {{-- Daily --}}
                                @if($daily)
                                    <div>
                                        <p class="m-0 day">Per Day</p>
                                        @if($daily->discounted_price && $daily->discounted_price < $daily->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($daily->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($daily->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($daily->price) }}</p>
                                        @endif
                                    </div>
                                @endif
    
                                {{-- Weekly --}}
                                @if($weekly)
                                    <div>
                                        <p class="m-0 day">Per Week</p>
                                        @if($weekly->discounted_price && $weekly->discounted_price < $weekly->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($weekly->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</p>
                                        @endif
                                    </div>
                                @endif
    
                                {{-- Monthly --}}
                                @if($monthly)
                                    <div>
                                        <p class="m-0 day">Per Month</p>
                                        @if($monthly->discounted_price && $monthly->discounted_price < $monthly->price)
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($monthly->discounted_price) }}</p>
                                            <p class="m-0 text-decoration-line-through text-muted small"><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</p>
                                        @else
                                            <p class="m-0 text-success price_orig"><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="product_card_btn mt-3 btn_flex social_card_btns">
                                @php
                                    $carName = $car->model->brand->name . ' ' . $car->model->name . ' (' . ($car->makeYear->year ?? '') . ')';
                                    $carUrl  = url('our-fleet/' . $car->slug);
                                
                                    $message = "I visited your website and I am interested in:\n" . $carName . "\n" . $carUrl;
                                @endphp
                                
                                <a href="https://api.whatsapp.com/send?phone=971588357508&text={{ urlencode($message) }}"
                                   target="_blank"
                                   class="wa_icon text-light">
                                    <i class="fa-brands fa-whatsapp fs-5"></i> Whatsapp
                                </a>
                                <a href="tel:+971 58 835 7508" class="btn themeBtn">
                                    <i class="fa-solid fa-phone fs-6" data-id="{{ $car->id }}"></i> Call us
                                </a>
                            </div>
                            <!-- <div class="product_card_btn mt-3">
                                <a href="javascript:void(0);" class="btn themeBtn w-100 sendInquiry" data-id="{{ $car->id }}">
                                    Send Inquiry
                                </a>
                            </div> -->
                        </div>
                    @empty
                        <p class="text-center w-100 py-5">No featured cars available at the moment.</p>
                    @endforelse
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('car.category', 'economy-cars') }}" class="btn themeBtn">
                    View All Economy Cars&nbsp;
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Economy Cards Section End -->


    <!-- Documents Section Start -->
    <!--<section class="bg_light_blue documents_sec">-->
    <!--    <div class="container">-->
    <!--        <h2 class="secHeading text-center">-->
    <!--            Essential Documents for <br> Renting a Car-->
    <!--        </h2>-->
    <!--        <p class="text-center">-->
    <!--            The required documentation for car rental may differ based on whether you're a resident or a tourist.-->
    <!--            <br>-->
    <!--            Outlined below are the primary documents required-->
    <!--        </p>-->
    <!--        <div class="row justify-content-center mt-5">-->
    <!--            <div class="col-md-5">-->
    <!--                <div class="document_card">-->
    <!--                    <div class="row align-items-center">-->
    <!--                        <div class="col-md-8">-->
    <!--                            <h4 class="mb-3 fw-bold">Residents and UAE Nationals</h4>-->
    <!--                            <p>-->
    <!--                                <i class="fa fa-caret-right me-1" aria-hidden="true"></i>&nbsp;-->
    <!--                                <strong>Driving License</strong>-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                <i class="fa fa-caret-right me-1" aria-hidden="true"></i>&nbsp;-->
    <!--                                <strong>Emirates ID</strong>-->
    <!--                            </p>-->
    <!--                            <p>(Residential Visa may be acceptable)</p>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-4 mt-3 mt-md-0">-->
    <!--                            <img class="img-fluid d-block mx-auto"-->
    <!--                                src="{{ asset('assets/images/home/document-resident.webp') }}" alt="document-resident" />-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-5 mt-4 mt-md-0">-->
    <!--                <div class="document_card">-->
    <!--                    <div class="row align-items-center">-->
    <!--                        <div class="col-md-8">-->
    <!--                            <h4 class="mb-3 fw-bold">Residents and UAE Nationals</h4>-->
    <!--                            <p>-->
    <!--                                <i class="fa fa-caret-right me-1" aria-hidden="true"></i>&nbsp;-->
    <!--                                <strong>Passport</strong>-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                <i class="fa fa-caret-right me-1" aria-hidden="true"></i>&nbsp;-->
    <!--                                <strong>Visit Visa</strong>-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                <i class="fa fa-caret-right me-1" aria-hidden="true"></i>&nbsp;-->
    <!--                                <strong>Home Country Driving License</strong>-->
    <!--                            </p>-->
    <!--                            <p>-->
    <!--                                <i class="fa fa-caret-right me-1" aria-hidden="true"></i>&nbsp;-->
    <!--                                <strong>International Driving Permit (IDP)</strong>-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-4 mt-3 mt-md-0">-->
    <!--                            <img class="img-fluid d-block mx-auto"-->
    <!--                                src="{{ asset('assets/images/home/document-visitor.webp') }}" alt="document-visitor" />-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Documents Section End -->

    <!-- Booking Section Start -->
    <section class="rental_section py-5">
        <div class="container">
            <h2 class="secHeading text-center">Our Car Rental <span>Booking Process</span></h2>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5">
                    <div>
                        <h4 class="fw-bold">Explore Our Vehicle Selection</h4>
                        <p>
                            Browse through our wide range of vehicles, including economy, luxury, and 4x4 cars available
                            for rent in Dubai. Select the perfect vehicle that fits your specific needs, preferences, and
                            budget.
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <figure class="rental_image">
                        <img class="d-block mx-auto w-100"
                            src="{{ asset('assets/images/home/process-car1.png') }}" alt="process-step" />
                    </figure>
                </div>
            </div>
            <div class="row align-items-center justify-content-between flex-row-reverse">
                <div class="col-md-5">
                    <div>
                        <h4 class="fw-bold">Confirm Your Reservation</h4>
                        <p>Once you've found your ideal car, reach out to us to initiate the booking process. Our
                            streamlined inquiry system ensures a quick and efficient reservation process. Rest assured,
                            our online payment platform is safe and secure.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <figure class="rental_image">
                        <img class="d-block mx-auto w-100"
                            src="{{ asset('assets/images/home/process-car2.png') }}"
                            alt="process-step" />
                    </figure>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5">
                    <div>
                        <h4 class="fw-bold">Choose Your Pickup Option</h4>
                        <p>After your booking is confirmed, decide whether you'd like to collect your rental car or have
                            it conveniently delivered to your location. Enjoy flexible options tailored to your
                            convenience, ensuring a seamless rental experience.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <figure class="rental_image">
                        <img class="d-block mx-auto w-100"
                            src="{{ asset('assets/images/home/process-car3.png') }}" alt="process-step" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Booking Section End -->

    <!-- Why Choose Section Start -->
    <section class="choose_section bg_theme my-4 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="why_choose_card">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded mx-2 box_shadow">
                                    <img src="{{ asset('assets/images/home/choose-icon1.png') }}"
                                        alt="why" />
                                    <h5 class="mt-3 fw-bold">Transparent Pricing, No Surprises!</h5>
                                    <p>
                                        At MK Autos, transparency is our policy. We believe in upfront pricing where what you see is what you get. Aside from the rental fee, we ensure customers are fully informed about additional options such as delivery and insurance, available for a minimal charge.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded mx-2 box_shadow">
                                    <img src="{{ asset('assets/images/home/choose-icon2.png') }}"
                                        alt="why" />
                                    <h5 class="mt-3 fw-bold">Unbeatable Car Rental Rates </h5>
                                    <p>
                                        Experience the best rates on car rentals in Dubai with MK Autos. Our commitment to affordability delivers more value for your money. Take advantage of daily and weekly promotions that make premium rentals incredibly accessible.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded mx-2 box_shadow">
                                    <img src="{{ asset('assets/images/home/choose-icon3.png') }}"
                                        alt="why" />
                                    <h5 class="mt-3 fw-bold">Wide Range of Vehicles</h5>
                                    <p>
                                        Discover our diverse, meticulously maintained fleet—one of the youngest collections in the UAE. Whether you need a compact car, sedan, hatchback, or SUV, MK Autos has you covered. Have a specific vehicle in mind? Contact us, and we deliver exactly what you require.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded mx-2 box_shadow">
                                    <img src="{{ asset('assets/images/home/choose-icon4.png') }}"
                                        alt="why" />
                                    <h5 class="mt-3 fw-bold">Round-the-Clock Customer Support </h5>
                                    <p>
                                        Enjoy peace of mind with our 24/7 customer service. Day or night, dial <a href="tel:+971 58 835 7508">+971 58 835 7508</a> and our experienced agents at the Al Barsha 1 car rental center assist you promptly with any inquiries or concerns.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-5 text-light mx-2 mx-md-5 pt-4">
                        <h2 class="secHeading">
                            Why Choose <span>Rental Car Services</span> in the UAE?
                            <br class="d-none d-md-block" />
                        </h2>
                        <p>Need a car in Dubai or Abu Dhabi? Rental services unlock the Emirates' world-class attractions conveniently. Dubai Mall sits steps from hotels, restaurants, and shops—perfect for seamless exploration.</p>

<p>Tourists worldwide love the UAE's futuristic energy. Whether visiting briefly or staying longer, self-driving beats crowded taxis. Rental cars transform trips—from Dubai Marina waterfront tours to relaxing at Mussafah Park.</p>

<p>MK Luxury Car Rental operates from central Al Barsha, Dubai. We offer budget-friendly vehicles with fully transparent pricing—no surprise charges. Our team creates personalized deals and simplifies payments for stress-free rentals. Choose MK Autos for reliable UAE car hire.</p>
                        <a href="{{ route('about.us') }}" class="btn themeBtn mt-3">
                            About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Section End -->


    <!-- Our Services Start -->
    <section class="service_section my-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h2 class="secHeading">Discover <span>Our Services</span></h2>
                        <p>
                             MK Autos sources vehicles from the world's most trusted brands. Customize your Dubai rental with Bluetooth connectivity, power windows, baby seats, GPS, or child boosters—whatever suits your trip.
                             <br/>Searching for reliable car rental Dubai? We cover daily hires to long-term rentals across Dubai and Abu Dhabi. Competitive rates, exceptional service guaranteed.
                        </p>
                        <h2 class="secHeading">Rent Your <span>Favorite Luxury Car Brand</span> Today</h2>
                        <p>You searched "<strong>car rental near me</strong>" and found endless options. MK Autos simplifies it. Choose from 200+ vehicles—luxury sedans, family SUVs, or high-performance sports cars for any occasion.<br/>
                       Every car passes rigorous quality inspection. We partner with top dealerships for reliable service and fair pricing. Rent with complete confidence.<br/>
                       Skip comparison shopping. MK Autos delivers well-maintained cars, great deals, and seamless booking—all in one place.<br/>
                       Renting beats public transport for flexibility. Test premium vehicles, arrive professionally for meetings, explore Dubai on your schedule.</p>
                    </div>
                    
                    
                </div>
            </div>
            <h2 class="secHeading mt-5 text-center">Our Car <span>Rental Packages</span></h2>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="service_card">
                        <figure class="service_card_img">
                            <img src="{{asset('assets/images/home/grid-1.png')}}"
                                alt="packages" />
                        </figure>
                        <div class="service_card_content">
                            <img src="{{ asset('assets/images/home/car-icon1.png') }}" alt="packages" />
                            <h4 class="fw-bold mt-4 mb-4">Short-Term Car Rentals</h4>
                            <p class="mb-0">
                                Experience convenience and flexibility with our short-term car rental options at MK Autos Whether you're in Dubai for a day, a week, or a month, we have the perfect vehicle for your temporary travel needs. Benefit from our comprehensive emergency roadside assistance and 24/7 support, ensuring a smooth and stress-free rental experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="service_card">
                        <figure class="service_card_img">
                            <img src="{{asset('assets/images/home/grid-2.png')}}"
                                alt="packages" />
                        </figure>
                        <div class="service_card_content">
                            <img src="{{ asset('assets/images/home/car-icon2.png') }}"
                                alt="packages" />
                            <h4 class="fw-bold mt-4 mb-4">Annual Rentals</h4>
                            <p class="mb-0">Simplify your transportation needs with MK Autos annual rental plans.
                                With
                                terms
                                precisely spanning 12 months, our annual rentals offer the perfect solution for those
                                seeking
                                long-term mobility. Choose from our extensive fleet with minimal documentation
                                requirements,
                                enjoying uninterrupted access to quality vehicles throughout the year.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="service_card">
                        <figure class="service_card_img">
                            <img src="{{asset('assets/images/home/grid-3.png')}}"
                                alt="packages" />
                        </figure>
                        <div class="service_card_content">
                            <img src="{{ asset('assets/images/home/car-icon3.png') }}"
                                alt="packages" />
                            <h4 class="fw-bold mt-4 mb-4">Long Term Car Rentals</h4>
                            <p class="mb-0">Embark on a journey of convenience and reliability with our long-term car rental
                                plans at MK Autos. Tailored for expats and residents in Dubai and Abu Dhabi, our long-term
                                rentals provide a maximum time limit of 24 months. Say goodbye to the challenges of public
                                transport and embrace the freedom of your own vehicle, with MK Autos as your trusted partner.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services End -->
    <section class="home-form-sec">
        <div class="container">
            <div class="booking-form-wrapper">
                <div class="booking-header">
                    <div class="luxury-badge">
                        <i class="fa-solid fa-crown"></i>
                        Luxury Car
                    </div>
                    <h3>ENQUIRE <span>NOW</span></h3>
                    <p>
                        <i class="fa-regular fa-calendar-check"></i>
                        Send us your inquiry
                    </p>
                </div>
        
                <form class="booking-form" action="{{ route('home.enquiry') }}" method="POST">
                    @csrf
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 20px;">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
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
                        <div class="input-group">
                            <textarea name="message" id="message" placeholder="Your Message" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
        
                    <button type="submit" class="btn-book">
                        Enquire Now
                        <i class="fa-regular fa-arrow-right"></i>
                    </button>
        
                    <div class="booking-benefits">
                        <div class="booking-benefit-item">
                            <i class="fa-regular fa-clock"></i>
                            <span>24/7 Support</span>
                        </div>
                        <div class="booking-benefit-item">
                            <i class="fa-regular fa-shield"></i>
                            <span>Secure Enquiry</span>
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
    </section>
    <!-- FAQ Section -->
    <section class="faq_section bg_light_blue py-5">
        <div class="container">
            <h2 class="secHeading text-center">Frequently Ask <span>Questions</span></h2>
            <div class="accordion" id="accordionExample">
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="fw-bold m-0">
                                        What types of luxury cars do you offer?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We offer a diverse fleet including brands like Lamborghini, Ferrari, Rolls-Royce,
                                        Bentley, Mercedes-Benz, BMW, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="fw-bold m-0">
                                        How can I book a car with MK Autos?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        You can book directly through our website, call us at +971 58 835 7508, or email us
                                        at contact@mkautos.ae.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="fw-bold m-0">
                                        What documents are required to rent a car?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        For UAE residents: valid Emirates ID and UAE driving license.
                                        For tourists: passport, valid visa, and international driving permit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <h5 class="fw-bold m-0">
                                        How much deposit before renting the car?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We have a no deposit policy. Need a car? It’s yours to rent!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <h5 class="fw-bold m-0">
                                        Is there a minimum rental period?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, the minimum rental period is 24 hours.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <h5 class="fw-bold m-0">
                                        Do you offer delivery and pickup services?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, we provide delivery and pickup services across Dubai for your convenience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <h5 class="fw-bold m-0">
                                        Are your vehicles insured?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Absolutely. All our vehicles come with comprehensive insurance coverage.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <h5 class="fw-bold m-0">
                                        What is your cancellation policy?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Cancellations made 24 hours before the rental period are free of charge. Late
                                        cancellations may incur a fee.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <h5 class="fw-bold m-0">
                                        Can I extend my rental period?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, extensions are possible based on vehicle availability. Please contact us in
                                        advance to arrange an extension.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    <h5 class="fw-bold m-0">
                                        Are there any mileage limits?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, each rental comes with a daily mileage limit. Additional kilometers will be
                                        charged as per our rate card.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <h5 class="fw-bold m-0">
                                        Do you offer chauffeur services?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes, professional chauffeur services are available upon request for an additional
                                        fee.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <h5 class="fw-bold m-0">
                                        What payment methods do you accept?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We accept major credit cards, debit cards, and secure online payments. Cash payments
                                        can also be arranged upon request.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThirteen" aria-expanded="false"
                                    aria-controls="collapseThirteen">
                                    <h5 class="fw-bold m-0">
                                        What happens in case of an accident or breakdown?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Although our vehicles are covered with insurance, it depends on case to case. Our
                                        24/7 support team will assist you immediately.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFourteen" aria-expanded="false"
                                    aria-controls="collapseFourteen">
                                    <h5 class="fw-bold m-0">
                                        Can I drive a rental car outside of Dubai?
                                    </h5>
                                </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Driving outside Dubai (e.g., to Abu Dhabi or other Emirates) is allowed, but prior
                                        approval is required. Cross-border travel is not permitted.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End -->

    <!-- Blog Section Start -->
    <section class="py-5 mb-5">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h2 class="secHeading">Our <span>Blogs</span></h2>
                <div>
                    <a href="{{route('blogs')}}">
                        <button class="btn themeBtn mt-2">All Posts</button>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                 @forelse($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog_card">
                        <a href="{{ route('blog.details', $blog->slug) }}">
                            <img class="img-fluid"
                                 src="{{ asset('public/storage/blog_images/' . $blog->image) }}"
                                 alt="{{ $blog->heading }}" />
                        </a>
                        <div class="px-3 py-4">
                            <a href="{{ route('blog.details', $blog->slug) }}" class="h5 fw-bold">
                                {{ $blog->heading }}
                            </a>
                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 100) }}
                            </p>
                            <a href="{{ route('blog.details', $blog->slug) }}">
                                <button class="btn themeBtn mt-2 w-100">Read More</button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center py-5">No blogs found.</p>
                </div>
            @endforelse
            
            </div>
        </div>
    </section>
    <!-- Blog Section End -->


    <!-- Testimonial Section Start -->
    <section class="py-5 bg_light_blue testimonial_section">
        <div class="container">
            <h2 class="secHeading text-center">Our <span>Testimonials</span></h2>
           <div id="featurable-28805c30-4f9b-4c50-9430-eb58676d4317" data-featurable-async ></div><script src="https://featurable.com/assets/v2/carousel_default.min.js" defer charset="UTF-8"></script>
            <!--<div class="testimonial_slider slick-slider">-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px" height="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>Rented a Lamborghini Huracan Tecnica a few weeks ago and it was a brilliant experience all round, no drama no fuss. A big thing for me is low mileage and the condition of the car. I went with MKAutos because their car was in brilliant condition and still felt new, unlike some other rental companies that offer you a car at a high price and it either has high mileage or a few years old!</p>-->
            <!--                    <p>Ali and Vikram Singh were great to deal and chat with, dropping off the car to my location and picking it up from a different location.</p>-->
            <!--                    <p>Would highly recommend this rental company.</p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi1.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Sam Hussain</h6>-->
            <!--                        <p class="m-0">8 months ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>High quality experience with a professional car rental company.</p>-->
            <!--                    <p>I rented a Ferrari F8 Tributo and a Lamborghini Huracán Tecnica for two days during my stay in Dubai. The cars were delivered and picked up directly at my resort, and communication was always very fast and friendly. Although I had an issue with the F8, the staff immediately understood the situation and proactively replaced it with a McLaren Artura within an hour. This shows how reliable the company is!</p>-->
            <!--                    <p>I highly recommend MK AUTOS and I’m looking forward to rent more cars.</p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi2.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Nicoló Poponcini</h6>-->
            <!--                        <p class="m-0">9 months ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>Rented the yellow Lamborghini, great service and brilliant car !!!!</p>-->
            <!--                    <p>Will rent from these again for sure !!! 🙌🏼🙌🏼</p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi3.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Scott Mills</h6>-->
            <!--                        <p class="m-0">10 months ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>I booked the Range Rover Velar, they delivered it to the airport on time of my arrival, they provide a high quality service backed by the best prices in town… what an experience. Loved it!</p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi4.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Osama Shamari</h6>-->
            <!--                        <p class="m-0">10 months ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>-->
            <!--                        I rented Corvette for one day. Guys informed me prior to my booking, that Corvette will be on quick service and therefore they are wiling to give me a free upgrade for 3 hours, Lamborghini Technica. With both cars I had amazing time. Service of the team was really good as well!-->
            <!--                    </p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi5.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">blaž zupan</h6>-->
            <!--                        <p class="m-0">12 months ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>-->
            <!--                        Amazing service and an incredible experience with the Lamborghini huracan. The staff were friendly and professional, and the car was in perfect condition.-->
            <!--                    </p>-->
            <!--                    <p>Highly recommend 👌🏻</p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi6.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Aslam Shah</h6>-->
            <!--                        <p class="m-0">a year ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>-->
            <!--                        Great service and support, best price I got in Dubai for car rental.-->
            <!--                    </p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi6.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Youssef Abdallah</h6>-->
            <!--                        <p class="m-0">a year ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>-->
            <!--                        V nice service. I like it-->
            <!--                    </p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi6.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Core Anderson ED</h6>-->
            <!--                        <p class="m-0">a year ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="testimonial_card rounded bg-light px-3 py-4">-->
            <!--            <img width="50px"-->
            <!--                src="{{asset('assets/images/home/testimonial-icon.webp')}}"-->
            <!--                alt="user" />-->
            <!--            <div class="pt-4">-->
            <!--                <div class="testimonial_cardContent" data-lenis-prevent>-->
            <!--                    <p>-->
            <!--                        Me and my friends we rent a Lamborghini Huracan in Dubai with Mk Autos. Amazing experience, high quality service and cars.-->
            <!--                    </p>-->
            <!--                </div>-->
            <!--                <hr>-->
            <!--                <div class="d-flex align-items-center gap-3">-->
                                <!--<div>-->
                                <!--    <img class="rounded-circle"-->
                                <!--        src="{{ asset('assets/images/home/testi6.webp') }}"-->
                                <!--        alt="user">-->
                                <!--</div>-->
            <!--                    <div>-->
            <!--                        <h6 class="m-0 fw-bold">Aline Garcia</h6>-->
            <!--                        <p class="m-0">a year ago</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
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
@section('scripts')

<script>
    let isSticky = false;
    const header = document.querySelector('.main-header');
    const logo = document.querySelector('.main-header .logo');

    function handleScroll() {
        if (window.innerWidth < 992) return; 

        if (window.scrollY > 50 && !isSticky) {
            header.classList.add('sticky-header');
            logo.src = '{{ asset('assets/images/logo-blue.png') }}';
            isSticky = true;
        } 
        else if (window.scrollY <= 50 && isSticky) {
            header.classList.remove('sticky-header');
            logo.src = '{{ asset('assets/images/logo-blue.png') }}';
            isSticky = false;
        }
    }

    function handleResize() {
        if (window.innerWidth < 992 && isSticky) {
            header.classList.remove('sticky-header');
            logo.src = '{{ asset('assets/images/logo-blue.png') }}';
            isSticky = false;
        }
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleResize);
</script>

@endsection

@endsection