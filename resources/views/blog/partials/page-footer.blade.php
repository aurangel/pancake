<footer id="footer" class="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    @if (\Cache::has('posts'))
                        <aside>
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
                                                <h3><a href="{{ $post->url() }}">{{ $post->title }}</a></h3>
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
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-lg-4 col-lg-offset-1">
                    <aside>
                        <div class="widget-header">
                            <h3 class="widget-title">Твиты от друзей</h3>
                        </div><!-- /.widget-header -->
                        <div class="widget-content example2">
                            <div class="widget-tweet">
                                <div class="tweet"></div>
                            </div><!-- /.widget-instagram -->
                        </div><!-- /.widget-content -->
                    </aside>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-lg-3 col-lg-offset-1">
                    <aside>
                        <div class="widget-header">
                            <h3 class="widget-title">Случайное видео</h3>
                        </div><!-- /.widget-header -->
                        <div class="widget-content">
                            <div class="footer-widget-video">
                                <p>Иногда здесь появляются вдохновляющие видеоролики.</p>
                                <a class="mfp-youtube" href="https://www.youtube.com/watch?v=mcixldqDIEQ">
                                    <img src="{{ asset('assets/images/video.jpg') }}" alt="Click to Watch the Video">
                                </a>
                            </div><!-- /.footer-widget-video -->
                        </div><!-- /.widget-content -->
                    </aside>
                </div><!-- /.col-md-4 -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.footer-widget -->
    <div class="footer-menu">
        <ul>
            <li><a href="/about">Кто я такой</a></li>
            <li><a href="/contact">Напиши мне</a></li>
        </ul>
    </div><!-- /.footer-menu -->
</footer>