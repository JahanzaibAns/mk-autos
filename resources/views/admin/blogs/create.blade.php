@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="form theme-form">
                <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- Meta Title --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Meta Title</label>
                                <input class="form-control" type="text" name="meta_title" placeholder="Enter Meta Title" value="{{ old('meta_title') }}">
                                @error('meta_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Heading --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Heading</label>
                                <input class="form-control" type="text" name="heading" placeholder="Enter Blog Heading" value="{{ old('heading') }}">
                                @error('heading')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Blog Slug --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Blog Slug</label>
                                <input class="form-control" type="text" name="slug" placeholder="Enter Blog Slug" value="{{ old('slug') }}">
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Meta Description --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Meta Description</label>
                                <input class="form-control" type="text" name="meta_description" placeholder="Enter Meta Description" value="{{ old('meta_description') }}">
                                @error('meta_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Upload Image --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Upload Image</label>
                                <input class="form-control" type="file" name="image">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea class="form-control editor" name="description" rows="10">{!! old('description') !!}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Submit & Cancel --}}
                    <div class="row">
                        <div class="col">
                            <div>
                                <button type="submit" class="btn btn-success me-3">Add</button>
                                <a class="btn btn-danger" href="{{ route('admin.blogs.index') }}">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
