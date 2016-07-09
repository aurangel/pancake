@extends('blog.layouts.master', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])

@section('content')
    <section id="main-content" class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="content-area">
                        <article class="single-post">
                            <div class="thumb-img">
                                <a href="#"><img src="{{ pageImage($post->page_image) }}" alt="Post Thumbnail"></a>
                            </div><!-- /.thumb-img -->
                            <div class="post-header">
                                <div class="post-categoris">
                                    @if ($post->tags->count())
                                        {!! join('', $post->tagLinks('')) !!}
                                    @endif
                                </div>
                                <h2 class="post-title"><a href="#">{{ $post->title }}</a></h2>
                            </div><!-- /.post-header -->
                            <div class="post-time">
                                <span class="time">{{ $post->published_at->format('F j, Y') }}</span>
                                <div class="small-underline"></div>
                            </div> <!-- /.post-time -->
                            <div class="post-content">
                                {!! $post->content_html !!}
                            </div><!-- /.post-content -->
                            <div class="post-footer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="post-comment-count">
                                            <a href="#">0 комментариев</a>
                                        </div>
                                        <div class="post-like">
                                            <a href="#">0 лайков</a>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-xs-6">
                                        <div class="post-social-share">
                                            <span>Поделиться</span>
                                            <ul class="list-inline pull-right">
                                                <li class="post-social-list-item">
                                                    <a href="http://www.facebook.com/sharer.php?u={{ $post->url($tag) }}"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="post-social-list-item">
                                                    <a href="http://twitter.com/share?url={{ $post->url($tag) }}&text={{ $post->title }}"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="post-social-list-item">
                                                    <a href="https://pinterest.com/pin/create/button/?url=&media={{ $post->page_image }}&description={{ $post->title }}"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li class="post-social-list-item">
                                                    <a href="https://plus.google.com/share?url={{ $post->url($tag) }}"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.post-footer -->
                        </article>
                        <div class="author-box">
                            <div class="author-avatar">
                                <img src="{{ asset('assets/images/author.png') }}" alt="Author">
                            </div><!-- /.author-avatar -->
                            <div class="author-bio">
                                <h3><a href="#">{{ config('blog.author') }}</a></h3>
                                <p>Просто занимаюсь разработкой веб-проектов на backend'е. Пишу
                                    про микростоки, веб-технологии и о том, о чём душа пожелает.</p>
                                <p class="email"><a href="mailto:{{ config('blog.contact_email') }}">{{ config('blog.contact_email') }}</a></p>
                            </div><!-- /.author-bio -->
                        </div><!-- /.author-box -->
                        <div class="related-post">
                            <div class="row">
                                @if ($post->newerPost($tag))
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="related-post-item">
                                            <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                                                <img src="{{ pageImage($post->newerPost($tag)->page_image) }}"
                                                     alt="Post Thumbnail" />
                                            </a>
                                            <h3><a href="{!! $post->newerPost($tag)->url($tag) !!}">{{ $post->newerPost($tag)->title }}</a></h3>
                                            <div class="date">
                                                {{ $post->newerPost($tag)->published_at->format('F j, Y') }}
                                            </div>
                                        </div><!-- /.related-post-item -->
                                    </div><!-- /.col-sm-6 col-md-4 -->
                                @endif
                                @if ($post->olderPost($tag))
                                    <div class="col-xs-6 col-sm-4" style="float: right;">
                                        <div class="related-post-item">
                                            <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                                                <img src="{{ pageImage($post->olderPost($tag)->page_image) }}"
                                                     alt="Post Thumbnail" />
                                            </a>
                                            <h3><a href="{!! $post->olderPost($tag)->url($tag) !!}">{{ $post->olderPost($tag)->title }}</a></h3>
                                            <div class="date">
                                                {{ $post->olderPost($tag)->published_at->format('F j, Y') }}
                                            </div>
                                        </div><!-- /.related-post-item -->
                                    </div><!-- /.col-sm-6 col-md-4 -->
                                @endif
                            </div><!-- /.row -->
                        </div><!-- /.related-post -->
                        <div class="write-a-comment">
                            <div id="disqus_thread"></div>
                            <noscript>
                                Please enable JavaScript to view the
                                <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                            </noscript>
                            <a href="http://disqus.com" class="dsq-brlink">
                                comments powered by <span class="logo-disqus">Disqus</span>
                            </a>
                        </div><!-- /.write-a-comment -->
                    </div><!-- /.content-area -->
                </div><!-- /.col-md-9 -->
                @include('blog.partials.sidebar')
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->
@stop
