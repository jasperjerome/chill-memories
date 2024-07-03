@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" />

    <style>
        .form-control {
            width: auto !important;
        }

        .bg-paid {
            background-color: green;
            color: white;
        }

        .bg-unpaid {
            background-color: red;
            color: white;
        }

        .bg-voucher-created {
            background-color: blue;
            color: white;
        }

        .bg-voucher-sent {
            background-color: purple;
            color: white;
        }

        .bg-pending {
            background-color: orange;
            color: white;
        }

        .bg-closed {
            background-color: gray;
            color: white;
        }

        .bg-cancelled {
            background-color: black;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-xl-12">

                <div class="recent-listing-area">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('app.bookings.create_booking') }}" class="secondary-btn1 two mb-30">Create</a>
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
                                    <th>Trip Status</th>
                                    <th width="60%">Actions</th>
                                </tr>
                            </thead>
                            @if ($data->count())
                                @foreach ($data as $datas)
                                    <tr>
                                        <td>{{ $datas->user->name }}</td>
                                        <td>{{ $datas->email }}</td>
                                        <td>{{ $datas->mobile }}</td>
                                        <td>{{ $datas->destination }}</td>
                                        <td>{{ $datas->no_of_adults }}Adults {{ $datas->no_of_children }}Children</td>
                                        <td>{{ $datas->package->package_title }}</td>
                                        <td>{{ $datas->from }}</td>
                                        <td>{{ $datas->to }}</td>
                                        <td>{{ $datas->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <select name="payment_status" id="payment_status"
                                                class="form-control payment-status" data-id="{{ $datas->id }}">
                                                <option value="paid"
                                                    {{ $datas->payment_status == 'paid' ? 'selected' : '' }}>paid</option>
                                                <option value="unpaid"
                                                    {{ $datas->payment_status == 'unpaid' ? 'selected' : '' }}>unpaid
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="voucher_status" id="voucher_status"
                                                class="form-control voucher-status" data-id="{{ $datas->id }}">
                                                <option value="voucher created"
                                                    {{ $datas->voucher_status == 'voucher created' ? 'selected' : '' }}>
                                                    voucher created</option>
                                                <option value="voucher sent"
                                                    {{ $datas->voucher_status == 'voucher sent' ? 'selected' : '' }}>
                                                    voucher
                                                    sent</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="trip_status" id="trip_status" class="form-control trip-status"
                                                data-id="{{ $datas->id }}">
                                                <option value="pending"
                                                    {{ $datas->trip_status == 'pending' ? 'selected' : '' }}>pending
                                                </option>
                                                <option value="closed"
                                                    {{ $datas->trip_status == 'closed' ? 'selected' : '' }}>closed</option>
                                                <option value="cancelled"
                                                    {{ $datas->trip_status == 'cancelled' ? 'selected' : '' }}>cancelled
                                                </option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('app.bookings.create_voucher', ['id' => $datas->id]) }}"
                                                    class="primary-btn2">Create Voucher</a>
                                                <a href="{{ route('app.booking_details', ['id' => $datas->id]) }}"
                                                    class="primary-btn2 mx-3">View Voucher</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
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
        $(document).ready(function() {
            $('#myTable').DataTable({
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }]
            });


            // payment status, voucher status, trip status ajax
            function updateStatus(id, field, value) {
                $.ajax({
                    url: 'booking/update_booking_status/',
                    method: 'post',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: id,
                        field: field,
                        value: value,
                    },
                    success: function(response) {
                        console.log('Response:', response);
                        if (response.success) {
                            alert('status updated successfully');
                        } else {
                            alert('failed to update status');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('An error occurred:', error);
                        console.error('Status:', status);
                        console.error('Response:', xhr.responseText);
                    }
                })
            }

            // change select tag background color based on selected values
            function updateSelectBackground(selectElement) {
                selectElement.removeClass(
                    'bg-paid bg-unpaid bg-voucher-created bg-voucher-sent bg-pending bg-closed bg-cancelled');

                var value = selectElement.val();
                if (value === 'paid') {
                    selectElement.addClass('bg-paid');
                } else if (value === 'unpaid') {
                    selectElement.addClass('bg-unpaid');
                } else if (value === 'voucher created') {
                    selectElement.addClass('bg-voucher-created');
                } else if (value === 'voucher sent') {
                    selectElement.addClass('bg-voucher-sent');
                } else if (value === 'pending') {
                    selectElement.addClass('bg-pending');
                } else if (value === 'closed') {
                    selectElement.addClass('bg-closed');
                } else if (value === 'cancelled') {
                    selectElement.addClass('bg-cancelled');
                }
            }

            $('.payment-status, .voucher-status, .trip-status').each(function() {
                updateSelectBackground($(this));
            });

            $('.payment-status').change(function() {
                var id = $(this).data('id');
                var status = $(this).val();
                updateStatus(id, 'payment_status', status);
                updateSelectBackground($(this));
            });

            $('.voucher-status').change(function() {
                var id = $(this).data('id');
                var status = $(this).val();
                updateStatus(id, 'voucher_status', status);
                updateSelectBackground($(this));
            });

            $('.trip-status').change(function() {
                var id = $(this).data('id');
                var status = $(this).val();
                updateStatus(id, 'trip_status', status);
                updateSelectBackground($(this));
            });
        });
    </script>
@endsection
