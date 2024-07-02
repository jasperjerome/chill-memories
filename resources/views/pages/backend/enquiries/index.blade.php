@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            
            <div class="recent-listing-area">
                <div class="d-flex justify-content-end">
                    <a href="#!" class="secondary-btn1 two mb-30">Create</a>
                </div>
                <h6>All Enquiries</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Destination</th>
                                <th>Trip Date</th>
                                <th>Persons</th>
                                <th>Date & Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($data->count())
                            @foreach ($data as $enquiry)
                                <tr>
                                    <td>{{$enquiry->user->name}}</td>
                                    <td>{{$enquiry->email}}</td>
                                    <td>{{$enquiry->mobile}}</td>
                                    <td>{{$enquiry->destination}}</td>
                                    <td>24-11-2001</td>
                                    <td>2 adults 2 children</td>
                                    <td>{{$enquiry->created_at->format('d-m-Y')}}</td>
                                    <td><a href="{{route('app.bookings.create_booking_for_enquired', ['id'=>$enquiry->id])}}" class="primary-btn2">Create Booking</a></td>
                                </tr>
                            @endforeach
                        @else
                        <tr><td colspan="8" style="text-align: center;">No Enquiries Found</td></tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection