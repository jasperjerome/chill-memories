@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="main-content-title-profile mb-50">
                    <div class="main-content-title">
                        <h3>Create Voucher</h3>
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
                                        <input type="text" name="package_title" placeholder="Customer Name"
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
                                        <input type="text" name="destination" placeholder="Destination" readonly
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
                                <div class="col-md-4">
                                    <div class="form-inner mb-30">
                                        <label>Pickup From</label>
                                        <input type="text" name="to" placeholder="Puckup Location" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-inner mb-30">
                                        <label>Drop To</label>
                                        <input type="text" name="to" placeholder="Drop Location" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-inner mb-30">
                                        <label>Assign Co-ordinator</label>
                                        <select name="user_id" id="">
                                            <option value="">Select Co-ordinator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-inner mb-30">
                                            <label>Hotel Location</label>
                                            <input type="text" name="hotel_location[]" placeholder="Enter Hotel Location"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-inner mb-30">
                                            <label>Hotel Name</label>
                                            <input type="text" name="hotel_name[]" placeholder="Enter Hotel Name"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-inner mb-30">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <label>Food</label>
                                                    <input type="text" name="food[]" placeholder="Enter Food"
                                                        value="">
                                                </div>
                                                <div>
                                                    <label class="opacity-0">Add</label>
                                                    <a href="javascript:void(0);" id="add-hotel-button">Add</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="hotel-fields-container"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-inner mb-30">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <label>Cab</label>
                                            <input type="text" name="cab[]" placeholder="Enter Cab" value="">
                                        </div>
                                        <div>
                                            <label class="opacity-0">Cab</label>
                                            <a href="javascript:void(0);" id="add-cab-button">Add</a>
                                        </div>
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
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to add a new cab field
            document.getElementById('add-cab-button').addEventListener('click', function() {
                let cabFieldsContainer = document.getElementById('cab-fields-container');

                let newField = document.createElement('div');
                newField.classList.add('form-inner', 'mb-30', 'col-3');
                newField.innerHTML = `
            <div>
                <label>Cab</label>
                <input type="text" name="cab[]" placeholder="Enter Cab" value="">
            </div>
            <div>
                <label class="opacity-0">Cab</label>
                <a href="javascript:void(0);" class="remove-cab-button">Remove</a>
            </div>
        `;

                cabFieldsContainer.appendChild(newField);

                // Add event listener to the remove button
                newField.querySelector('.remove-cab-button').addEventListener('click', function() {
                    newField.remove();
                });
            });

            // Function to add a new hotel field group
            document.getElementById('add-hotel-button').addEventListener('click', function() {
                let hotelFieldsContainer = document.getElementById('hotel-fields-container');

                let newHotelGroup = document.createElement('div');
                newHotelGroup.classList.add('row', 'mb-30');
                newHotelGroup.innerHTML = `
            <div class="col-12 col-md-4">
                <div class="form-inner">
                    <label>Hotel Location</label>
                    <input type="text" name="hotel_location[]" placeholder="Enter Hotel Location" value="">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-inner">
                    <label>Hotel Name</label>
                    <input type="text" name="hotel_name[]" placeholder="Enter Hotel Name" value="">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-inner d-flex justify-content-between align-items-center">
                    <div>
                        <label>Food</label>
                        <input type="text" name="food[]" placeholder="Enter Food" value="">
                    </div>
                    <div>
                        <label class="opacity-0">Remove</label>
                        <a href="javascript:void(0);" class="remove-hotel-button">Remove</a>
                    </div>
                </div>
            </div>
        `;

                hotelFieldsContainer.appendChild(newHotelGroup);

                // Add event listener to the remove button
                newHotelGroup.querySelector('.remove-hotel-button').addEventListener('click', function() {
                    newHotelGroup.remove();
                });
            });
        });
    </script>
@endsection
