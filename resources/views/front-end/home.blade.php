@extends('front-end.layout')
@section('title', $meta->meta_title)
@section('description', $meta->meta_description)
@section('keywords', $meta->meta_tags)
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="laravel ">
        <title>Home</title>
        <style>
            .banner-slider.owl-carousel.owl-loaded.owl-drag .owl-nav button.owl-next {
                right: 20px;
                top: 50%
            }

            .banner-slider.owl-carousel.owl-loaded.owl-drag .owl-nav button.owl-prev {
                left: 20px;
                top: 50%
            }

            .banner-slider.owl-carousel.owl-loaded.owl-drag .owl-nav button {
                position: absolute;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%)
            }

            .banner-slider.owl-carousel.owl-loaded.owl-drag .owl-nav button i {
                height: 36px;
                width: 36px;
                line-height: 34px;
                text-align: center;
                border: 2px solid #fff;
                color: #fff;
                font-size: 30px;
                border-radius: 50%
            }

            .main-banner {
                overflow: hidden
            }

            .main-banner .slider-item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                width: 100%;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                min-height: 670px
            }

            .main-banner .slider-item .slider-content {
                margin-left: 82px;
                margin-top: -80px
            }

            .main-banner .slider-item .slider-content h2 {
                max-width: 617px;
                font-style: normal;
                font-weight: 700;
                font-size: 80px;
                line-height: 90px;
                color: white
            }

            .main-banner .slider-item .slider-content h5 {
                font-weight: 800;
                font-size: 30px;
                line-height: 37px;
                color: #ff7f47;
                margin: 30px 0 50px
            }

            .main-banner .slider-item-1 {
                background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, rgba(48, 79, 71, 0.65)), to(rgba(48, 79, 71, 0.65))), url(../images/banners/banner-1.png);
                background: linear-gradient(rgba(48, 79, 71, 0.65) 100%, rgba(48, 79, 71, 0.65) 100%), url(../images/banners/banner-1.png);
                background-size: cover;
                background-position: center
            }

            .main-banner .slider-item-2 {
                background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, rgba(48, 79, 71, 0.65)), to(rgba(48, 79, 71, 0.65))), url(../images/banners/banner-3.png);
                background: linear-gradient(rgba(48, 79, 71, 0.65) 100%, rgba(48, 79, 71, 0.65) 100%), url(../images/banners/banner-3.png);
                background-size: cover;
                background-position: center
            }

            .main-banner .slider-item-3 {
                background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, rgba(48, 79, 71, 0.65)), to(rgba(48, 79, 71, 0.65))), url(../images/banners/banner-4.png);
                background: linear-gradient(rgba(48, 79, 71, 0.65) 100%, rgba(48, 79, 71, 0.65) 100%), url(../images/banners/banner-4.png);
                background-size: cover;
                background-position: center
            }

            .main-banner-2 {

                min-height: 794px;
                background-size: 100% 100%
            }

            .main-banner-2 .main-banner-content-2 {
                padding-top: 170px;
                text-align: center
            }

            .main-banner-2 .main-banner-content-2 h2 {
                font-style: normal;
                font-weight: 700;
                font-size: 90px;
                line-height: 110px;
                color: #fff;
                margin-bottom: 40px
            }

            .main-banner-2 .main-banner-content-2 h3 {
                font-weight: 700;
                font-size: 40px;
                line-height: 50px;
                color: #ff7f47
            }

        </style>
    </head>

    <body>
        <div class="main-banner">
            <div class="banner-slider owl-carousel">
                @foreach ($banner as $key => $item)
                    <div style="background: url({{ URL::asset('uploads/tour/' . $item->imageName) }} ) center no-repeat"
                        class="slider-item slider-item-1">
                        <div class="container">
                            <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <h2>{{ $item->tour_name }}</h2>
                                <h5>{{ $item->duration }},{{ $item->start_place }}</h5>
                                <div class="banner-btn">
                                    <a href="{{ url('package-details/') . '-' . $item->id }}" class="btn-common">Book
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>


        <div class="find-form">
            <div class="container">
                <form action="{{ route('tour-search') }}" class="findfrom-wrapper" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="text" name="keyword" placeholder="Tour keywords">
                        </div>
                        <div class="col-lg-3">
                            <div class="custom-select">
                                <select name="destination">
                                    <option value="" selected>Select Your Destination</option>
                                    @foreach ($city as $item)
                                        <option value="{{ $item->id }}">{{ $item->city_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="custom-select">
                                <select name="category">
                                    <option value="" selected>Set Tour Category</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="find-btn">
                                <input type="submit" value="Find now" class="btn-second">
                                {{-- <a href="#" class="btn-second"><i class='bx bx-search-alt'></i> Find now</a> --}}
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>


        <div class="package-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-45">
                            <h5>Choose Your Package</h5>
                            <h2>Select Your best Package For Your Travel</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($banner as $key => $row)
                        <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms"
                            data-wow-delay="0ms">
                            <div class="package-card">

                                <div class="package-thumb">
                                    <img src="{{ URL::asset('uploads/tour/' . $row->imageName) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="package-details">
                                    <div class="package-info">
                                        <h5><span>{{ $row->price }} DH</span>/Per Person</h5>
                                        <h5><i class="far fa-calendar"></i>{{ $row->duration }}</h5>
                                    </div>
                                    <h3><i class="fas fa-plane-arrival"></i>
                                        <a
                                            href="{{ url('package-details/') . '-' . $row->id }}">{{ $row->tour_name }}</a>
                                    </h3>
                                    <div class="package-rating">
                                        <strong><i class='bx bxs-star'></i><span>8K+</span> Rating</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


        <div class="destinations-area pt-105">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-40">
                            <h5>Popular Destinations</h5>
                            <h2>Select Our Best Popular Destinations</h2>
                        </div>
                    </div>
                </div>
                @foreach ($city as $key => $item)
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="package-slider-wrap">
                                <img src="assets/images/destination/d-1.png" alt="" class="img-fluid">
                                <div class="pakage-overlay">
                                    <strong>{{ $item->city_name }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="row owl-carousel destinations-1">
                                @foreach ($destination as $key => $row)
                                    <div class="package-card">
                                        <div class="package-thumb">
                                            <img src="{{ URL::asset('uploads/tour/' . $row->imageName) }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="package-details">
                                            <div class="package-info">
                                                <h5><span>{{ $row->price }} DH</span>/Per Person</h5>
                                            </div>
                                            <h3><i class="fas fa-map"></i>
                                                <a
                                                    href="{{ url('package-details/') . '-' . $row->tour_id }}">{{ $row->tour_name }}</a>
                                            </h3>
                                            <div class="package-rating">
                                                <i class='bx bxs-star'></i>
                                                <strong><span>1.3K+</span> Rating</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>


        <div class="achievement-area p-80 mt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-30">
                            <h5>Why TourX</h5>
                            <h2>Why you are travel with tourx</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                        data-wow-delay="0ms">
                        <div class="achievement-card mt-30">
                            <div class="achievement-icon">
                                <i class="fas fa-route"></i>
                            </div>
                            <h5>2000+ Our worldwide
                                guide</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                        data-wow-delay="200ms">
                        <div class="achievement-card mt-30">
                            <div class="achievement-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <h5>100% trusted travel agency</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <div class="achievement-card mt-30">
                            <div class="achievement-icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            <h5>10+ year of travel experience</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                        data-wow-delay="600ms">
                        <div class="achievement-card mt-30">
                            <div class="achievement-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <h5>90% of our traveller happy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-area mt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-40">
                            <h5>Our Traveller Say</h5>
                            <h2>What Oue Traveller Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="review-slider owl-carousel">
                    <div class="review-card ">
                        <div class="reviewer-img">
                            <img src="assets/images/reviewer/reviewer-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="reviewer-info">
                            <h3>Dina Jems</h3>
                            <h5>Traveller</h5>
                            <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                                ornare, porttitor risus nec,
                                mattis mauris. </p>
                        </div>
                    </div>
                   
                    <div class="review-card">
                        <div class="reviewer-img">
                            <img src="assets/images/reviewer/reviewer-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="reviewer-info">
                            <h3>Shwan Pull</h3>
                            <h5>Traveller</h5>
                            <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                                ornare, porttitor risus nec,
                                mattis mauris. </p>
                        </div>
                    </div>
                    <div class="review-card ">
                        <div class="reviewer-img">
                            <img src="assets/images/reviewer/reviewer-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="reviewer-info">
                            <h3>Dina Jems</h3>
                            <h5>Traveller</h5>
                            <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                                ornare, porttitor risus nec,
                                mattis mauris. </p>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="reviewer-img">
                            <img src="assets/images/reviewer/reviewer-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="reviewer-info">
                            <h3>Jahid Hassan</h3>
                            <h5>Traveller</h5>
                            <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                                ornare, porttitor risus nec,
                                mattis mauris. </p>
                        </div>
                    </div>
                    <div class="review-card">
                        <div class="reviewer-img">
                            <img src="assets/images/reviewer/reviewer-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="reviewer-info">
                            <h3>Shwan Pull</h3>
                            <h5>Traveller</h5>
                            <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                                ornare, porttitor risus nec,
                                mattis mauris. </p>
                        </div>
                    </div>
                    <div class="review-card ">
                        <div class="reviewer-img">
                            <img src="assets/images/reviewer/reviewer-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="reviewer-info">
                            <h3>Dina Jems</h3>
                            <h5>Traveller</h5>
                            <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum
                                ornare, porttitor risus nec,
                                mattis mauris. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="feature-area mt-120 p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-60">
                            <h5>Feature Tours</h5>
                            <h2>See Our Best Popular Package</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-slider owl-carousel">
                            @foreach ($latest as $last)
                                <div class="feature-card">
                                    <div class="feature-img">
                                        <img src="{{ URL::asset('uploads/tour/' . $last->imageName) }}" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <a href="{{ url('package-details/') . '-' . $last->id }}"
                                            class="title">{{ $last->tour_name }}</a>
                                        <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>
                                        <strong>{{ $last->price }} <span>$200</span></strong>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="blog-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-30">
                            <h5>Latest Blog</h5>
                            <h2>Stay Updated And new post our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs as $key => $latest)
                        <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                            data-wow-delay="0ms">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ URL::asset('uploads/blog/' . $latest->image) }}" alt=""
                                        class="img-fluid">
                                    <div class="blog-date"><i class="far fa-calendar"></i>
                                        {{ date('d M Y', $latest->created_at->timestamp) }}</div>
                                </div>
                                <div class="blog-details">
                                    <div class="blog-info">
                                        <a class="blog-writer"><i class="fas fa-user"></i>Admin</a>
                                        <a class="blog-comment"><i
                                                class="far fa-comment"></i><span>(3)</span>Comment</a>
                                    </div>
                                    <a href="{{ url('blog-details/') . '-' . $latest->id }}"
                                        class="blog-title">{{ $latest->blog_title }}</a>
                                    <div class="blog-btn">
                                        <a href="{{ url('blog-details/') . '-' . $latest->id }}"
                                            class="btn-common-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
