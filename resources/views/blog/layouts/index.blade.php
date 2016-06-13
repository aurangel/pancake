@extends('blog.layouts.master')

@section('content')
    <section id="main-content" class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="content-area">
                        <div class="row">
                        @foreach ($posts as $k => $post)
                        <div class="col-md-6">
                            <article class="post-item grid-style-post">
                                <div class="thumb-img">
                                    <a href="{{ $post->url($tag) }}">
                                        <img src="{{ pageImage($post->page_image) }}" alt="Post Thumbnail"/>
                                    </a>
                                </div><!-- /.thumb-img -->
                                <div class="post-header">
                                    <div class="post-categoris">
                                        @if ($post->tags->count())
                                            {!! join('', $post->tagLinks('')) !!}
                                        @endif
                                    </div>
                                    <h2 class="post-title"><a href="{{ $post->url($tag) }}">{{ $post->title }}</a></h2>
                                    <div class="small-underline"></div>
                                </div><!-- /.post-header -->
                                <div class="post-content">
                                    @if ($post->subtitle)
                                        <p>{{ $post->subtitle }}</p>
                                    @endif
                                    <p class="read-more">
                                        <a href="{{ $post->url($tag) }}"
                                           class="button hvr-underline-from-center">Продолжить чтение...</a>
                                    </p>
                                </div><!-- /.post-content -->
                                <div class="post-footer">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="post-time">
                                                <span class="time">{{ $post->published_at->format('F j, Y') }}</span>
                                            </div> <!-- /.post-time -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-xs-6">
                                            <div class="post-social-share">
                                                <ul class="list-inline pull-right">
                                                    <li class="post-social-list-item">
                                                        <a href="http://www.facebook.com/sharer.php?u={{ $post->url($tag) }}"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="post-social-list-item">
                                                        <a href="http://twitter.com/share?url={{ $post->url($tag) }}&text={{ $post->title }}"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="post-social-list-item">
                                                        <a href="https://pinterest.com/pin/create/button/?url=&media={{ 'http://localhost:8000' . pageImage($post->page_image) }}&description={{ $post->title }}"><i class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li class="post-social-list-item">
                                                        <a href="https://plus.google.com/share?url={{ $post->url($tag) }}"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.post-footer -->
                            </article><!-- /.grid-style-post -->
                        </div><!-- /.col-md-6 -->
                        @endforeach
                        </div>
                        <div class="post-pagination">
                            <div class="row">
                                <div class="col-xs-6 col-sm-4 prev-post"
                                     @if ($posts->currentPage() <= 1)
                                        style="visibility: hidden;"
                                    @endif
                                >
                                    <a href="{!! $posts->url($posts->currentPage() - 1) !!}"
                                       class="newer-post">Позднее {{ $tag ? $tag->tag : '' }}</a>
                                </div> <!-- /.col-sm-4 -->
                                <div class="col-xs-6 col-sm-4 pagination-list hidden-xs">
                                    <span>
                                        {!! with(new \App\Pagination($posts))->render() !!}
                                    </span>
                                </div><!-- /.col-sm-4 -->
                                @if ($posts->hasMorePages())
                                    <div class="col-xs-6 col-sm-4 next-post">
                                        <a href="{!! $posts->nextPageUrl() !!}"
                                           class="older-post">Ранее {{ $tag ? $tag->tag : '' }}</a>
                                    </div><!-- /.col-sm-4 -->
                                @endif
                            </div>
                        </div><!-- /.post-pagination -->

                    </div><!-- /.content-area -->
                </div><!-- /.col-md-9 -->
                @include('blog.partials.sidebar')
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

    <section id="blog-categories" class="blog-categoris">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category-item">
                        <img src="{{ asset('assets/images/categories/cat1.jpg') }}" alt="Post Category">
                        <a href="#">Жизнь</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category-item">
                        <img src="{{ asset('assets/images/categories/cat4.jpg') }}" alt="Post Category">
                        <a href="#">Код</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category-item">
                        <img src="{{ asset('assets/images/categories/cat2.jpg') }}" alt="Post Category">
                        <a href="#">Магазин</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category-item">
                        <img src="{{ asset('assets/images/categories/cat3.jpg') }}" alt="Post Category">
                        <a href="#">Бездна</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section> <!-- /.blog-categoris -->
@stop
