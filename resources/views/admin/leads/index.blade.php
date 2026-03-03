@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Leads</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">
                                <table class="display dataTable no-footer" id="basic-1">
                                    <thead>
                                        <tr role="row">
                                            <th>S.NO</th>
                                            <th>Car Name</th>
                                            <th>Image</th>
                                            <th> Lead Type</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" target="_blank">
                                                    Nissan Patrol 2020
                                                </a>
                                            </td>
                                            <td>
                                                <img src="https://driftcarrental.com/public/feature_image/1725368417.webp"
                                                    width="200px" height="100px">
                                            </td>
                                            <td>
                                                Whatsapp
                                            </td>

                                            <td>
                                                Sunday, 03 August 2025 10:36 PM
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
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