@extends('admin.dashboard')
@section('title')
    settings
@endsection
@section('content')
    @include('sweetalert::alert')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container-fluid">

            <h1 class="h3 mb-2 text-gray-800">Paramètres</h1>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-about-us-tab" data-toggle="tab" href="#nav-about-us" role="tab"
                        aria-controls="nav-about-us" aria-selected="true">About us</a>
                    <a class="nav-link" id="nav-content-tab" data-toggle="tab" href="#nav-content" role="tab"
                        aria-controls="nav-content" aria-selected="false">General Content</a>
                    <a class="nav-link" id="nav-meta-tab" data-toggle="tab" href="#nav-meta" role="tab"
                        aria-controls="nav-meta" aria-selected="true">Home Page Meta</a>
                    <a class="nav-link" id="nav-logo-tab" data-toggle="tab" href="#nav-logo" role="tab"
                        aria-controls="nav-logo" aria-selected="true">Logo</a>
                    <a class="nav-link" id="nav-contact-us-tab" data-toggle="tab" href="#nav-contact-us" role="tab"
                        aria-controls="nav-contact-us" aria-selected="true">Contact us</a>
                    <a class="nav-link" id="nav-favicon-tab" data-toggle="tab" href="#nav-favicon" role="tab"
                        aria-controls="nav-favicon" aria-selected="true">Favicon</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade mt-4 active show" id="nav-about-us" role="tabpanel"
                    aria-labelledby="nav-about-us-tab">
                    <form action="{{ route('update_about') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Start Row One OF this page -->
                        <div class="row">
                            <div class="col-md-12 col-12 accordion" id="accordionHome">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="copyright">Title<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control text-lowercase" value="{{ $about->title }}"
                                            required="" id="title" name="title" placeholder="Enter Title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="copyright">Description<span class="text-danger">*</span></label>
                                        <textarea type="text" class="form-control text-lowercase" required=""
                                            id="description" name="description"
                                            placeholder="Enter Description">{{ $about->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="copyright">image<span class="text-danger">*</span></label>
                                        <input type="file" class="form-control text-lowercase" value="" required=""
                                            id="image" name="image" placeholder="chose image">
                                    </div>
                                    <div id="img_show" style="margin-left: 10px"><img
                                            style="border:dotted 1px red;border-raduis:30%"
                                            src="{{ URL::asset('uploads/about_us/' . $about->image) }}" height="200px"
                                            width="200px" alt="image"></div>
                                    <div id="error" style="color: red"></div>
                                    <div class="img-holder"></div>

                                </div>
                            </div><!-- End Accordion -->
                            <!-- Button Update -->
                            <div class="col-md-12 mb-4 mt-4">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="form0" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update about us content</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row One OF this page -->
                    </form>
                </div>
                <div class="tab-pane fade mt-4" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                    <form action="{{ route('update_footer') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content_page">Footer <span class="text-muted"></span>- About us <span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control text-lowercase" value="" required=""
                                        id="about-us" name="about-us"
                                        placeholder="About content">{{ $footer->about }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="copyright">footer - Copyright <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-lowercase"
                                        value="{{ $footer->copyright }}" required="" id="copyright"
                                        name="footer_copyright" placeholder="Enter footer - Copyright">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="form1" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update footer content</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade mt-4" id="nav-meta" role="tabpanel" aria-labelledby="nav-meta-tab">
                    <form action="{{ route('update_meta') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Meta title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $meta->meta_title }}" required="" id="title"
                                        name="meta_title" placeholder="Meta titre">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="key">Meta keywords<span class="text-muted">(Optional)</span></label>
                                    <textarea rows="4" class="form-control" id="key" name="meta_tags"
                                        style="min-height: 50px;" placeholder="Example: tourx,blog,website,...">{{ $meta->meta_tags }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Meta Description <span
                                            class="text-muted">(Optionnel)</span></label>
                                    <textarea rows="8" class="form-control" id="description"
                                        placeholder="Meta Description..." name="meta_description"
                                        style="min-height: 150px;">{{ $meta->meta_description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="form2" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update meta content</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade mt-4" id="nav-logo" role="tabpanel" aria-labelledby="nav-logo-tab">
                    <form action="{{ route('update_logo') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="logo-setting text-center ml-4">
                                        <div class="logo-setting-inner parent-img mx-auto">
                                             <div id="img_show" style="margin-left: 10px"><img
                                            style="border:dotted 1px red;border-raduis:30%"
                                            src="{{ URL::asset('uploads/logo/' . $logo->logo) }}" height="200px"
                                            width="200px" alt="image"></div>
                                           
                                            <input type="file" name="logo" id="photo" class="avatar_custom"
                                                required="required">
                                        </div>
                                        <div>
                                            <small class="muted-deep fw-normal">just <strong>jpg</strong>,
                                                <strong>jpeg</strong> and <strong>png</strong> format are autorized
                                                (139x45)</small>
                                        </div>
                                        <div class="logo_holder"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="form3" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update Logo</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- ------------ --}}
                <div class="tab-pane fade mt-4" id="nav-contact-us" role="tabpanel" aria-labelledby="nav-logo-tab">
                    <form action="{{ route('update_contact') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Contact Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" value="{{ $contact->email }}" required="" id="email"
                                        name="email" placeholder="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tele">phone number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" value="{{ $contact->phone }}" required="" id="tele" name="phone"
                                        placeholder="Entrer le numéro de téléphone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fax">Fax number<span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" value="{{ $contact->fax }}" required="" id="fax" name="fax"
                                        placeholder="Entrer le numéro de fax">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Contact Adresse <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-lowercase" value="{{ $contact->adresse }}" required=""
                                        id="address" name="adresse" placeholder="Entrer l'adresse de contact">
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="form1" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">update contact info</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- --------------}}
                <div class="tab-pane fade mt-4" id="nav-favicon" role="tabpanel" aria-labelledby="nav-favicon-tab">
                    <form action="{{ route('update_favicon') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="favicon-setting text-center ml-4">
                                        <div class="favicon-setting-inner parent-img mx-auto">
                                             <div id="img_show" style="margin-left: 10px"><img
                                            style="border:dotted 1px red;border-raduis:30%"
                                            src="{{ URL::asset('uploads/favicon/' . $favicon->favicon) }}" height="200px"
                                            width="200px" alt="image"></div>
                                            <input type="file" name="favicon" id="favicon" class="avatar_custom"
                                                required="required">
                                        </div>
                                        <div>
                                            <small class="muted-deep fw-normal">just <strong>jpg</strong>,
                                                <strong>jpeg</strong> and <strong>png</strong> are autorized.(16x16 or
                                                32x34)</small>
                                        </div>
                                        <div class="favicon_holder"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="form4" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Update favicon</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <script>
            //Reset input file
            $('input[type="file"][name="image"]').val('');
            //Image preview
            $('input[type="file"][name="image"]').on('change', function() {
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
             $('input[type="file"][name="logo"]').val('');
            //Image preview
            $('input[type="file"][name="logo"]').on('change', function() {
                var img_path = $(this)[0].value;
                var logo_holder = $('.logo-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        logo_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:200px;margin-left:10px;'
                            }).appendTo(logo_holder);
                        }
                        logo_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(logo_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $("#extension").html('this file not supported!  jpg | png | jpeg are the supported extensions ');
                    $("#extension").hide();
                    $(logo_holder).empty();
                }
            });
             $('input[type="file"][name="favicon"]').val('');
            //Image preview
            $('input[type="file"][name="favicon"]').on('change', function() {
                var img_path = $(this)[0].value;
                var favicon_holder = $('.favicon-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();
                if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                    if (typeof(FileReader) != 'undefined') {
                        favicon_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('<img/>', {
                                'src': e.target.result,
                                'class': 'img-fluid',
                                'style': 'max-width:200px;margin-left:10px;'
                            }).appendTo(favicon_holder);
                        }
                        favicon_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    } else {
                        $(favicon_holder).html('This browser does not support FileReader');
                    }
                } else {
                    $("#extension").html('this file not supported!  jpg | png | jpeg are the supported extensions ');
                    $("#extension").hide();
                    $(favicon_holder).empty();
                }
            });
        </script>
    @endsection
</body>

</html>
