@extends('layouts.main')
@php
    if (isset($bodyType)) {
        $bodyTypeName = is_object($bodyType) ? ucfirst($bodyType->body_type) : ucfirst($bodyType['body_type'] ?? 'Car');
    } elseif (isset($cars) && $cars->count() > 0 && $cars->first()->bodyType) {
        $bodyTypeName = ucfirst($cars->first()->bodyType->body_type);
    } else {
        $bodyTypeName = 'Car';
    }
@endphp
@section('title', 'Luxury ' . $bodyTypeName . ' Cars for Rent in Dubai – MK Fleet')
@section('description', 'Rent high end luxury ' . strtolower($bodyTypeName) . ' in Dubai with MK Luxury Car Rental. Enjoy comfort, elegance, and top performance for business trips, city drives, or special events.')

@section('content')

<!-- <section class="page_banner our_fleet">
    <div class="container">
        <h1>Our Fleet</h1>
    </div>
</section> -->

<section class="our_fleet_sec pt-150">
    <div class="container">
        <h2 class="secHeading">
            Rent a Car Range On MK Luxury Car Rental
        </h2>
        <div class="flex_filter mb-4">
            @include('partials.price-filter')
            <button class="btn themeBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"><i class="fa-solid fa-sliders me-3"></i> Filters</button>
        </div>
        
        <div class="row g-3 footer_social_boxes social_boxes_category mb-5 justify-content-center">
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

            @forelse($cars as $car)
                <div class="car_card_gallery">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card_images_container">
                                <div class="card_images_wrapper">
                                    <div class="card_images_box">
                                        <a href="{{ route('car.details', $car->slug) }}" 
                                        class="card_images_link"
                                        data-testid="Gallery.Link.1"
                                        aria-label="Rent a {{ $car->model->brand->name }} in Dubai"></a>

                                        <div class="image_area">
                                            <img src="{{ asset('public/storage/car_images/' . $car->feature_image) }}"
                                                height="260" width="320"
                                                alt="Rent {{ $car->model->name }} {{ $car->makeYear->year ?? '' }} in Dubai"
                                                title="Rent {{ $car->model->name }} {{ $car->makeYear->year ?? '' }} in Dubai">
                                        </div>
                                    </div>
                                     @foreach ($car->images->take(3) as $index => $image)
                                        <div class="card_images_box">
                                            <a href="{{ route('car.details', $car->slug) }}" class="card_images_link"
                                            data-testid="Gallery.Link.{{ $index + 1 }}"
                                            aria-label="Rent a {{ $car->model->brand->name }} in Dubai"></a>

                                            <div class="image_area">
                                                <img src="{{ asset('public/storage/car_images/' . $image->image) }}"
                                                    height="260" width="320"
                                                    alt="Rent {{ $car->model->name }} {{ $car->makeYear->year ?? '' }} in Dubai"
                                                    title="Rent {{ $car->model->name }} {{ $car->makeYear->year ?? '' }} in Dubai">

                                                @if ($loop->last)
                                                    <div class="find_out_more">
                                                        <div class="d-block">
                                                            <span class="d-block mb-2">Like what you see?</span>
                                                            <div class="btn findMoreBtn">Find out more</div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="car_card_content">
                                <a href="{{ route('car.details', $car->slug) }}">
                                    <h3 class="card_car_title">
                                        <span>{{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->makeYear->year }}</span>
                                        <!-- Dubai Rental: 5 Seater Sedan, White Color, Sleek Design, Advanced Safety Features, Perfect For Daily Commutes -->
                                    </h3>
                                </a>
                                <div class="row">
                                    <div class="col-md-8">
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
                                        <ul class="card_car_features">
                                            <li>
                                                Free Delivery
                                            </li>
                                            <li>
                                                Easy Booking Process
                                            </li>
                                            <li>
                                                Contract terms apply
                                            </li>
                                            <li>
                                                Free Service and Maintenance
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card_car_pricing">
                                            @php
                                                $daily = $car->prices->where('type', 'daily')->first();
                                                $weekly = $car->prices->where('type', 'weekly')->first();
                                                $monthly = $car->prices->where('type', 'monthly')->first();
                                            @endphp

                                            {{-- Daily Pricing --}}
                                            @if($daily)
                                                <div class="card_pricing">
                                                    @if ($daily->discounted_price && $daily->price > $daily->discounted_price)
                                                        <span class="original_price">
                                                            <span><span class="aed_sign">D</span> {{ number_format($daily->price) }}</span>
                                                        </span>
                                                        <h5 class="dicounted_price">
                                                            <span class="aed_sign">D</span> {{ number_format($daily->discounted_price) }} <span>/ Day</span>
                                                        </h5>
                                                    @else
                                                        <h5 class="dicounted_price">
                                                            <span class="aed_sign">D</span> {{ number_format($daily->price) }} <span>/ Day</span>
                                                        </h5>
                                                    @endif
                                                    @if(!empty($daily->kilometers))
                                                        <span class="kilometers">
                                                            <i class="fa-solid fa-road me-2"></i> {{ $daily->kilometers }} km
                                                        </span>
                                                    @endif

                                                </div>
                                            @endif

                                            {{-- Monthly or Weekly Pricing --}}
                                            @if($monthly)
                                                <div class="card_pricing">
                                                    @if ($monthly->discounted_price && $monthly->price > $monthly->discounted_price)
                                                        <span class="original_price">
                                                            <span><span class="aed_sign">D</span> {{ number_format($monthly->price) }}</span>
                                                        </span>
                                                        <h5 class="dicounted_price">
                                                            <span class="aed_sign">D</span> {{ number_format($monthly->discounted_price) }} <span>/ Month</span>
                                                        </h5>
                                                    @else
                                                        <h5 class="dicounted_price">
                                                            <span class="aed_sign">D</span> {{ number_format($monthly->price) }} <span>/ Month</span>
                                                        </h5>
                                                    @endif
                                                    @if(!empty($monthly->kilometers))
                                                        <span class="kilometers">
                                                            <i class="fa-solid fa-road me-2"></i> {{ $monthly->kilometers }} km
                                                        </span>
                                                    @endif
                                                </div>
                                            @elseif($weekly)
                                                <div class="card_pricing">
                                                    @if ($weekly->discounted_price && $weekly->price > $weekly->discounted_price)
                                                        <span class="original_price">
                                                            <span><span class="aed_sign">D</span> {{ number_format($weekly->price) }}</span>
                                                        </span>
                                                        <h5 class="dicounted_price">
                                                            <span class="aed_sign">D</span> {{ number_format($weekly->discounted_price) }} <span>/ Week</span>
                                                        </h5>
                                                    @else
                                                        <h5 class="dicounted_price">
                                                            <span class="aed_sign">D</span> {{ number_format($weekly->price) }} <span>/ Week</span>
                                                        </h5>
                                                    @endif
                                                    @if(!empty($weekly->kilometers))
                                                        <span class="kilometers">
                                                            <i class="fa-solid fa-road me-2"></i> {{ $weekly->kilometers }} km
                                                        </span>
                                                    @endif

                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="btn_flex card_car_btns">
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
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            No Cars
            @endforelse

            @include('partials.filters')




       
    </div>
</section>



@endsection