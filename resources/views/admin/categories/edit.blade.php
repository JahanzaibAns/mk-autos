@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="category_id" value="{{ $category->id }}">

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Meta Title</label>
                                    <input class="form-control" type="text" name="meta_title" placeholder="Enter Meta Title" value="{{ old('meta_title', $category->meta_title) }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Meta Description</label>
                                    <input class="form-control" type="text" name="meta_description" placeholder="Enter Meta Description" value="{{ old('meta_description', $category->meta_description) }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Category Name</label>
                                    <input class="form-control" type="text" name="category" placeholder="Enter Category Name" value="{{ old('category', $category->category) }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Upload Category Image</label>
                                    <input class="form-control" type="file" name="image">
                                    @if ($category->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/category_images/' . $category->image) }}" alt="Category Image" width="80" height="80">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control editor" name="description" rows="6">{{ old('description', $category->description) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Cancel</a>
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
