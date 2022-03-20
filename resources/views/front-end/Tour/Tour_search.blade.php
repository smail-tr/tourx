@extends('front-end.layout')
@section('title')
    Tour_search
@endsection
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Tour Search</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="{{ Route('home') }}">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Tour search</li>
                        </ul>
                    </div>
                </div>
            </div>
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
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <hr>
    @if (!$tours->isEmpty())
        <div class="package-area pt-120">
            <div class="container">
                <div class="row">
                    @foreach ($tours as $key => $item)
                        <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp animated" data-wow-duration="1500ms"
                            data-wow-delay="0ms">
                            <div class="package-card">
                                <div class="package-thumb">
                                    <img src="{{ URL::asset('uploads/tour/' . $item->imageName) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="package-details">
                                    <div class="package-info">
                                        <h5><span>{{ $item->price }} DH</span>/Per Person</h5>
                                        <h5><i class="far fa-calendar"></i>{{ $item->duration }}</h5>
                                    </div>
                                    <h3><i class="fas fa-plane-departure"></i>
                                        <a
                                            href="{{ url('package-details/') . '-' . $item->tour_id }}">{{ $item->tour_name }}</a>
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
    @else
        <div class="package-area pt-120">
            <div class="container">
                <div class="row">

                    <i class="fas fa-map-marked-alt"></i>
                    <p>Sorry! There are no tours matching your search.</p>
                    <p>Try changing your search filters.</p>

                </div>
            </div>
        </div>
    @endif
@endsection
