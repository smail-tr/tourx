@extends('admin.dashboard')
@section('title')
    edit
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
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="admin/assets2/images/favicon.png">
        <title></title>
        <!-- Custom CSS -->
        <link href="admin/dist1/css/style.min.css" rel="stylesheet">
        <link href="admin/assets2/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet"
            type="text/css" />
    </head>

    <body>

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Edit Categories</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="{{ url('category') }}">Categories</a></li>
                            <li class="breadcrumb-item active">Edit Categories</li>
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
                            <h5 class="card-title">Category Information</h5>
                            <form action="{{ route("update_cat",$categories->id)}}" class="form-material form-horizontal m-t-30" method="POST">
                                {{csrf_field()}}
                                 @method('PUT')
                                <div class="form-group">
                                    <label class="col-md-12">Category Name</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $categories->name }}" id="name" name="name">
                                    </div>
                                </div>
                                
                                <button type="submit"   class="btn btn-info waves-effect waves-light m-r-10 text-white">Submit</button>
                               <a href="{{ url('category') }}" class="btn btn-secondary  active" role="button" aria-pressed="true">Cancel</a>
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
