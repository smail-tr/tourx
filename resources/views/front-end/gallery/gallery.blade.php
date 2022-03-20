@extends('front-end.layout')
@section('title')
    Gallery
@endsection
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

    <body>
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="breadcrumb-wrap">
                            <h2>Gallary</h2>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                    <i class="bx bx-chevron-right"></i>
                                </li>
                                <li>Gallary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallary-wrapper pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="gallary-colom-one">
                            <div class="gallary-grid">
                                
                                @foreach ($gal as $key=>$row)
                                    
                                
                                <a class="img-sm-1 main-gallary" href="{{ URL::asset('uploads/gallery'. $row->name) }}">
                                    <img src="{{ URL::asset('uploads/gallery'. $row->name) }}" alt="gallary-img">
                                </a>
                                @endforeach
                            </div>
                           
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
