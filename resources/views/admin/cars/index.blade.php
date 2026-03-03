@extends('admin.layouts.master')
@section('content')
    <style>
        td.editDelete {
            display: flex;
            gap: 10px;
        }

        .productsetting {
            margin-left: 63%;
        }

        .productsetting a {
            padding: 10px;
        }

        .power_icon {
            padding: 5px 10px 5px 12px;
            background: #343A40;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
        }

        .power_icon_red {
            padding: 10px 10px 10px 12px;
            background: red;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
        }

        a.power_icon_red:hover,
        a.power_icon:hover {
            color: #fff;
        }

        .bg_orange {
            background-color: #ffba00 !important;
        }

        .reload_icon {
            padding: 1px 3px;
            border-radius: 5px;
            font-size: 16px;
            background-color: #ffba00 !important;

        }
        /* .power_icon_data{
                text-align: center;

            } */
    </style>



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Car Listing </h5>
                        {{-- <div class="productsetting"><a class="btn btn-gradient" data-bs-original-title="" title=""
                            href="{{ route('product-setting') }}">Product Setting</a></div> --}}
                        <div class=""><a class="btn btn-gradient" data-bs-original-title="" title=""
                                href="{{ route('admin.car.create') }}">Add</a></div>

                    </div>
                    <div class="card-body">
                        <div class="product-table">
                            <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">
                                <table data-order='[[ 0, "desc" ]]' class="display dataTable no-footer" id="basic-1"
                                    role="grid" aria-describedby="basic-1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1"
                                                colspan="1" aria-sort="ascending">
                                                S.NO</th>
                                            <th class="sorting" tabindex="0" aria-controls="basic-1"
                                                aria-label="Details: activate to sort column ascending">Car Image</th>    
                                            <th class="sorting" tabindex="0" aria-controls="basic-1"
                                                aria-label="Details: activate to sort column ascending">Car Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="basic-1"
                                                aria-label="Details: activate to sort column ascending">Car Slug</th>    
                                            <th class="sorting" tabindex="0" aria-controls="basic-1"
                                                aria-label="Details: activate to sort column ascending">Price Set</th>
                                            <th class="sorting" tabindex="0" aria-controls="basic-1"
                                                aria-label="Details: activate to sort column ascending"> Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 120.016px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($cars as $index => $car)
                                            `<tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }}">
                                                <td>{{ $index + 1 }}</td>
                                                <td> @if ($car->feature_image)
                                                        <img src="{{ asset('public/storage/car_images/' . $car->feature_image) }}" alt="brand" height="50" width="50" style="object-fit:contain;">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>{{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->makeYear->year }}</td>
                                                 <td>{{ $car->slug }}</td>
                                                <td>
                                                   @if($car->prices && $car->prices->count())
                                                        @php $prices = $car->prices->keyBy('type'); @endphp

                                                        @if(isset($prices['daily']))
                                                            {{ $prices['daily']->discounted_price ?? $prices['daily']->price }}/Day <br>
                                                        @endif

                                                        @if(isset($prices['weekly']))
                                                            {{ $prices['weekly']->discounted_price ?? $prices['weekly']->price }}/Week <br>
                                                        @endif

                                                        @if(isset($prices['monthly']))
                                                            {{ $prices['monthly']->discounted_price ?? $prices['monthly']->price }}/Month
                                                        @endif
                                                    @else
                                                        <span class="text-muted">Not Set</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="badge bg-{{ $car->status === 'active' ? 'success' : 'danger' }}">
                                                        {{ ucfirst($car->status) }}
                                                    </span>
                                                </td>
                                                <td class="power_icon_data editDelete">

                                                    <!-- Toggle Status -->
                                                    <form action="{{ route('admin.car.toggleStatus', $car->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm {{ $car->status === 'active' ? 'btn-warning' : 'btn-success' }}" title="Toggle Status">
                                                            <i class="fa fa-power-off"></i>
                                                        </button>
                                                    </form>

                                                    <!-- Delete -->
                                                    <form action="{{ route('admin.car.destroy', $car->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this car?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                                    </form>

                                                    <!-- Edit -->
                                                    <a href="{{ route('admin.car.edit', $car->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No cars found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
@endsection
