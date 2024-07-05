@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>@foreach Contact Us</h3>
                </div>
            </div>
            <div class="recent-listing-area">
                <div class="recent-listing-table table-responsive">
                    <table class="table">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($data as $datas)
                            <tr>
                                <td>{{$datas->mobile}}</td>
                                <td>{{$datas->email}}</td>
                                <td>{{$datas->address}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection