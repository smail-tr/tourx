@extends('front-end.layout')
@section('title')
    Destination
@endsection
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    </head>
    <title>Destinations</title>
    </head>

    <body>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="breadcrumb-wrap">
                            <h2>Destination</h2>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="bx bx-chevron-right"></i>
                                </li>
                                <li>Destination</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="destinations-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-40">
                            <h5>Choose Your Package</h5>
                            <h2>Select Your best Package For Your Travel</h2>
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
                                            <h3><i class="far fa-plane"></i>
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
                    <br>
                @endforeach


                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination mt-30">
                            <a href="#"><i class="bx bx-chevron-left"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#"><i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </body>

    </html>
@endsection
