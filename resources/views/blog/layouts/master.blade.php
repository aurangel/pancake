<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="author" content="{{ config('blog.author') }}">

    <title>{{ $title or config('blog.title') }}</title>
    <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}"
          title="RSS Feed {{ config('blog.title') }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>

    <!--  Bootstrap Stylesheet  -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome Icon Stylesheet  -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Owl Carousel Stylesheet -->
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">

    <!-- Hover Efect Stylesheet -->
    <link href="{{ asset('assets/css/hover-min.css') }}" rel="stylesheet">

    <!-- Magnific Popup Stylesheet -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

    <!-- jQuery UI Stylesheet -->
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- SimpleLens Images Zoom Stylesheet -->
    <link href="{{ asset('assets/css/jquery.simpleLens.css') }}" rel="stylesheet">

    <!-- Main Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Main Template Responsive Stylesheet -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1454407291507305";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- facebook like box script -->

@include('blog.partials.page-nav')

@yield('content')

@include('blog.partials.page-footer')

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

<!-- Bootstrap Main -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Smooth Website Scroll -->
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- Masonry grid layout library -->
<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>

<!-- Instagram photos -->
<script src="{{ asset('assets/js/instafeed.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!-- Tweetie jquery Feed Plugin -->
<script src="{{ asset('assets/js/tweetie.min.js') }}"></script>

<!-- Simple Lens Images -->
<script src="{{ asset('assets/js/jquery.simpleLens.min.js') }}"></script>

<!-- All custom jQuery -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
@yield('scripts')

</body>
</html>