@extends('front-end.layout')
@section('title')
    Contact Us
@endsection
@section('content')
@include('sweetalert::alert')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Contact US</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-wrapper pt-90">
        <div class="contact-cards">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Address</h5>
                                <p>{{ $contact->adresse }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="fas fa-at"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Email & Phone</h5>
                                <p>{{ $contact->phone }}
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="aac2cfc6c6c5eacdc7cbc3c684c9c5c7">{{ $contact->email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="fas fa-hashtag"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Social Media</h5>
                                <ul class="contact-icons">
                                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact-inputs pt-120">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <h5 class="contact-d-head">Get In Touch</h5>
                            <p>Suspendisse dolor risus, congue ac diam id, viverra facilisis dolor. Cras nec purus sagittis,
                                varius tortor at, maximus erat. Sed at tellus id tellus lobortis dictum. Mauris dignissim,
                                turpis vitae ullamcorper fermentum, sapien arcu aliquam arcu, in viverra quam est ac ex.
                                Cras sed lectus eu.
                            </p>
                            <ul class="office-clock">
                                <li>
                                    <div class="clock-icon"><i class="far fa-clock"></i></div>
                                    <div class="clock-info">
                                        <h5>Open Hour</h5>
                                        <p>Sat - Thu At <br> 10.00Am to 10.00PM</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="clock-icon"><i class="far fa-clock"></i></div>
                                    <div class="clock-info">
                                        <h5>Close Hour</h5>
                                        <p>Friday Office Close</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="{{ route('contact.store') }}" method="post">
                                @csrf
                                <h5 class="contact-d-head">Contact Us</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="fullname"type="text" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="subject" type="text" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="email" type="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="phone"  type="tel" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" cols="30" rows="7" placeholder="Write Message" required></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Submit Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
