@extends('layouts.main')

@section('title', $blog->meta_title ?? $blog->heading . ' - MK Luxury Blog')

@section('description', $blog->meta_description ?? 'Read our latest blog post about ' . $blog->heading . ' at MK Luxury Car Rental.')

@section('content')
<section class="blogs_details_sec pt-150 pb-5">
    <div class="container">
        <div class="blog_details_header">
            <figure class="image_box">
                <img src="{{ $blog->image ? asset('public/storage/blog_images/' . $blog->image) : asset('assets/images/default-blog.jpg') }}"
                    height="450" width="1400" alt="{{ $blog->heading }}" class="img-fluid">
            </figure>
        </div>
        <div class="blog_details_body">
            <h1 class="secHeading">
                {{ $blog->heading }}
            </h1>
            <div class="blog__content">
                {!! $blog->description !!}
            </div>
        </div>
    </div>
</section>
@endsection