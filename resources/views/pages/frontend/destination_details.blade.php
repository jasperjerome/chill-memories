@extends('layouts.guest')

@section('content')
<div class="breadcrumb-section"
style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url({{asset('assets/uploads/breadcrumb_imgs/' .$data->breadcrumb_img)}});">
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="banner-content">
                <h1>{{$data->title}}</h1>
                <ul class="breadcrumb-list">
                    <li><a href="index.html" class="breadcrumb_link">Home</a></li>
                    <li><a href="index.html" class="nav-link">Destinations</a></li>
                    <li>{{$data->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div class="destination-details-wrap mb-120 pt-120">
<div class="container">
    <div class="row g-lg-4 gy-5">
        <div class="col-lg-8">
            <h2>Welcome To {{$data->title}}</h2>
            <p>{{$data->desc}}</p>
            <div class="destination-gallery mb-40 mt-40">
                <div class="row g-4">
                    @foreach (json_decode($data->images) as $image)
                    <div class="col-lg-4 col-sm-6">
                        <div class="gallery-img-wrap">
                            <img src="{{asset('assets/uploads/destination_imgs/' .$image)}}" alt="">
                            <a data-fancybox="gallery-01" href="{{asset('assets/uploads/destination_imgs/' .$image)}}"><i
                                    class="bi bi-eye"></i> Discover Island</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{!! $data->long_desc !!}}
        </div>
        <div class="col-lg-4">
            <div class="destination-sidebar">
                <div class="destination-info mb-30 d-none">
                    <div class="single-info">
                        <span>Destination:</span>
                        <h5>Egypt</h5>
                    </div>
                    <div class="single-info">
                        <span>Population:</span>
                        <h5>90.5 million</h5>
                    </div>
                    <div class="single-info">
                        <span>Capital City:</span>
                        <h5>Cairo</h5>
                    </div>
                    <div class="single-info">
                        <span>Language:</span>
                        <h5>Egyptian Arabic</h5>
                    </div>
                    <div class="single-info">
                        <span>Currency:</span>
                        <h5>Egyptian pound</h5>
                    </div>
                </div>
                <div class="banner2-card four">
                    <img src="{{asset('assets/img/home1/banner2-card-img2.png')}}" alt="">
                    <div class="banner2-content-wrap">
                        <div class="banner2-content">
                            <span>Savings worldwide</span>
                            <h3>50% Off</h3>
                            <p>For Your First Book</p>
                        </div>
                        <a href="package-grid.html" class="primary-btn1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="destination-location-gallery mb-120 d-none">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Egypt City Location.</h3>
        </div>
        <div class="col-lg-12 mb-60">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="location1-tab" data-bs-toggle="pill"
                        data-bs-target="#location1" type="button" role="tab" aria-controls="location1"
                        aria-selected="true">Cox’s Bazar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location2-tab" data-bs-toggle="pill"
                        data-bs-target="#location2" type="button" role="tab" aria-controls="location2"
                        aria-selected="false">Sajek Vally</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location3-tab" data-bs-toggle="pill"
                        data-bs-target="#location3" type="button" role="tab" aria-controls="location3"
                        aria-selected="false">Saint Martin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location4-tab" data-bs-toggle="pill"
                        data-bs-target="#location4" type="button" role="tab" aria-controls="location4"
                        aria-selected="false">Bandar ban</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location5-tab" data-bs-toggle="pill"
                        data-bs-target="#location5" type="button" role="tab" aria-controls="location5"
                        aria-selected="false">Khagrachori</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location6-tab" data-bs-toggle="pill"
                        data-bs-target="#location6" type="button" role="tab" aria-controls="location6"
                        aria-selected="false">Sea Beach</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="location1" role="tabpanel">
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-06.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-01.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-01.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-02.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-02.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-03.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-03.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-04.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-04.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-05.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-05.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="location2" role="tabpanel">
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-06.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-01.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-01.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-02.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-02.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-03.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-03.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-04.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-04.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-05.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-05.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="location3" role="tabpanel">
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-06.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-01.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-01.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-02.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-02.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-03.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-03.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-04.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-04.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-05.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-05.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="location4" role="tabpanel">
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-06.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-01.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-01.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-02.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-02.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-03.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-03.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-04.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-04.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-05.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-05.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="location5" role="tabpanel">
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-06.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-01.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-01.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-02.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-02.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-03.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-03.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-04.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-04.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-05.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-05.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="location6" role="tabpanel">
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-06.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-06.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-01.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-01.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-02.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-02.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-03.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-03.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-04.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-04.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/innerpage/gallery-05.jpg" alt="">
                                    <a data-fancybox="gallery-01" href="assets/img/innerpage/gallery-05.jpg"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="recommendated-package-area mb-120">
<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-30 d-flex align-items-center justify-content-between">
            <div class="desti-title">
                <h3>{{$data->title}} Package</h3>
            </div>
            <div class="slider-btn-grp2 width-100">
                <div class="slider-btn package-card-tab-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewbox="0 0 9 17">
                        <path
                            d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z">
                        </path>
                    </svg>
                </div>
                <div class="slider-btn package-card-tab-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewbox="0 0 9 17"
                        fill="none">
                        <path
                            d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-lg-12  mb-50">
            <div class="swiper package-card-tab-slider">
                <div class="swiper-wrapper">
                    @if ($data->packages->count())
                        @foreach ($data->packages as $package)
                        <div class="swiper-slide">
                            <div class="package-card">
                                <div class="package-card-img-wrap">
                                    <a href="{{route('package_details', ['id'=>$package->id])}}" class="card-img"><img
                                            src="{{asset('assets/uploads/feature_imgs/' .$package->feature_img)}}" alt=""></a>
                                    <div class="batch">
                                        <span class="date">{{$package->days}} Days / {{$package->nights}} Nights</span>
                                        <div class="location">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewbox="0 0 18 18">
                                                <path
                                                    d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                </path>
                                            </svg>
                                            <ul class="location-list">
                                                <li><a href="{{route('destination_details', ['id'=>$data->id])}}">{{$data->title}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-card-content">
                                    <div class="card-content-top">
                                        <h5><a href="{{route('package_details', ['id'=>$package->id])}}">{{$package->package_title}}</a></h5>
                                        {{-- <div class="location-area">
                                            <ul class="location-list">
                                                <li><a href="package-grid.html">Mecca</a></li>
                                                <li><a href="package-grid.html">Medina</a></li>
                                                <li><a href="package-grid.html">Riyadh</a></li>
                                                <li><a href="package-grid.html">Doha</a></li>
                                                <li><a href="package-grid.html">Al Wakrah</a></li>
                                                <li><a href="package-grid.html">Al Rayyan</a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    <div class="card-content-bottom">
                                        <div class="price-area">
                                            <h6>Starting Form:</h6>
                                            <span>{{$package->cost}}</span>
                                            <p>TAXES INCL/PERS</p>
                                        </div>
                                        <a href="package-details.html" class="primary-btn2">Book a Trip
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewbox="0 0 18 18" fill="none">
                                                <path
                                                    d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                </path>
                                                <path
                                                    d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <h1 class="text-center">No Packages Found</h1>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <a href="package-grid.html" class="secondary-btn4">View All Package</a>
        </div>
    </div>
</div>
</div>
@endsection