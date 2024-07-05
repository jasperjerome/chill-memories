@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>About Us</h3>
                </div>
            </div>
            <div class="dashboard-profile-wrapper two">
                <div class="dashboard-profile-tab-content">
                    <form action="{{route('app.about_us.store')}}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Title</label>
                                    <input type="text" name="title" placeholder="Title here...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="img">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-30">
                                    <label>Description</label>
                                    <textarea name="desc" id="desc" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-inner d-flex justify-content-end">
                            <button type="submit" class="primary-btn3">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection