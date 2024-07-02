@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            
            <div class="recent-listing-area">
                <div class="d-flex justify-content-end">
                    <a href="{{route('app.bookings.create_booking')}}" class="secondary-btn1 two mb-30">Create</a>
                </div>
                <h6>All Bookings</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Destination</th>
                                <th>Persons</th>
                                <th>Package</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Date & Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @if ($data->count())
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{$datas->name}}</td>
                                    <td>{{$datas->email}}</td>
                                    <td>{{$datas->mobile}}</td>
                                    <td>{{$datas->destination}}</td>
                                    <td>{{$datas->no_of_adults}}Adults {{$datas->no_of_children}}Children</td>
                                    <td>{{$datas->package}}</td>
                                    <td>{{$datas->from}}</td>
                                    <td>{{$datas->to}}</td>
                                    <td>{{$datas->created_at->format('d-m-Y')}}</td>
                                    <td><a href="#!" class="btn btn-primary">Create Voucher</a></td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="10" style="text-align: center;">No Datas Found</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection