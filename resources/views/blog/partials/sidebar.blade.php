<div class="col-md-3">
    <div class="sidebar">
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Обо мне</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-about">
                    <img src="{{ asset('assets/images/avatar.jpg') }}" alt="">
                    <p>{{ config('blog.about') }}</p>
                </div><!-- /.widget-about -->
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Instagram</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-instagram">
                    <ul id="sidebar-instafeed" class="widget-instafeed"></ul>
                </div><!-- /.widget-instagram -->
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Категории</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-categories">
                    <ul>
                        <li><a href="#">Жизнь (0)</a>
                            <ul class="child-categories">
                                <li><a href="#">Лайфхаки (0)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Код (0)</a>
                        </li>
                        <li><a href="#">Креатив (2)</a></li>
                        <li><a href="#">Бездна (7)</a></li>
                    </ul>
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
                    <a href="/blog?tag=магазин">магазин</a>
                    <a href="#">код</a>
                    <a href="#">карьера</a>
                    <a href="#">жизнь</a>
                    <a href="#">деньги</a>
                    <a href="#">цель</a>
                    <a href="#">креатив</a>
                </div>
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">

            </div><!-- /.widget-header -->
            <div class="widget-content">
                <img src="{{ asset('assets/images/ad.jpg') }}" alt="ad banner">
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
            <div class="widget-header">
                <h3 class="widget-title">Facebook</h3>
            </div><!-- /.widget-header -->
            <div class="widget-content">
                <div class="widget-facebook">
                    <div class="fb-page"
                         data-href="https://www.facebook.com/aurathemes"
                         data-small-header="false"
                         data-adapt-container-width="true"
                         data-hide-cover="false"
                         data-show-facepile="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/aurathemes">
                                <a href="https://www.facebook.com/aurathemes">AuraThemes</a>
                            </blockquote>
                        </div>
                    </div>
                </div><!-- /.widget-facebook -->
            </div><!-- /.widget-content -->
        </aside>
        <aside class="widget">
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
        </aside>
    </div><!-- /.sidebar -->
</div><!-- /.col-md-3 -->
