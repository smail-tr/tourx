@extends('front-end.layout')
@section('title')
    package-details
@endsection

@section('content')
    @include('sweetalert::alert')

    <!DOCTYPE html>
    <html lang="en">

    <head>

    </head>

    <body>

        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="breadcrumb-wrap">
                            <h2>Tour Package Details</h2>
                            <ul class="breadcrumb-links">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="bx bx-chevron-right"></i>
                                </li>
                                <li>Package Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="package-details-wrapper pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="package-details">
                            <div class="package-thumb">
                                <img src="{{ URL::asset('uploads/tour/' . $details->imageName) }}" alt="image">
                            </div>
                            <div class="package-header">
                                <div class="package-title">
                                    <h3>{{ $details->tour_name }}</h3>
                                    <strong><i class="fas fa-map-marker-alt"></i>
                                        {{ $details->city_name }}
                                    </strong>
                                </div>
                                <div class="pd-review">
                                    <p>Excellent</p>
                                    <ul>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bxs-star'></i></li>
                                        <li><i class='bx bx-star'></i></li>
                                    </ul>
                                    <p>800 Review</p>
                                </div>
                            </div>
                            <div class="p-short-info">
                                <div class="single-info">
                                    <i class="far fa-clock"></i>
                                    <div class="info-texts">
                                        <strong>Duration</strong>
                                        <p>{{ $details->duration }} /hours</p>
                                    </div>
                                </div>
                                <div class="single-info">
                                    <i class="fas fa-city"></i>
                                    <div class="info-texts">
                                        <strong>Tour City</strong>
                                        <p>{{ $details->start_place }}</p>
                                    </div>
                                </div>

                                <div class="single-info">
                                    <i class="fas fa-language"></i>
                                    <div class="info-texts">
                                        <strong>Languages</strong>
                                        <p>Any Language</p>
                                    </div>
                                </div>
                            </div>
                            <div class="package-tab">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                            aria-selected="true"><i class="fas fa-info"></i>
                                            Information</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><i
                                                class="fas fa-clipboard-list"></i>
                                            Travel Plan</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false"> <i
                                                class="fas fa-images"></i>
                                            Our Gallary</button>
                                    </li>
                                </ul>
                                <div class="tab-content p-tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content-1">
                                                    <div class="p-overview">

                                                        <p>{!! $details->tour_description !!}</p>
                                                    </div>


                                                    <div class="p-rationg">
                                                        <h5>Rating</h5>
                                                        <div class="rating-card">
                                                            <div class="r-card-avarag">
                                                                <h2>4.9</h2>
                                                                <h5>Excellent</h5>
                                                            </div>
                                                            <div class="r-card-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Accommodation</strong>
                                                                        <ul class="r-rating">
                                                                            <li>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Transport</strong>
                                                                        <ul class="r-rating">
                                                                            <li>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Comfort</strong>
                                                                        <ul class="r-rating">
                                                                            <li>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Hospitality</strong>
                                                                        <ul class="r-rating">
                                                                            <li>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Food</strong>
                                                                        <ul class="r-rating">
                                                                            <li>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bxs-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                                <i class='bx bx-star'></i>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <div class="tab-content-2">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="p-timeline-overview">
                                                        <h5>Overview</h5>
                                                        <p></p>
                                                    </div>
                                                    <ul class="p-timeline">
                                                        @foreach ($plan as $key => $row)
                                                            <li>
                                                                <div class="timeline-index">
                                                                    <div class="index-circle">
                                                                        <h5>{{ ++$key }}</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-content">
                                                                    <h5>STEP {{ $key }} : {{ $row->plan_title }}
                                                                    </h5>
                                                                    <strong>10.00 AM to 10.00 PM</strong>
                                                                    <p>{!! $row->description !!}</p>
                                                                    {{-- <p>{!! $row->others_details !!}</p> --}}
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">
                                        <div class="tab-contant-3">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="package-grid-one">
                                                        {{-- <div class="single-grid">
                                                            

                                                            @foreach ($gallery as $item)
                                                                <a class="g-img-sm-1 main-gallary"
                                                                    href="{{ URL::asset('uploads/tour/' . $item->image_path) }}">
                                                                    <img src="{{ URL::asset('uploads/tour/' . $item->image_path) }}"
                                                                        alt="">
                                                                </a>
                                                            @endforeach
                                                        </div> --}}
                                                        {{-- <div class="single-grid">
                                                             @foreach ($gal as $img)
                                                            <a class="g-img-sm-1 main-gallary"
>
                                                                <img src="{{ URL::asset('uploads/tour/' . $img->image_path) }}" alt="">
                                                                
                                                            </a>
                                                            @endforeach
                                                             
                                                        </div> --}}

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="package-grid-two">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="package-d-sidebar">
                            <div class="row">

                                <div class="col-lg-12 col-md-6">
                                    <div class="p-sidebar-form">
                                        <form action="{{ route('book.store') }}" method="POST" id="book_form">
                                            @csrf
                                            <h5 class="package-d-head">Book This Package</h5>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input value="{{ $details->tour_id }}" hidden type="text"
                                                        name="tour_id">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="text" name="fullName" placeholder="Your Full Name"
                                                        required>
                                                    <span class="text-danger error-text fullName_error"></span>
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="email" name="email" placeholder="Your Email" required>
                                                    <span class="text-danger error-text email_error"></span>

                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="tel" name="tel" placeholder="Phone" required>
                                                    <span class="text-danger error-text tel_error"></span>

                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="number" name="nbrPerson" placeholder="Number of persons"
                                                        required>
                                                    <span class="text-danger error-text nbrPerson_error"></span>

                                                </div>


                                                <div class="col-lg-12">
                                                    <textarea cols="30" rows="7" name="message"
                                                        placeholder="Message"></textarea>
                                                    <span class="text-danger error-text message_error"></span>

                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="submit" id="book" name="book" value="Book Now">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="p-sidebar-cards mt-40">
                                        <h5 class="package-d-head">Popular Packages</h5>
                                        <ul class="package-cards">
                                            @foreach ($popular as $key => $item)
                                                <li class="package-card-sm">
                                                    <div class="p-sm-img">
                                                        <img src="{{ URL::asset('uploads/tour/' . $item->imageName) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="package-info">
                                                        <div class="package-date-sm">
                                                            <strong><i class="far fa-calendar"></i>{{ $item->duration }}
                                                                Hours</strong>
                                                        </div>
                                                        <h3><i class="fas fa-plane-departure"></i>
                                                            <a
                                                                href="{{ url('package-details/') . '-' . $item->id }}">{{ $item->tour_name }}</a>
                                                        </h3>
                                                        <h5><span>{{ $item->price }} DH</span>/ Per Person</h5>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="p-sidebar-organizer mt-40">
                                        <h5 class="package-d-head">Organized By</h5>
                                        <div class="organizer-card">
                                            <div class="organizer-img">
                                                <img src="assets/images/organizer.png" alt="">
                                            </div>
                                            <div class="organizer-info">
                                                <h5>Travelhotel</h5>
                                                <p>Member since 2021</p>
                                                <ul class="organizer-rating">
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bxs-star'></i></li>
                                                    <li><i class='bx bx-star'></i></li>
                                                </ul>
                                                <h5>500 Reviews</h5>
                                            </div>
                                        </div>
                                        <div class="p-ask-btn">
                                            <a href="#">ASK A QUESTION</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="p-sidebar-banner mt-40">
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
    <script>
        toastr.options.preventDuplicates = true;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            $('#book_form').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                $.ajax({
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: new FormData(form),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(form).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.code == 0) {
                            $.each(data.error, function(prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $(form)[0].reset();
                            //  alert(data.msg);

                            toastr.success(data.msg);
                        }
                    }
                });
            });
        });
    </script>

    </html>
@endsection
