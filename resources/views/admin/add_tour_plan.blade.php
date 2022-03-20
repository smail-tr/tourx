@extends('admin.dashboard')
@section('title')
    add plan
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
        <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
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
                    <h4 class="text-themecolor">Add Plans</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="">Plans</a></li>
                            <li class="breadcrumb-item active">Add Plan</li>
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
                            <h5 class="card-title">Plan Information</h5>
                            <form action="{{ Route('store') }}" class="form-material form-horizontal m-t-30" method="POST" enctype="multipart/form-data">
                                  {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="col-md-12">Tour</label>
                                    <div class="col-md-12">
                                        <select class="form-control" required="*" name="tour" id="tour_id">
                                            <option value="" selected>--select a Tour--</option>
                                            @foreach ($tour as $item)
                                                <option value="{{ $item->id }}">{{ $item->tour_name }}</option>
                                            @endforeach
                                        </select>
                                    </div><br><br>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12">Plan Title</label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="" id="" name="plan_title">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" value="" rows="8" id="summernote" 
                                            name="description"></textarea>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-12">Other Details</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" value="" rows="8" id="summernote2" 
                                            name="details"></textarea>
                                    </div>
                                </div><br>

                                
                                <button type="submit"
                                    class="btn btn-info waves-effect waves-light m-r-10 text-white">Submit</button>
                                <a href="" class="btn btn-secondary  active" role="button" aria-pressed="true">Cancel</a>
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
        <script>
            $('#summernote').summernote({
                placeholder: 'Describe your plan!!',
                tabsize: 2,
                height: 100
            });
             $('#summernote2').summernote({
                placeholder: 'Any Other details?',
                tabsize: 4,
                height: 100
            });

             
        </script>

    @endsection
    @section('scripts')

    @endsection
</body>

</html>
