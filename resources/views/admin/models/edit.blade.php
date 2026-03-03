@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Car Model</h5>
                </div>
                <div class="card-body">
                    <div class="form theme-form">
                        <form action="{{ route('admin.model.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Meta Title</label>
                                        <input class="form-control" type="text" name="meta_title" value="{{ old('meta_title', $model->meta_title) }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Meta Description</label>
                                        <input class="form-control" type="text" name="meta_description" value="{{ old('meta_description', $model->meta_description) }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        {!! \App\Helpers\DropDownHelper::brandDropdown(old('brand_id', $model->brand_id)) !!}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label>Model Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name', $model->name) }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label>Upload Model Image</label>
                                        <input class="form-control" type="file" name="image">
                                        @if($model->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $model->image) }}" alt="Model Image" style="height: 100px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control editor" name="description" rows="5">{{ old('description', $model->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="col">
                                    <div>
                                        <button type="submit" class="btn btn-primary me-3">Update</button>
                                        <a class="btn btn-danger" href="{{ route('admin.models.index') }}">Cancel</a>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
