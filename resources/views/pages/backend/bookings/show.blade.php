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
                        {{-- <a href="{{ route('app.bookings.create_booking') }}" class="secondary-btn1 two mb-30">Create</a> --}}
                    </div>
                    <h6>Booking Details</h6>
                    <p>Customer Name: {{$data->user->name}}</p>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td>Number Of Pax</td>
                            <td colspan="2">{{$data->no_of_adults}} Adults - {{$data->no_of_children}} Children</td>
                        </tr>
                        <tr>
                            <td>Tour Date</td>
                            <td colspan="2">{{$data->from}} - {{$data->to}}</td>
                        </tr>
                        @foreach ($hotel_locations as $index => $locaiton)
                        <tr>
                            <td>{{ $hotel_locations[$index] }}</td>
                            <td>{{ $hotel_names[$index] }}</td>
                            <td>{{ $others[$index] ?? '' }}</td>
                        </tr>
                        @endforeach
                        @foreach ($cabs as $index => $cab)
                        <tr>
                            <td>cab</td>
                            <td colspan="2">{{ $cab }}</td>
                            {{-- <td>ac</td> --}}
                        </tr>
                        @endforeach
                        <tr>
                            <td>Pickup from</td>
                            <td>{{$data->voucher->pickup_from}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Drop To</td>
                            <td>{{$data->voucher->drop_to}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tour Co-Ordinator</td>
                            <td colspan="2">{{$data->voucher->user->name}}</td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-end"><a href="#!" class="primary-btn2">Send Voucher</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }]
            });
        });
    </script>
@endsection
