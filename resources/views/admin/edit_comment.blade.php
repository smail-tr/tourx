@extends('admin.dashboard')
@section('title')
    edit Comment
@endsection
@section('content')
    @include('sweetalert::alert')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="admin/assets2/images/favicon.png">
        <title></title>
        <!-- Custom CSS -->
        <link href="admin/dist1/css/style.min.css" rel="stylesheet">
        <link href="admin/assets2/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"
            type="text/css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!--bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <!-- summernote -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    </head>

    <body>

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Edit Comments</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="{{ url('comments') }}">Comments</a></li>
                            <li class="breadcrumb-item active">Edit Comment</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Comment Information</h5>
                            <form action="{{ route('update_comment',$comment->comment_id) }}" class="form-material form-horizontal m-t-30" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="form-group">
                                    <label class="col-md-12">First Name</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $comment->FirstName }}" id="name"
                                            name="FirstName"  readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Last Name</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $comment->LastName }}" id="name"
                                            name="LastName" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $comment->email }}" id="name" name="email" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Blog</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $comment->blog_name }}" id="name"
                                            name="blog_id" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group" style="margin-left: 10px">
                                    <label class="form-label">Status</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="disabled" name="status" class="form-check-input" value="disabled"  {{ ($comment->status=='disabled')? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadio11">Disabled</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="enabled" name="status" class="form-check-input" value="enabled" {{ ($comment->status=='enabled')? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadio22">Enabled</label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-12">Comment</label readonly>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $comment->comment }}" readonly id="name"
                                            name="comment">
                                    </div>
                                </div>

                                <button type="submit"
                                    class="btn btn-info waves-effect waves-light m-r-10 text-white">Submit</button>
                                <a href="{{ url('all_comment') }}" class="btn btn-secondary  active" role="button"
                                    aria-pressed="true">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>

    @endsection
</body>

</html>
