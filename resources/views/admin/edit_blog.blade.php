@extends('admin.dashboard')
@section('title')
    edit Blog
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
                    <h4 class="text-themecolor">Edit Tours</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="{{ url('all_tours') }}">Tours</a></li>
                            <li class="breadcrumb-item active">Edit Tour</li>
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
                            <h5 class="card-title">Blog Information</h5>
                            <form action="{{ route('update_blog', $blog->id) }}"
                                class="form-material form-horizontal m-t-30" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="form-group">
                                    <label class="col-md-12">Blog Title
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="{{ $blog->title }}" id="name" name="title" required>
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="col-md-12">Blog Category
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="category" id="category_id">
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div><br><br>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-12">Blog Content
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        {{-- <input class="form-control" value="{{ $tour->description }}" rows="8"
                                            id="summernote" name="description"> --}}
                                        <textarea class="form-control" name="description" required id="summernote" cols="30"
                                            rows="10">{!! $blog->description !!} </textarea>
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="col-md-12">Blog Image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input  type="file" class="form-control" value="{{ $blog->image }}" id=""
                                            name="imageName">
                                    </div>
                                    <div id="img_show" style="margin-left: 10px"><img
                                            style="border:dotted 1px red;border-raduis:30%"
                                            src="{{ URL::asset('uploads/blog/' . $blog->image) }}" height="200px"
                                            width="200px" alt="image"></div>
                                    <div id="error" style="color: red"></div>
                                    <div class="img-holder"></div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-12">Slug
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input required class="form-control" value="{{ $blog->slug }}" id="" name="slug">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Meta Title
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input required class="form-control" value="{{ $blog->meta_title }}" name="meta_title"
                                            id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Meta Tags
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input required class="form-control" value="{{ $blog->meta_tags }}" id=""
                                            name="meta_tags">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Meta Description
                                        <span>(optional)</span>
                                    </label>
                                    <div class="col-md-12">
                                        <textarea  class="form-control" value="{{ $blog->meta_description }}" id=""
                                            name="meta_description"></textarea>
                                    </div>
                                </div>


                                <button type="submit"
                                    class="btn btn-info waves-effect waves-light m-r-10 text-white">Submit</button>
                                <a href="{{ url('all_blogs') }}" class="btn btn-secondary  active" role="button"
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
        <script>
            var markupStr = "{!! $blog->description !!}"; 
            $('#summernote').summernote('code', markupStr);
        </script>
        <script>
            $('#summernote').summernote({
                placeholder: "",
                tabsize: 2,
                height: 150, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },

            });
            //Reset input file
            $('input[type="file"][name="imageName"]').val('');
            //Image preview
            $('input[type="file"][name="imageName"]').on('change', function() {
                $('#img_show').hide();
                var img_path = $(this)[0].value;
                var img_holder = $('.img-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'width:200px;heigth:200px;margin-bottom:10px;margin-left:5px;border:dotted 1px red;border-raduis:30%"'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {

                    $("#error").html('this extension is not supported');

                    $(img_holder).empty();
                }
            });
        </script>
    @endsection
</body>

</html>
