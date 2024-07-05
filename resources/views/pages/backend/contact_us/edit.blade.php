@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>Add Destination</h3>
                </div>
            </div>
            <div class="dashboard-profile-wrapper two">
                <div class="dashboard-profile-tab-content">
                    <form action="{{route('app.contact_us.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data"> 
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Mobile</label>
                                    <input type="text" name="Mobile" value="{{$data->mobile}}" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" placeholder="Title here...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>address</label>
                                    <input type="text" name="address" value="{{$data->address}}" placeholder="Title here...">
                                </div>
                            </div>
                        </div>
                        <div class="form-inner d-flex justify-content-end mb-70">
                            <button type="submit" class="primary-btn3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection