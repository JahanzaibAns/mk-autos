@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <h3>Manage Car Discount </h3>
                    <span style="color: #ED8413"><strong> To Clear discount price select car and empty discounted fields</strong></span>
                    <form action="" method="POST">
                        @csrf
                        <div class="row mt-3 align-items-center">
                            <div class="col-md-2 col-6 mb-3">
                                <label for="Car">Select Car</label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <div class="select-dropdown">
                                    <select class="form-control" id="select_car" name="select_car">
                                        <option value="">Select Car</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2 col-6">
                            </div>
                            <div class="col-md-4 col-6">
                            </div>
    
                            <div class="col-md-2 col-6 mb-3">
                                <label for="current_price">Current Per Day Price </label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <input class="form-control" type="number"  id="daily_current_price" name="daily_current_price" disabled>
                            </div>
    
                            <div class="col-md-2 col-6 mb-3">
                                <label for="discount_price">Enter Discounted Per Day Price</label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <input class="form-control" type="number"  id="daily_discount_price" name="daily_discount_price">
    
                            </div>
                            <div class="col-md-2 col-6 mb-3">
                                <label for="current_week_price">Current Weekly Price </label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <input class="form-control" type="number"  id="current_weekly_price" name="current_weekly_price" disabled>
                            </div>
    
                            <div class="col-md-2 col-6 mb-3">
                                <label for="discount_price">Enter Weekly Discount Price</label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <input class="form-control" type="number"  id="weekly_discount_price" name="weekly_discount_price">
    
                            </div>
    
                            <div class="col-md-2 col-6 mb-3">
                                <label for="current_monthly_price">Current Monthly Price </label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <input class="form-control" type="number"  id="current_monthly_price" name="current_monthly_price" disabled>
                            </div>
    
                            <div class="col-md-2 col-6 mb-3">
                                <label for="monthly_discount_price">Enter Monthly Discount Price</label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <input class="form-control" type="number"  id="monthly_discount_price" name="monthly_discount_price">
    
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-gradient mt-3 w-fit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 d-none">
                <div class="card p-4">
                    <h3>Feature Car Listing </h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="mt-3">
                            <div class="col-md-4 col-12">
                                <label for="version">Select Car </label>
                            </div>
                            <div class="col-md-4 col-6 mb-3">
                                <div class="select-dropdown">
                                    <select class="form-control" id="featurelist" name="car">
                                    
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient mt-3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
