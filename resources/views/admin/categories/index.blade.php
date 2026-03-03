@extends('admin.layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Category List</h5>
                        <div class=""><a class="btn btn-gradient" data-bs-original-title="" title=""
                                href="{{ route('admin.category.create') }}">Add</a></div>
                    </div>
                    <div class="card-body">
                        <div class="product-table">
                            <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">
                                <table data-order='[[ 0, "desc" ]]' class="display dataTable no-footer" id="basic-1" role="grid"
                                    aria-describedby="basic-1_info">
                                    <thead>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Slug</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @forelse ($categories as $index => $category)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($category->image)
                                                        <img src="{{ asset('storage/category_images/' . $category->image) }}" alt="category" height="50" width="50" style="object-fit:contain;">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>{{ $category->category }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{{ $category->meta_title ?? 'N/A' }}</td>
                                                <td>{{ $category->meta_description ?? 'N/A' }}</td>
                                                <td>
                                                    <form action="{{ route('admin.category.toggleStatus', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change the category status?');" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm {{ $category->status == 1 ? 'btn-info' : 'btn-danger' }}">
                                                            <i class="fa {{ $category->status == 1 ? 'fa-thumbs-up' : 'fa-thumbs-down' }}"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td class="editDelete">
                                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"
                                                            onclick="return confirm('Are you sure you want to delete this category?');">
                                                            Delete
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No categories found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
