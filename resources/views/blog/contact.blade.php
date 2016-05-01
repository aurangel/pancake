@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('content')
    <div id="content-wrapper">
        <div class="container">
            <div class="content-wrapper-content big-block type-3">
                @include('admin.partials.errors')
                @include('admin.partials.success')

                <div class="page-title contact">
                    <h1 class="title">
                        contact me
                    </h1>
                    <div class="links">
                        <a href="/">Home</a>
                        <span>—</span>
                        <a href="/contact">Contact me</a>
                    </div>
                </div>
                <div class="simple-article">
                    <div class="row ">
                        <div class="col-md-10 col-md-push-1">
                            <img src="{{ asset('assets/img/img111.jpg') }}" alt="" class="contact">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <div class="sm-widjet">
                                <div class="title-w contact">
                                    follow me
                                </div>
                                <p class="text-center">
                                    Want to get in touch with me? Fill out the form below to send me a
                                    message and I will try to get back to you within 24 hours!
                                </p>
                                <div class="about-me text-center">
                                    <div class="soc-block">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-push-2">
                            <div class="comments">
                                <h3 class="title">
                                    say hello!
                                </h3>
                                <form action="/contact" class="comment-form" method="post">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div class="cus-row">
                                        <div class="cus-col">
                                            <input type="text" name="name"
                                                   placeholder="Your name"
                                                   value="{{ old('name') }}"
                                                   required="">
                                        </div>
                                        <div class="cus-col">
                                            <input type="email" name="email"
                                                   placeholder="Your email"
                                                   value="{{ old('email') }}"
                                                   required="">
                                        </div>
                                    </div>
                                    <textarea name="message" cols="30" rows="10"
                                              placeholder="Your comment"
                                              required="">{{ old('message') }}</textarea>
                                    <a class="btn submit">submit message <input type="submit"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection