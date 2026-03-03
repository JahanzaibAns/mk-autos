@extends('admin.layouts.master')
@section('content')
<style>
    td.editDelete {
    display: flex;
    gap: 10px;
}
</style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Car Rental Inquiries List </h5>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">
                                <table class="display dataTable no-footer" id="basic-1">
                                    <thead>
                                        <tr role="row">
                                            <th>S.NO</th>
                                            <th>Car Detail</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date</th>
                                            <th class="sorting" style="width: 120.016px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <trclass="odd">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Mercedes Benz S580 2022
                                                </td>
                                                <td>
                                                    Tahani almayyah
                                                </td>
                                                <td>
                                                    roro_890@yahoo.com
                                                </td>
                                                <td>
                                                    +1 (594) 939-1236
                                                </td>
                                                <td>
                                                    Wednesday, 10 July 2024 10:55 PM
                                                </td>
                                                <td class="editDelete">
                                                    <a href="javascript:void(0);" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete Inquiry ?');">
                                                        Delete
                                                    </a>
                                                    <a href="{{route('admin.inquiry.detail')}}" class="btn btn-success">View</a>
                                                </td>
                                            </tr>
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

