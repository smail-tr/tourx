@extends('front-end.layout')
 @section('title', $blog_details->meta_title)
 @section('description', $blog_details->meta_description)
 @section('keywords',$blog_details->meta_tags)
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
<title>Blog-details</title>
</head>
{{-- body --}}

<body>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Blog details</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-wrapper pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-title-xl">
                            <h3>{{ $blog_details->title }}</h3>
                            <div class="blog-info-xl">
                                <a class="blog-writer"><i class="far fa-user"></i>Admin</a>
                                <a class="blog-comment"><i class="far fa-comment"></i><span>{{ $comment->count() }}
                                    </span>Comment</a>
                            </div>
                        </div>
                        <div class="blog-img-xl">
                            <img src="{{ URL::asset('uploads/blog/' . $blog_details->image) }}" alt=""
                                class="img-fluid">
                            <div class="blog-date"><i class="far fa-calendar"></i>
                                {{ date('F d, Y', strtotime($blog_details->date_post)) }}
                            </div>
                        </div>
                        <div class="blog-texts mt-30">
                            <p>{!! $blog_details->description !!}</p>
                        </div>
                        <div class="blog-bottom">
                            <div class="blog-tags">
                                <h5>tags:</h5>
                                <ul>
                                    <li><a href="#">Trip</a></li>
                                    <li><a href="#">Travel Forest</a></li>
                                    <li><a href="#">Tourist</a></li>
                                </ul>
                            </div>
                            <div class="blog-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class='bx bxl-instagram'></i></a>
                                        <a href="#"><i class='bx bxl-facebook'></i></a>
                                        <a href="#"><i class='bx bxl-twitter'></i></a>
                                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-comments" id="comment">
                            <h5>{{ $comment->count() }} Comments</h5>
                            <ul>
                                @foreach ($comment as $com)

                                    <li>
                                        <div class="commentor">
                                            <div class="commentotor-img"><img style="width: 40px;height: 40px;" src="assets/images/commentor.png" alt="{{ $com->FirstName }} {{ $com->LastName }}">
                                            </div>
                                            <div class="commentor-id">
                                                <strong>{{ $com->FirstName }} {{ $com->LastName }}</strong>
                                                <p>{{ date('d M Y - H:i:s', $com->created_at->timestamp) }}</p>

                                            </div>
                                        </div>
                                        <p class="comment"> {{ $com->comment }}</p>
                                        {{-- <span class="reply-icon"><i class='bx bx-reply'></i> reply</span> --}}
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <div class="blog-reply">
                            <form id="comment_form" action="{{ route('comment.store') }}" method="POST"
                                id="book_form">
                                @csrf
                                <h5>Leave A Comment</h5>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input name="blog_id" hidden value="{{ $blog_details->blog_id }}"
                                            type="text">
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="first_name" type="text" placeholder="First Name" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="last_name" type="text" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="user_email" type="email" placeholder="Your Email" required>
                                    </div>

                                    <div class="col-lg-12">
                                        <textarea name="comment" cols="30" rows="7" placeholder="Write Message"
                                            required></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="sidebar-searchbox">
                            <div class="input-group search-box">
                                <input type="text" class="form-control" placeholder="Search Tour..."
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                        class='bx bx-paper-plane'></i></button>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-12 col-md-6">
                                <div class="blog-popular mt-40">
                                    <h5 class="categorie-head">Popular Post</h5>
                                    <ul>
                                        @foreach ($popular as $item)


                                            <li class="blog-card-sm">
                                                <div class="blog-img-sm">
                                                    <img src="{{ URL::asset('uploads/blog/' . $item->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="blog-details-sm">
                                                    <a href="{{ url('blog-details/') . '-' . $item->id }}"
                                                        class="blog-title-sm">{{ $item->title }}</a>
                                                    <div class="blog-info">
                                                        <a class="blog-writer">
                                                            <i class="far fa-user"></i>
                                                            Admin
                                                        </a>
                                                        <a class="blog-date"> <i class="far fa-calendar"></i>
                                                            {{ date('d M Y - H:i:s', $item->created_at->timestamp) }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
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
                            <div class="col-lg-12 col-md-6">
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
    {{-- <script>
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            $('#comment_form').on('submit', function(e) {
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
</script> --}}
</body>

</html>
@endsection
