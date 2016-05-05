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

    {{-- Fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>

    {{-- Styles --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/idangerous.swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('styles')

    {{-- HTML5 Shim and Respond.js for IE8 support --}}
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header style-2">

<!-- LOADER -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>

@include('blog.partials.page-nav')

@yield('content')

@include('blog.partials.page-footer')

{{-- Scripts --}}
<script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/global.js') }}"></script>
@yield('scripts')

</body>
</html>