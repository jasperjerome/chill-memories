@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            
            <div class="recent-listing-area">
                <div class="d-flex justify-content-end">
                    <a href="" class="secondary-btn1 two mb-30">Create</a>
                </div>
                <h6>Co - Ordinators</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count())
                                @foreach ($data as $datas)
                                    <tr>
                                        <td>{{$datas->name}}</td>
                                        <td>{{$datas->email}}</td>
                                        <td>{{$datas->created_at->format('d-m-Y')}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection