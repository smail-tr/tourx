@extends('admin.dashboard')
@section('title')
    Social Media links
@endsection
@section('content')
    @include('sweetalert::alert')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    </head>

    <body>

        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Our Social Media</h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Enter social media links</h6>
                </div>

                <div class="card-body">
                    <form action="{{ route('update_socialMedia') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Facebook">Facebook</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fab fa-facebook"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" value="{{ $socialMedia->facebook }}"
                                        name="facebook" id="Facebook" placeholder="Facebook">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="Twitter">Twitter</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fab fa-twitter"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" value="{{ $socialMedia->twitter }}"
                                        name="twitter" id="Twitter" placeholder="Twitter">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="Snapchat">Snapchat</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fab fa-snapchat"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" value="{{ $socialMedia->snapchat }}"
                                        name="snapchat" id="Snapchat" placeholder="Snapchat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="Pinterest">Pinterest</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fab fa-pinterest"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" value="{{ $socialMedia->pinterest }}"
                                        name="pinterest" id="Pinterest" placeholder="Pinterest">
                                </div>
                            </div>
                           
                            <div class="col-md-6">
                                <label for="Instagram">Instagram</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" value="{{ $socialMedia->instagram }}"
                                        name="instagram" id="Instagram" placeholder="Instagram">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="WhatsApp">WhatsApp</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fab fa-whatsapp"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" value="{{ $socialMedia->whatsapp }}" name="whatsapp" id="WhatsApp"
                                        placeholder="whatsApp">
                                </div>
                            </div>
                           
                            <div class="col-md-12 mt-4">
                                <div class="row">
                                    <div class="col-md-6 offset-md-6 d-flex flex-row justify-content-end">
                                        <button type="submit" name="formS" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">update social links</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>

    </html>
@endsection
