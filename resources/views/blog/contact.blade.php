@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('content')
    <div id="content-wrapper">
        <div class="container">
            <div class="content-wrapper-content big-block type-3">
                @include('admin.partials.errors')
                @include('admin.partials.success')

                <div class="page-title contact">
                    <h1 class="title">
                        Контакты
                    </h1>
                    <div class="links">
                        <a href="/">Главная</a>
                        <span>—</span>
                        <a href="/contact">Контакты</a>
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
                                <p class="text-center">
                                    Хотите связаться со мной? Заполните форму ниже,
                                    чтобы отправить мне сообщение, и я постараюсь
                                    ответить вам в течение 24 часов!
                                </p>
                                <div class="about-me text-center">
                                    <div class="soc-block">
                                        <a href="{{ config('blog.social.github') }}">
                                            <i class="fa fa-github"></i>
                                        </a>
                                        <a href="{{ config('blog.social.cm') }}">
                                            <i class="fa fa-tag"></i>
                                        </a>
                                        <a href="{{ config('blog.social.vimeo') }}">
                                            <i class="fa fa-vimeo"></i>
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
                                    Привет!
                                </h3>
                                <form action="/contact" class="comment-form" method="post">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <div class="cus-row">
                                        <div class="cus-col">
                                            <input type="text" name="name"
                                                   placeholder="Ваше имя"
                                                   value="{{ old('name') }}"
                                                   required="">
                                        </div>
                                        <div class="cus-col">
                                            <input type="email" name="email"
                                                   placeholder="Ваш email"
                                                   value="{{ old('email') }}"
                                                   required="">
                                        </div>
                                    </div>
                                    <textarea name="message" cols="30" rows="10"
                                              placeholder="Сообщение"
                                              required="">{{ old('message') }}</textarea>
                                    <a class="btn submit">Отправить <input type="submit"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection