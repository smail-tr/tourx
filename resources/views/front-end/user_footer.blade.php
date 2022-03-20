
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="footer-info">
<div class="footer-logo">
<img style="width: 139px;height: 45px" src="{{ URL::asset('uploads/logo/' . $logo->logo) }}" alt="" >
</div>
<p>{{ $footer->about }}</p>
<div class="footer-social-icons">
<h5>Follow Us:</h5>
 <ul>
<li><a href="{{ $social->facebook }}" target="_blank"><i class='bx bxl-facebook'></i></a></li>
<li><a href="{{ $social->instagram }}" target="_blank"><i class='bx bxl-instagram'></i></a></li>
<li><a href="{{ $social->twitter }}" target="_blank"><i class='bx bxl-twitter'></i></a></li>
<li><a href="{{ $social->pinterest }}" target="_blank"><i class='bx bxl-pinterest'></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-7">
<div class="footer-links">
<h5 class="widget-title">Contact us</h5>
<div class="contact-box">
<span><i class="bx bx-phone"></i></span>
<div>
<a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
<a href="tel:{{ $contact->fax }}">{{ $contact->fax }}</a>
</div>
</div>
<div class="contact-box">
<span><i class="bx bx-mail-send"></i></span>
<div>
<a href="/cdn-cgi/l/email-protection#dab3b4bcb59abfa2bbb7aab6bff4b9b5b7"><span class="__cf_email__" data-cfemail="bdd4d3dbd2fdd8c5dcd0cdd1d893ded2d0">[email&#160;protected]</span></a>
<a href="/cdn-cgi/l/email-protection#bccfc9ccccd3cec8fcd9c4ddd1ccd0d992dfd3d1"><span class="__cf_email__" data-cfemail="8ffcfaffffe0fdfbcfeaf7eee2ffe3eaa1ece0e2">[email&#160;protected]</span></a>
</div>
</div>
<div class="contact-box">
<span><i class="bx bx-location-plus"></i></span>
<div>
<a href="#">{{ $contact->adresse }}</a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-5">
<div class="footer-links">
<h5 class="widget-title">support</h5>
<div class="category-list">
<ul>
<li><a href="{{ route('contact-us') }}">Contact us</a></li>
<li><a href="{{ route('about-us') }}">About us</a></li>
<li><a href="{{ route('standard-blog') }}">our Blogs</a></li>
<li><a href="#">terms and conditions</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="footer-links payment-links">
<h5 class="widget-title">Discover:</h5>
<div class="category-list">
<ul>
<li><a href="{{ route('destination') }}">Destinations</a></li>
<li><a href="{{ route('standard-package') }}">Tours</a></li>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>
 <div class="row">
<div class="col-lg-12">
<div class="copyrigth-area">
<p>{{ $footer->copyright }}</p>
</div>
</div>
</div>
