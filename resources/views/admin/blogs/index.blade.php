@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
                        <h5>Blog List </h5>
                        <a class="btn btn-gradient" href="{{ route('admin.blog.create') }}">Add</a>
                    </div>
        <div class="card-body">
            <table data-order='[[ 0, "desc" ]]' class="display dataTable no-footer" id="basic-1" role="grid"
                aria-describedby="basic-1_info">
                <thead>
                    <tr role="row">
                        <th>S.NO</th>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $index => $blog)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>
                               @if ($blog->image)
                                    <img src="{{ asset('storage/blog_images/' . $blog->image) }}" alt="blog" height="50" width="50" style="object-fit:contain;">
                                @else
                                N/A
                                @endif
                            </td>

                            <td>{{ $blog->heading }}</td>
                            <td>{{ $blog->meta_title }}</td>
                            <td>{{ Str::limit($blog->meta_description, 50) }}</td>
                            <td>{!! Str::limit(strip_tags($blog->description), 50) !!}</td>

                            <td class="editDelete">
                                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                                </form>
                                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No blogs found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
