@extends('admin.dashboard')
@section('title')
    add blog
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
        {{-- input tags --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
            integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
            crossorigin="anonymous" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
                integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
                integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg=="
                crossorigin="anonymous"></script>
        <style type="text/css">
            .bootstrap-tagsinput {
                width: 100%;
            }

            .meta-info {
                background-color: #17a2b8;

            }

            .meta {
                display: inline-block;
                padding: .25em .4em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25rem;
                transition: color .15s ease-in-out, background-color .15s ease-in-out,
                    border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

        </style>
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
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
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
                    <h4 class="text-themecolor">Add Blogs</h4>
                </div>
                <div class="col-md-7 align-self-center text-end">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="{{ route('all_blogs') }}">Blogs</a></li>
                            <li class="breadcrumb-item active">Add Blog</li>
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
                            <form action="{{ Route('BlogController.store') }}"
                                class="form-material form-horizontal m-t-30" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="col-md-12">Blog Title
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="" id="title" name="title" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Slug
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input placeholder="Ex:Blog-Title" class="form-control" value="" id="slug"
                                            name="slug" required>
                                    </div>
                                    <span class="text-info ml-3">This field generated automaticaly after Typing The Blog
                                        Title.</span>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="col-md-12">Blog Category
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <select class="form-control" required="*" name="category" id="category_id">
                                            <option value="" selected>--select a category--</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div><br><br>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Blog image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" value="" id="" name="imageName" required>
                                        <span id="extension" class="text-danger error-text product_image_error"></span>
                                    </div>
                                    <div class="img-holder"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Blog Content
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" value="" rows="8" id="summernote"
                                            name="description" required></textarea>
                                    </div>
                                </div><br>


                                <div class="form-group">
                                    <label class="col-md-12">Meta Title
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input class="form-control" value="" id="" name="meta_title" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label id="meta" class="col-md-12">Meta Tags
                                        <span>(optional)</span>
                                    </label>
                                    <div class="col-md-12">
                                        <input class="form-control" data-role="tagsinput" value="" id="" name="meta_tags">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Meta Description
                                        <span>(optional)</span>
                                    </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" value="" id="" name="meta_description"></textarea>
                                    </div>
                                </div>

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
                placeholder: 'Describe your Blog!!',
                tabsize: 2,
                height: 100
            });

            // --------------check slug------------------------------------
            $('#title').change(function(e) {
                $.get('{{ route('blogs.checkSlug') }}', {
                        'title': $(this).val()
                    },
                    function(data) {
                        $('#slug').val(data.slug)
                    }
                );
            });
            // ------------------------------------------------------------

            //Reset input file
            $('input[type="file"][name="imageName"]').val('');
            //Image preview
            $('input[type="file"][name="imageName"]').on('change', function() {
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
                                'style': 'max-width:200px;margin-left:10px;'
                            }).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(img_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $("#extension").html('this file not supported!  jpg | png | jpeg are the supported extensions ');
                    $("#extension").hide();
                    $(img_holder).empty();
                }
            });
        </script>

    @endsection
    @section('scripts')

    @endsection
</body>

</html>
