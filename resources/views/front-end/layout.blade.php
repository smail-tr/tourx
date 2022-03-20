<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-end.user_header')
</head>

<body>
    {{-- start preloader --}}
    {{-- <div class="preloader">
        @include('front-end.user_preloader')
    </div> --}}
    {{-- end preloader --}}
    {{-- start topbar --}}
    <div class="topbar-area">
        <div class="container">
            @include('front-end.user_topbar')
        </div>
    </div>
    {{-- end topbar --}}
    {{-- start navbar --}}
    <header>
        <div class="header-area">
            <div class="container">
                @include('front-end.user_navbar')
            </div>
        </div>
    </header>
    {{-- end navbar --}}

    {{-- start content --}}
    @yield('content')
    <div class="newsletter-area pt-120">
        <div class="container">
            @include('front-end.user_newsletter')
        </div>
    </div>
    {{-- end content --}}

    {{-- start footer --}}
    <div class="footer-area">
        <div class="container">
            @include('front-end.user_footer')
        </div>
    </div>
    {{-- end footer --}}

    {{-- script --}}
    @include('front-end.user_script')
    {{--  --}}
</body>

</html>
