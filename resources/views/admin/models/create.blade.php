@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Create Car Brands/Models </h5>
                </div>
                <div class="card-body">
                    <div class="form theme-form">
                        <form action="{{ route('admin.model.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                               
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Meta Title</label>
                                        <input class="form-control" type="text" placeholder="Enter Meta Title" name="meta_title" value="">
                                    </div>
                                </div>                                
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Meta Description</label>
                                        <input class="form-control" type="text" placeholder="Enter Meta Description" name="meta_description" value="">
                                    </div>
                                </div>      
                                                 
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                         {!! \App\Helpers\DropDownHelper::brandDropdown(old('brand_id')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label>Model  Name</label>
                                        <input class="form-control" type="text" placeholder="Enter Model Name" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label>Upload Brand Image</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="">Description</label>
                                        <textarea class="form-control editor" name="description" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <button type="submit" id="" class="btn btn-success me-3">Add</button>
                                        <a class="btn btn-danger" href="{{route('admin.models.index')}}">Cancel</a>
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

