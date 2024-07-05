@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>@foreach ($data as $policy)
                        {{$policy->title}}
                    @endforeach</h3>
                </div>
            </div>
            <div class="recent-listing-area">
                <div class="recent-listing-table table-responsive">
                    @foreach ($data as $policy)
                        {{!!$policy->desc!!}}

                        <div class="d-flex justify-content-end mt-50"><a href="{{route('app.refund_policy.edit', ['id'=>$policy->id])}}" class="primary-btn2">Edit Policy</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection