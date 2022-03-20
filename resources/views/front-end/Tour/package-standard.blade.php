@extends('front-end.layout')
@section('title')
    package-standard
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
    <title>package-standard</title>
    </head>

    <body>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="breadcrumb-wrap">
                            <h2>Package Standard</h2>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="bx bx-chevron-right"></i>
                                </li>
                                <li>Package Standard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
        <div class="package-standard-wrapper pt-120">
            <div class="container">
                <div class="row">
                   @if (!$standard->isEmpty())
                        <div class="col-lg-8">

                            {{-- card tour --}}
                            @foreach ($standard as $row)

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="package-card-xl">
                                            <div class="package-thumb-xl">
                                                <img src="{{ URL::asset('uploads/tour/' . $row->imageName) }}" alt="image"
                                                    class="img-fluid">
                                            </div>
                                            <div class="package-details-xl">
                                                <div class="package-info">
                                                    <h5><span>{{ $row->price }}</span>/Per Person</h5>
                                                    <h5><i class="far fa-calendar"></i>{{ $row->duration }}</h5>
                                                </div>
                                                <h3><i class="fas fa-plane-departure"></i>
                                                    <a
                                                        href="{{ url('package-details/') . '-' . $row->id }}">{{ $row->tour_name }}</a>
                                                </h3>
                                                <p>{!! Str::limit($row->tour_description, 10) !!}</p>
                                                <div class="package-rating">
                                                    <strong><i class='bx bxs-star'></i><span>8K+</span> Rating</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- end card tour --}}
                            <div class="row">
                                <div class="">
                                   <div class="">
                                       {{-- {{ $standard->links() }} --}}
                                    {{-- <a href="#"><i class="bx bx-chevron-left"></i></a>
                                    <a href="#" class="active">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#"><i class="bx bx-chevron-right"></i></a> --}}
                                </div> 
                                </div>
                            </div>
                        </div>
                    @else

                        <div class="col-lg-8">

                            {{-- card tour --}}
                           

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <i class="fas fa-map-marked-alt"></i>
                                        <p>Sorry! There are no tours matching your search.</p>
                                        <p>Try changing your search filters.</p>
                                    </div>
                                </div>
                           
                            {{-- end card tour --}}

                        </div>

                    @endif


                    <div class="col-lg-4">
                        <div class="package-sidebar">
                            <div class="row">
                                <form action="{{ route('standard-package') }}" method="get">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="sidebar-searchbox">
                                            <div class="input-group search-box">
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="Search Tour..." aria-label="Recipient's username"
                                                    aria-describedby="button-addon2">
                                                <button id="search" class="btn btn-outline-secondary" type="submit"><i
                                                        class='bx bx-paper-plane'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- <div class="col-lg-12 col-md-12">
                                    <div class="sidebar-range mt-40">
                                        <h5 class="categorie-head">Price Range</h5>
                                        <div class="dual-range" data-min="20" data-max="1000">
                                            <span class="handle left"></span>
                                            <span class="highlight"></span>
                                            <span class="handle right"></span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12 col-md-6">
                                    <div class="sidebar-duration mt-40">
                                        <h5 class="categorie-head">Durations</h5>
                                        <div class="durations-option radio-box">
                                            <div class="single-option">
                                                <input type="radio" name="duration" id="duration1">
                                                <label for="duration1">0 - 24 Hour</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="duration" id="duration2">
                                                <label for="duration2">1 - 2 Days</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="duration" id="duration3">
                                                <label for="duration3">2 - 3 Days</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="duration" id="duration4">
                                                <label for="duration4">3 - 4 Days</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="duration" id="duration5">
                                                <label for="duration5">5 - 6 Days</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="sidebar-categorie mt-40">
                                        <h5 class="categorie-head">Categories</h5>
                                        <div class="durations-option radio-box">
                                            <div class="single-option">
                                                <input type="radio" name="categorie" id="categorie1">
                                                <label for="categorie1">Adventure Tour</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="categorie" id="categorie2">
                                                <label for="categorie2">City Tour</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="categorie" id="categorie3">
                                                <label for="categorie3">Group Tour</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="categorie" id="categorie4">
                                                <label for="categorie4">Couple Tour</label>
                                            </div>
                                            <div class="single-option">
                                                <input type="radio" name="categorie" id="categorie5">
                                                <label for="categorie5">Village Tour</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="sidebar-banner mt-40">
                                        <img src="assets/images/sidebar-banner.png" alt="" class="img-fluid">
                                        <div class="sidebar-banner-overlay">
                                            <div class="overlay-content">
                                                <h3>Get 50% Off
                                                    In Dubai Tour</h3>
                                                <div class="sidebar-banner-btn">
                                                    <a href="#">Book Now</a>
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
        </div>


    </body>

    </html>
@endsection
