@extends('admin.layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Brand List </h5>
                        <div class=""><a class="btn btn-gradient" data-bs-original-title="" title=""
                                href="{{ route('admin.brand.create') }}">Add</a></div>

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
                                            <th>Name</th>
                                            <th>Slug</th>
                                            
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @forelse ($brands as $index => $brand)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($brand->image)
                                                        <img src="{{ asset('assets/storage/brand_images/' . $brand->image) }}" alt="brand" height="50" width="50" style="object-fit:contain;">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>{{ $brand->name }}</td>
                                                <td>{{ $brand->slug }}</td>
                                                <td>{{ $brand->meta_title ?? 'N/A' }}</td>
                                                <td>{{ $brand->meta_description ?? 'N/A' }}</td>
                                                <td>
                                                    <form action="{{ route('admin.brand.toggleStatus', $brand->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change the brand status?');" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm {{ $brand->status == 1 ? 'btn-info' : 'btn-danger' }}">
                                                            <i class="fa {{ $brand->status == 1 ? 'fa-thumbs-up' : 'fa-thumbs-down' }}"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td class="editDelete">
                                                    <form action="{{ route('admin.brand.destroy', $brand->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"
                                                            onclick="return confirm('Are you sure you want to delete this brand?');">
                                                            Delete
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('admin.brand.edit', $brand->id) }}" class="btn btn-success">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No brands found.</td>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>.

@endsection
