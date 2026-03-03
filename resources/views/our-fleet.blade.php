@extends('layouts.main')
@section('title', 'Explore Dubai’s Luxury Car Fleet – MK Luxury Car Rental')
@section('description', 'Discover our premium luxury car fleet in Dubai. Rent exotic supercars, sedans, coupes, SUVs, and more for trips, events, or special occasions with ease.')
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

                                    {{-- Show the rest of the images --}}
                                    @foreach ($car->images->take(3) as $index => $image)
                                        <div class="card_images_box">
                                            <a href="{{ route('car.details', $car->slug) }}" 
                                            class="card_images_link"
                                            data-testid="Gallery.Link.{{ $index + 2 }}"
                                            aria-label="Rent a {{ $car->model->brand->name }} in Dubai"></a>

                                            <div class="image_area">
                                                <img src="{{ asset('public/storage/car_images/' . $image->image) }}"
                                                    height="260" width="320"
                                                    alt="Rent {{ $car->model->name }} {{ $car->makeYear->year ?? '' }} in Dubai"
                                                    title="Rent {{ $car->model->name }} {{ $car->makeYear->year ?? '' }} in Dubai">

                                                {{-- Show "find out more" only on the last shown image --}}
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