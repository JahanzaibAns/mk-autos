@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="brand_id" value="{{ $brand->id }}">

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Meta Title</label>
                                    <input class="form-control" type="text" name="meta_title" placeholder="Enter Meta Title" value="{{ old('meta_title', $brand->meta_title) }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Meta Description</label>
                                    <input class="form-control" type="text" name="meta_description" placeholder="Enter Meta Description" value="{{ old('meta_description', $brand->meta_description) }}">
                                </div>
                            </div>

                       

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Brand Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Brand Name" value="{{ old('name', $brand->name) }}">
                                </div>
                            </div>

                       

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Upload Brand Image</label>
                                    <input class="form-control" type="file" name="image">
                                    @if ($brand->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/brand_images/' . $brand->image) }}" alt="Brand Image" width="80" height="80">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control editor" name="description" rows="6">{{ old('description', $brand->description) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{ route('admin.brands.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>

                    {{-- Display Validation Errors --}}
                    @if($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
