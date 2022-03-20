@extends('front-end.layout')
@section('title')
    TourX|About us
@endsection
@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>About Us</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-wrapper mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="about-wrapper-left">
                        <div class="about-img wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src=" {{ URL::asset('uploads/about_us/'.$about->image) }} " alt="" class="img-fluid">
                        </div>
                        <div class="about-video wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <img src="assets/images/about-1.png" alt="" class="img-fluid">
                            <a class="video-icon" href="https://youtu.be/-tJYN-eG1zk"><i
                                    class="flaticon-play-button-arrowhead"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="about-wrapper-right section-head head-left">
                        <h5>About TourX</h5>
                        <h2>{{ $about->title }}</h2>
                        <p>{{ $about->description }}</p>
                        
                        <div class="about-wrapper-btn">
                            <a href="#" class="btn-common">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h5>200+ Our worldwide
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
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
                        <p>Fusce aliquam luctus est, eget tincidunt velit scelerisque rhoncus. Aliquam lacinia ipsum ornare,
                            porttitor risus nec,
                            mattis mauris. </p>
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
                            <img src="{{ URL::asset('uploads/blog/' . $latest->image) }}" alt="" class="img-fluid">
                            <div class="blog-date"><i class="far fa-calendar"></i>{{ date('d M Y', $latest->created_at->timestamp) }}</div>
                        </div>
                        <div class="blog-details">
                            <div class="blog-info">
                                <a class="blog-writer" ><i class="far fa-user"></i>Admin</a>
                                <a class="blog-comment" ><i
                                        class="far fa-comment"></i><span>(3)</span>Comment</a>
                            </div>
                            <a href="{{ url('blog-details/') . '-' . $latest->id }}" class="blog-title">{{ $latest->title }}</a>
                            <div class="blog-btn">
                                <a href="{{ url('blog-details/') . '-' . $latest->id }}" class="btn-common-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
               @endforeach
            </div>
        </div>
    </div>
    

@endsection
