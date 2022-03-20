@extends('admin.dashboard')
@section('title')
    bookings details
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


        <!--bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script> --}}


        <!-- summernote -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    </head>

    <body>

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4  class="text-themecolor"><b>Order Details</b></h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="{{ url('all_bookings') }}">Orders</a></li>
                            <li class="breadcrumb-item active">details</li>
                        </ol>

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
                            <h5 class="card-title">Order Details</h5>
                            @foreach ($details as $item)
                                
                            <form
                                class="form-material form-horizontal m-t-30" method="POST" enctype="multipart/form-data">
                               
                                <div class="form-group">
                                    <label class="col-md-12">Reserved Tour</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $item->tour_name }}" id="name" readonly
                                            name="tour_name">
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $item->name }}" readonly 
                                            name="fullName">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $item->email }}" readonly 
                                            name="email">
                                    </div>
                                </div><br>
                                 <div class="form-group">
                                    <label class="col-md-12">Phone</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $item->phone }}" readonly  
                                            name="phone">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-12">Number of persons</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $item->no_of_person }}" readonly  
                                            name="no_of_person">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-12">Request</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" value="{{ $item->request }}" readonly
                                            name="request"></textarea>
                                    </div>
                                </div><br>

                                <a role="button" href="smailto:{{ $item->email }}"
                                    class="btn btn-info waves-effect waves-light m-r-10 text-white">Send Email</a>
                                <a href="{{ route('all_bookings') }}" class="btn btn-secondary  active" role="button"
                                    aria-pressed="true">Return</a>
                            </form>
                        @endforeach
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
