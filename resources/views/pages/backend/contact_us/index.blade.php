@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3> Contact Us</h3>
                </div>
            </div>
            <div class="recent-listing-area">
                <div class="recent-listing-table table-responsive">
                    <table class="table">
                        <tr>
                            <th>Mobile</th>
                            <th>email</th>
                            <th>address</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $datas)
                            <tr>
                                <td>{{$datas->mobile}}</td>
                                <td>{{$datas->email}}</td>
                                <td>{{$datas->address}}</td>
                                <td><a href="{{route('app.contact_us.edit', ['id'=>$datas->id])}}" class="primary-btn2">Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection