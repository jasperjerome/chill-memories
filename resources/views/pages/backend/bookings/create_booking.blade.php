@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="main-content-title-profile mb-50">
                    <div class="main-content-title">
                        <h3>Create Booking</h3>
                    </div>
                </div>
                <div class="dashboard-profile-wrapper two">
                    <div class="dashboard-profile-tab-content">
                        <form action="{{route('app.bookings.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Customer Name"
                                            value="{{ isset($data->name) ? $data->name : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>Email Address</label>
                                        <input type="text" name="email" placeholder="Customer Email Address"
                                            value="{{ isset($data->email) ? $data->email : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>Mobile Number</label>
                                        <input type="text" name="mobile" placeholder="Customer Mobile Number"
                                            value="{{ isset($data->mobile) ? $data->mobile : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>Destination</label>
                                        <input type="text" name="destination" placeholder="Destination" {{isset($data->destination) ? 'readonly' : ''}}
                                            value="{{ isset($data->destination) ? $data->destination : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>No Of Adults</label>
                                        <input type="number" name="no_of_adults" placeholder="No Of Adults"
                                            value="{{ isset($data->no_of_adults) ? $data->no_of_adults : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>No Of Children</label>
                                        <input type="number" name="no_of_children" placeholder="No Of Children"
                                            value="{{ isset($data->no_of_children) ? $data->no_of_children : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>From Date</label>
                                        <input type="date" name="from" placeholder="SEO Title"
                                            value="{{ isset($data->from) ? $data->from : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>To Date</label>
                                        <input type="date" name="to" placeholder="SEO Title"
                                            value="{{ isset($data->to) ? $data->to : '' }}">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-100">
                                    <div class="form-inner mb-30">
                                        <label>Package</label>
                                        <select name="package" id="package">
                                            <option value="">Select Package</option>
                                            @if ($packages->count())
                                                @foreach ($packages as $package)
                                                    <option value="{{$package->package_title}}">{{$package->package_title}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-inner mb-30">
                                        <label>Source</label>
                                        <input type="text" name="source" placeholder="Source">
                                    </div>
                                </div>
                            </div>
                            <div id="cab-fields-container" class="row"></div>
                            <div class="form-inner d-flex justify-content-end">
                                <button type="submit" class="primary-btn3">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
