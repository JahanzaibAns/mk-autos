@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid" style="color: #000;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <tbody>
                                    <tr>
                                        <th>Car Details</th>
                                        <td>Mercedes Benz S580 2022</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>Test Developer</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            <a href="mailto:test@gmail.com">test@gmail.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>
                                            <a href="tel:+030254785549">030254785549</a>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>From Date</th>
                                        <td>04/22/2024</td>
                                    </tr> 
                                    <tr>
                                        <th>To Date</th>
                                        <td>04/22/2024</td>
                                    </tr> 
                                    <tr>
                                        <th>Message</th>
                                        <td>I am interested in Mercedes Benz S580 2022. Please call me back</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <a class="btn btn-success" href="{{ route('admin.inquiries.index') }}"
                        data-bs-original-title="" title="">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection