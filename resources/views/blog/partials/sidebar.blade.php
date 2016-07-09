<div class="col-md-3 no-barba">
    <div class="sidebar">
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Обо мне</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-about">
                    <img src="{{ asset('assets/images/author.png') }}" alt="">
                    <p>{{ config('blog.about') }}</p>
                </div><!-- /.widget-about -->
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Случайная цитата</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-about">
                    Если называть Python заменой BASIC, то тогда и трансформер Optimus Prime — это только замена грузовика. — Cory Dodt
                </div>
            </div><!-- /.widget-content -->
        </aside>
        @if (Cache::has('posts'))
            <aside class="widget">
                <div class="widget-header">
                    <h3 class="widget-title">Недавние записи</h3>
                </div><!-- /.widget-header -->
                <div class="widget-content">
                    @foreach (\Cache::get('posts') as $post)
                        <div class="widget-recent-post">
                            <div class="recent-post-item">
                                <div class="post-img">
                                    <img src="{{ asset(config('blog.uploads.webpath') . $post->page_image) }}"
                                         alt="">
                                </div><!-- /.post-img -->
                                <div class="post-meta">
                                    <h3><a href="{{ $post->url($tag) }}">{{ $post->title }}</a></h3>
                                    <div class="date">
                                        {{ $post->published_at->format('F j, Y') }}
                                    </div>
                                </div><!-- /.post-meta -->
                            </div><!-- /.recent-post-item -->
                        </div><!-- /.widget-recent-post -->
                    @endforeach
                </div><!-- /.widget-content -->
            </aside>
        @endif
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Случайное видео</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="footer-widget-video">
                    <p>Иногда здесь появляются вдохновляющие видеоролики</p>
                    <a class="mfp-youtube" href="https://www.youtube.com/watch?v=mcixldqDIEQ">
                        <img src="http://aurathemes.ru/pancake/assets/images/video.jpg" alt="Click to Watch the Video">
                    </a>
                </div><!-- /.footer-widget-video -->
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Архив</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-archive">
                    <select name="archive" id="archive-select">
                        <option value="">Выберите месяц</option>
                        <option value="">Май (3)</option>
                        <option value="">Июнь (1)</option>
                    </select>
                </div><!-- /.widget-archive -->
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Тэги</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-tag">
                    <a href="#">площадка</a>
                    <a href="#">код</a>
                    <a href="#">карьера</a>
                    <a href="#">жизнь</a>
                    <a href="#">деньги</a>
                    <a href="#">цель</a>
                    <a href="#">что-то</a>
                </div>
            </div><!-- /.widget-content -->
        </aside>
        {{--<aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Подписка</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-subscribe">
                    <p>Здесь вы можете подписаться, чтобы получать самые последние обновления</p>
                    <form action="#" method="get">
                        <input type="text" id="subscribe-name" name="name" placeholder="Ваше имя" required="">
                        <input type="email" id="subscribe-email" name="email" placeholder="Ваш e-mail..." required="">
                        <input class="tg-btn" type="submit" value="Готово">
                    </form>
                </div> <!-- ./widget-subscribe -->
                <!-- /.widget-subscribe -->
            </div><!-- /.widget-content -->
        </aside>--}}
    </div><!-- /.sidebar -->
</div><!-- /.col-md-3 -->
