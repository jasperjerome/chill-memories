@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>Add Itinerary</h3>
                </div>
            </div>
            <div class="dashboard-profile-wrapper two">
                <div class="dashboard-profile-tab-content">
                    <form action="{{route('app.ad.store')}}" id="ad-post-form" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-30">
                                    <label>Ad Title</label>
                                    <input type="text" name="title" id="title" placeholder="Itinerary Title">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="form-inner">
                                    <label>Ad Post</label>
                                    <input type="file" name="ad_img" id="ad_img" class="form-control">
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