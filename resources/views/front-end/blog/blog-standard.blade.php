@extends('front-end.layout')
@section('title')
    BLOG|Tourx :Discover Morocco
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
    <title>Blog-standard</title>
    </head>
    {{-- body --}}
    <div class="breadcrumb-area">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Blog Standard</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Blog Standard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <body>
        <div class="blog-standard-wrapper pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="row">

                            @if (!$blog->isEmpty())
                                <h4 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                                    {{ $blog->count() }} Result</h4>
                                @foreach ($blog as $key => $item)
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="blog-card-xl">
                                            <div class="blog-img">
                                                <img src="{{ URL::asset('uploads/blog/' . $item->image) }}" alt=""
                                                    class="img-fluid">
                                                <div class="blog-date"><i class="far fa-calendar"></i>
                                                    {{ date('d M Y - H:i:s', $item->created_at->timestamp) }}</div>
                                            </div>
                                            <div class="blog-details">
                                                <div class="blog-info">
                                                    <a class="blog-writer" href="#"><i class="far fa-user"></i>Dina
                                                        Jems</a>
                                                    <a class="blog-comment" href="#"><i class="far fa-comments"></i><span></span>Comment</a>
                                                </div>
                                                <a href="{{ url('blog-details/') . '-' . $item->id }}"
                                                    class="blog-title">{{ $item->title }}</a>
                                                <p class="blog-discription">
                                                    {!! Str::limit($item->description, 30) !!}
                                                </p>
                                                <div class="blog-btn">
                                                    <a href="{{ url('blog-details/') . '-' . $item->id }}"
                                                        class="btn-common-sm">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                                    {{ $blog->count() }} Result</h5>
                                <br><br>
                                <p class="bg-danger text-white p-1"> no match result</p>


                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="pagination mt-40">
                                    {{-- {{ $blog->links() }} --}}
                                    {{-- <a href="#"><i class="bx bx-chevron-left"></i></a>
                                    <a href="#" class="active">1</a>

                                    <a href="#"><i class="bx bx-chevron-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="blog-sidebar mt-30">
                            <form action="{{ route('standard-blog') }}" method="GET">
                                @csrf
                                <div class="sidebar-searchbox">
                                    <div class="input-group search-box">
                                        <input name="search" type="text" class="form-control" placeholder="Search Tour..."
                                            aria-label="Recipient's username">
                                        <button type="submit" class="btn btn-outline-secondary"><i
                                                class='bx bx-paper-plane'></i></button>
                                    </div>

                                </div>
                            </form>
                            <div class="row">
                                <form id="myform" name="myform" action="{{ route('standard-blog') }}" method="GET">
                                    @csrf
                                    <div class="col-lg-12 col-md-12">
                                        <div class="blog-categorie mt-40">
                                            <h5 class="categorie-head">Categories</h5>
                                            <ul>
                                                @foreach ($category as $cat)
                                                    <li>
                                                        <a id="category" href="javascript: submit();"><i
                                                                class='bx bxs-chevrons-right'></i>{{ $cat->name }}</a>
                                                            {{-- <button type="submit" name="category">{{ $cat->name }}</button>
                                                         {{-- <input name="category" class='bx bxs-chevrons-right'  type="button" value="{{ $cat->name }}"> --}}
                                                                
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12 col-md-12">
                                    <div class="blog-popular mt-40">
                                        <h5 class="categorie-head">Popular Post</h5>
                                        <ul>
                                            @foreach ($pop as $key => $row)
                                                <li class="blog-card-sm">
                                                    <div class="blog-img-sm">
                                                        <img src="{{ URL::asset('uploads/blog/' . $row->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="blog-details-sm">
                                                        <a href="{{ url('blog-details/') . '-' . $row->id }}"
                                                            class="blog-title-sm">{{ $row->title }}</a>
                                                        <div class="blog-info">
                                                            <a class="blog-writer">
                                                                <i class="far fa-user"></i>
                                                                smail trioua
                                                            </a>
                                                            <a  class="blog-date"> <i
                                                                    class="far fa-calendar"></i>  {{ date('d M Y - H:i:s', $row->created_at->timestamp) }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="blog-tag mt-40">
                                        <h5 class="categorie-head">Tag Tour</h5>
                                        <ul>
                                            <li><a href="#">Adventure</a></li>
                                            <li><a href="#">Trip</a></li>
                                            <li><a href="#">Guided</a></li>
                                            <li><a href="#">Historical</a></li>
                                            <li><a href="#">Road Trips</a></li>
                                            <li><a href="#">Tourist</a></li>
                                            <li><a href="#">Tourist</a></li>
                                            <li><a href="#">Selivia</a></li>
                                            <li><a href="#">Tour Guide</a></li>
                                            <li><a href="#">Cultural</a></li>
                                            <li><a href="#">Natural</a></li>
                                            <li><a href="#">Journey</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="sidebar-banner mt-40">
                                        <img src="assets/images/sidebar-banner.png" alt="" class="img-fluid">
                                        <div class="sidebar-banner-overlay">
                                            <div class="sidebar-content">
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

        {{-- <script type='text/javascript'>
            function submit() {
                document.forms["myform"].submit();
            }
        </script> --}}
    </body>

    </html>
@endsection
