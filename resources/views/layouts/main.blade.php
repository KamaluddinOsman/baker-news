<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @isset($title)
            {{$title}}
        @endisset
    </title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <link rel='icon' href='{{asset("images/favicon.png")}}' type='image/png'/>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <script src="{{asset('js/lazysizes.min.js')}}"></script>
</head>

<body class="bg-light style-default style-rounded">

<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>


<div class="content-overlay"></div>

@include('layouts.sidenav')

<main class="main oh" id="main">

    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row pt-1">

                <div class="col-lg-6 text-right">
                    <ul class="top-menu">
                        <li><a href="/contact">تواصل معنا</a></li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                        <a class="social social-facebook" href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter" href="https://twitter.com/login" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-youtube" href="https://www.youtube.com/" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram" href="https://www.instagram.com/" target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.header')
    
    <div>
        @yield('content')
    </div>
    
    @include('layouts.footer')

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/easing.min.j')}}s"></script>
<script src="{{asset('js/owl-carousel.min.js')}}"></script>
<script src="{{asset('js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('js/twitterFetcher_min.js')}}"></script>
<script src="{{asset('js/jquery.newsTicker.min.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
