@extends('admin.layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Model List </h5>
                        <div class=""><a class="btn btn-gradient" data-bs-original-title="" title=""
                                href="{{ route('admin.model.create') }}">Add</a></div>

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
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Slug</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @forelse ($models as $index => $model)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($model->image)
                                                        <img src="{{ asset('storage/model_images/' . $model->image) }}" alt="brand" height="50" width="50" style="object-fit:contain;">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>{{ $model->brand->name }}</td>
                                                <td>{{ $model->name }}</td>
                                                <td>{{ $model->slug }}</td>
                                                <td>{{ $model->meta_title ?? 'N/A' }}</td>
                                                <td>{{ $model->meta_description ?? 'N/A' }}</td>
                                                <td>
                                                    <form action="{{ route('admin.model.toggleStatus', $model->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change the model status?');" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm {{ $model->status == 1 ? 'btn-info' : 'btn-danger' }}">
                                                            <i class="fa {{ $model->status == 1 ? 'fa-thumbs-up' : 'fa-thumbs-down' }}"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td class="editDelete">
                                                    <form action="{{ route('admin.model.destroy', $model->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"
                                                            onclick="return confirm('Are you sure you want to delete this model?');">
                                                            Delete
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('admin.model.edit', $model->id) }}" class="btn btn-success">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No models found.</td>
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
