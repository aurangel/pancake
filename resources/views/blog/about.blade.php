@extends('blog.layouts.master', ['meta_description' => 'Обо мне'])

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

    <section id="about" class="about">
        <div class="container">
            <div class="page-title" style="background-image: url({{ asset('assets/images/about.jpg') }}); background-position: -436px 544px;">
				<h1>Немножко обо мне</h1>
			</div>
            
            <p>Привет, странник. Ты находишься на страницах моего персонального блога. Меня зовут Роман. Мне 19.
            Я фанат самообразования и технологий. <strike>Иногда практикую GTD.</strike> Свой путь я начал
            на микростоках, разрабатывая то HTML шаблоны, то темы для WordPress, где основал крохотную команду
            состояющую из людей разных стран. <a href="">Так продолжалось до поры до времени.</a>
            Сейчас я увлечен только проф. деятельностью, разрабатываю свои проекты на PHP, храню их
            <a target="_blank" href="{{ config('blog.social.github') }}">на ГитХабе</a>,
            и результаты своего труда оцениваю как маленький шаг к успеху.
            <br/><br/>
            А дальше? Я такой же обычный человек, как и ты, просто посвящаю себя своему делу чуть более, чем полностью.
            <br/><br/>
            Этот блог послужит для меня пристанищем, где я буду выражать свои огромные мысли о чем-либо, писать о своём
            прошлом опыте работы на микростоках, и о настоящем, где я коснусь более профессиональной тематики и тому подобное.
            </p>
        </div><!-- /.container -->
    </section><!-- /#about -->
@stop