@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">.
                <div class="card-header">
                    <h5>Add Brand</h5>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="form theme-form">
                        <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Meta Title</label>
                                        <input class="form-control" type="text" name="meta_title" placeholder="Enter Meta Title" value="{{ old('meta_title') }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Meta Description</label>
                                        <input class="form-control" type="text" name="meta_description" placeholder="Enter Meta Description" value="{{ old('meta_description') }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label>Brand Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Brand Name" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label>Upload Brand Image</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control editor" name="description" rows="5">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="col">
                                    <div>
                                        <button type="submit" class="btn btn-success me-3">Add</button>
                                        <a class="btn btn-danger" href="{{ route('admin.brands.index') }}">Cancel</a>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection