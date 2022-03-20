{{--  --}}



<div class="row">
    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
        <div class="navbar-wrap">
            <div class="logo d-flex justify-content-between">
                <a href="{{ route('home') }}" class="navbar-brand"> <img style="width: 139px;height: 45px"
                        src="{{ URL::asset('uploads/logo/' . $logo->logo) }}" alt=""></a>
            </div>
            <div class="navbar-icons">
                <div class="searchbar-open">
                    <i class="flaticon-magnifier"></i>
                </div>

                <div class="mobile-menu d-flex ">
                    <div class="top-search-bar m-0 d-block d-xl-none">
                    </div>
                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                        <span class="h-top"></span>
                        <span class="h-middle"></span>
                        <span class="h-bottom"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <nav class="main-nav">
            <div class="navber-logo-sm">
                <img src="assets/images/logo-2.png" alt="" class="img-fluid">
            </div>
            <ul>
                <li>
                    <a href="{{ Route('home') }}">Home</a>

                </li>
                <li class="has-child-menu">
                    <a href="javascript:void(0)">Tour</a>
                    <i class="fl flaticon-plus">+</i>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ Route('tour-search') }}" class="sub-item">Tour Search</a>
                        </li>
                        <li>
                            <a href="{{ Route('standard-package') }}" class="sub-item">Tour Package</a>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ Route('destination') }}">Destinations</a></li>

                <li>
                    <a href="{{ Route('standard-blog') }}">Blogs</a>
                </li>
                <li><a href="{{ route('about-us') }}">About us </a></li>
                <li class="has-child-menu">
                    <a href="javascript:void(0)">Pages</a>
                    <i class="fl flaticon-plus">+</i>
                    <ul class="sub-menu">
                        <li><a href="{{ route('gallary') }}" class="sub-item">gallary page</a></li>
                        {{-- <li><a href="guide.html" class="sub-item">guide page</a></li> --}}
                        <li><a href="{{ Route('destination') }}" class="sub-item">destination page</a></li>
                       
                        {{-- <li><a href="faq.html" class="sub-item">FAQ page </a></li> --}}
                    </ul>
                </li>
                <li><a href="{{ Route('contact-us') }}">Contact Us </a></li>
            </ul>

            <div class="sidebar-contact">
                <ul>
                    <li class="sidebar-single-contact"><i class='bx bxs-phone'></i> <a href="tel:+17632275032">+1
                            763-227-5032</a></li>
                    <li class="sidebar-single-contact"><i class='bx bxs-envelope'></i><a
                            href="/cdn-cgi/l/email-protection#83eaede5ecc3e6fbe2eef3efe6ade0ecee"><span
                                class="__cf_email__"
                                data-cfemail="dcb5b2bab39cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<form>
    <div class="main-searchbar">
        <div class="searchbar-close">
            <i class='bx bx-x'></i>
        </div>
        <input type="text" placeholder="Search Here......">
        <div class="searchbar-icon">
            <i class='bx bx-search'></i>
        </div>
    </div>
</form>
