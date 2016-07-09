@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('content')
    <style type="text/css">
        .page-title {
            min-height: 200px;
            width: 100%;
            margin-bottom: 30px;
            position: relative
        }
        
        .page-title h1 {
            font-size: 36px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: .05em;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
    </style>
    
    <section id="contact" class="contact">
        <div class="container">
            <div class="page-title" style="background-image: url({{ asset('assets/images/contact.jpg') }}); background-position: -436px 776px;">
				<h1>Я в Интернет</h1>
			</div>
			
            <div class="row">
                <div class="col-md-5">
                    <p>Хотите связаться со мной, чтобы пожелать добра? Заполните форму справа,
                        отправьте сообщение, а я постараюсь ответить Вам в течение 24 часов. И не стесняйтесь.</p>
                        <p>
                                        Некоторые из моих профилей в социальных сетях можно найти в шапке этого блога, рядом с поиском. Список пополняется!
                                    </p>
                </div><!-- /.col-md-5 -->
                <div class="col-md-7">
                    <div class="contact-form">
                        <form action="/contact" method="post" id="commentform" class="form">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="author" class="field text" placeholder="Имя"
                                           name="name"
                                           type="text"
                                           value="{{ old('name') }}"
                                           required="" />
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input id="email" class="field text" placeholder="Email"
                                           name="email"
                                           type="text"
                                           value="{{ old('email') }}"
                                           required="" />
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <textarea id="comment" class="field textarea" rows="4"
                                              placeholder="Сообщение"
                                              name="message"
                                              required="">{{ old('message') }}</textarea>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12 form-submit">
                                    <input name="submit" type="submit" id="submit"
                                           class="submit"
                                           value="Отправить" />
                                </div><!-- /.form-submit -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.contact-form -->
                </div><!-- /.col-md-7 -->
            </div><!-- /.row -->
            <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#contact -->
@stop
