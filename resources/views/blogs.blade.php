@extends('layouts.main')
@section('title', 'Blogs')
@section('description', 'Explore our latest blogs for insights, tips, and updates on car rentals, travel, and more. Stay informed with MK Luxury Car Rental’s expert advice and industry news.')
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
                Blogs
            </li>
        </ul>
        <h1 class="secHeading">Blogs</h1>

        <div class="row g-4 py-5">
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
@endsection
