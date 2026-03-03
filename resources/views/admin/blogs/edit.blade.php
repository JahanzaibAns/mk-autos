@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">
                    <div class="form theme-form">

                        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                            <div class="mb-3">
                                <label>Meta Title</label>
                                <input class="form-control" type="text" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" placeholder="Enter Meta Title" required>
                            </div>

                            <div class="mb-3">
                                <label>Heading</label>
                                <input class="form-control" type="text" name="heading" value="{{ old('heading', $blog->heading) }}" placeholder="Enter Blog Heading" required>
                            </div>

                            <div class="mb-3">
                                <label>Blog Slug</label>
                                <input class="form-control" type="text" name="slug" value="{{ old('slug', $blog->slug) }}" placeholder="Enter Blog Slug" required>
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>
                                <input class="form-control" type="text" name="meta_description" value="{{ old('meta_description', $blog->meta_description) }}" placeholder="Enter Meta Description" required>
                            </div>

                            <div class="mb-3">
                                <label>Upload Image</label>
                                <input class="form-control" type="file" name="image" accept="image/*">
                                @if ($blog->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/blog_images/' . $blog->image) }}" alt="Blog Image" height="100" width="100">
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea class="form-control editor" name="description" rows="10">{{ old('description', $blog->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-success me-3">Update</button>
                                <a class="btn btn-danger" href="{{ route('admin.blogs.index') }}">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $("input[type='file']").on("change", function () {
        if (this.files[0].size > 3000000) {
            toastr.error("Please upload a file smaller than 3 MB.");
            $(this).val('');
        }
    });
</script>
@endpush

@endsection
