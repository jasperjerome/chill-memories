@extends('layouts.guest')

@section('content')
<div class="breadcrumb-section"
style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="banner-content">
                <h1>Destination</h1>
                <ul class="breadcrumb-list">
                    <li><a href="index.html" class="breadcrumb_link">Home</a></li>
                    <li>Destination</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div class="destination-section pt-120 mb-120">
<div class="container">
    <div class="row g-lg-4 gy-5 mb-70">
        @if ($destinations->count())
            @foreach ($destinations as $destination)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="destination-card2">
                    <a href="destination-details.html" class="destination-card-img"><img
                            src="{{asset('assets/uploads/feature_imgs/' .$destination->feature_img)}}" alt=""></a>
                    {{-- <div class="batch">
                        <span>5 Tour</span>
                    </div> --}}
                    <div class="destination-card2-content">
                        <span>Travel To</span>
                        <h4><a href="destination-details.html">{{$destination->title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <h1 class="text-center">No Destinations Found</h1>
        @endif
    </div>
    <div class="row d-none">
        <div class="col-lg-12">
            <nav class="inner-pagination-area">
                <ul class="pagination-list">
                    <li>
                        <a href="#" class="shop-pagi-btn"><i class="bi bi-chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#" class="active">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-three-dots"></i></a>
                    </li>
                    <li>
                        <a href="#">6</a>
                    </li>
                    <li>
                        <a href="#" class="shop-pagi-btn"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
@endsection