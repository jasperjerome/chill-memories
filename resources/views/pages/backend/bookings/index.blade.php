@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" />

    <style>
        .form-control {
            width: auto !important;
        }
    </style>
@endsection

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
                    <table class="" id="myTable">
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
                                <th>Payment Status</th>
                                <th>Voucher Status</th>
                                <th width="60%">Actions</th>
                            </tr>
                        </thead>
                        @if ($data->count())
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{$datas->user->name}}</td>
                                    <td>{{$datas->email}}</td>
                                    <td>{{$datas->mobile}}</td>
                                    <td>{{$datas->destination}}</td>
                                    <td>{{$datas->no_of_adults}}Adults {{$datas->no_of_children}}Children</td>
                                    <td>{{$datas->package->package_title}}</td>
                                    <td>{{$datas->from}}</td>
                                    <td>{{$datas->to}}</td>
                                    <td>{{$datas->created_at->format('d-m-Y')}}</td>
                                    <td>
                                        <select name="" id="" class="form-control">
                                            <option value="">paid</option>
                                            <option value="">unpaid</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="" id="" class="form-control">
                                            <option value="">voucher created</option>
                                            <option value="">vouvher sent</option>
                                        </select>
                                    </td>
                                    <td width="60%"><a href="{{route('app.bookings.create_voucher', ['id'=>$datas->id])}}" class="primary-btn2">Create Voucher</a></td>
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
@section('script')
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
@endsection