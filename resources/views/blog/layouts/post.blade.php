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
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li class="post-social-list-item">
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
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
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                <p class="email"><a href="mailto:admiralexo@gmail.com">admiralexo@gmail.com</a></p>
                            </div><!-- /.author-bio -->
                        </div><!-- /.author-box -->
                        <div class="related-post">
                            <h3 class="title">Похожие записи</h3>
                            <div class="row">
                                <div class="col-xs-6 col-sm-4">
                                    <div class="related-post-item">
                                        <a href="#"><img src="{{ asset('assets/images/post/post1.jpg') }}" alt="Post Thumbnail"></a>
                                        <h3><a href="#">My detox smoothie</a></h3>
                                        <div class="date">
                                            October 20, 2015
                                        </div>
                                    </div><!-- /.related-post-item -->
                                </div><!-- /.col-sm-6 col-md-4 -->
                                <div class="col-xs-6 col-sm-4">
                                    <div class="related-post-item">
                                        <a href="#"><img src="{{ asset('assets/images/post/post2.jpg') }}" alt="Post Thumbnail"></a>
                                        <h3><a href="#">Far far away, behind the word mountains</a></h3>
                                        <div class="date">
                                            October 20, 2015
                                        </div>
                                    </div><!-- /.related-post-item -->
                                </div><!-- /.col-sm-6 col-md-4 -->
                                <div class="col-xs-6 col-sm-4">
                                    <div class="related-post-item">
                                        <a href="#"><img src="{{ asset('assets/images/post/post5.jpg') }}" alt="Post Thumbnail"></a>
                                        <h3><a href="#">My detox smoothie</a></h3>
                                        <div class="date">
                                            October 20, 2015
                                        </div>
                                    </div><!-- /.related-post-item -->
                                </div><!-- /.col-sm-6 col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.related-post -->
                        <div class="write-a-comment">
                            @include('blog.partials.disqus')
                        </div><!-- /.write-a-comment -->
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
                        <img src="{{ asset('assets/images/categories/cat2.jpg') }}" alt="Post Category">
                        <a href="#">Код</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category-item">
                        <img src="{{ asset('assets/images/categories/cat3.jpg') }}" alt="Post Category">
                        <a href="#">Креатив</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="category-item">
                        <img src="{{ asset('assets/images/categories/cat4.jpg') }}" alt="Post Category">
                        <a href="#">Бездна</a>
                    </div><!-- /.category-item -->
                </div> <!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section> <!-- /.blog-categoris -->
@stop


{{--
@section('content')
    <div id="content-wrapper">
        <div class="container">
            <div class="content-wrapper-content big-block type-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class="simple-article-block">
                            <div class="post-date">
                                <span class="date">{{ $post->published_at->format('F j, Y') }}</span>
                                <a class="post-social-link" href="#"><i class="fa fa-heart-o"></i> 0 Likes</a>
                                <a class="post-social-link" href="#"><i class="fa fa-comment-o"></i> 0 Comments</a>
                            </div>
                            <div class="article-title">
                                <h2 class="title">
                                    {{ $post->title }}
                                </h2>
                                <p class="description">
                                    {{ $post->subtitle }}
                                </p>
                            </div>
                            <div class="simple-article">
                                <p>
                                    {!! $post->content_html !!}
                                </p>
                            </div>
                        </div>
                        @if ($post->tags->count())
                            <div class="sm-widjet">
                                <h3 class="title-w">
                                    tags
                                </h3>
                                <div class="tag-box">
                                    {!! join('', $post->tagLinks('post')) !!}
                                </div>
                            </div>
                        @endif
                        <div class="sm-widjet">
                            <div class="same-post">
                                @if ($tag && $tag->reverse_direction)
                                    @if ($post->olderPost($tag))
                                        <div class="left">
                                            <a href="{!! $post->olderPost($tag)->url($tag) !!}" class="img">
                                                <img src="{{ $post->page_image }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date">
                                                    <span class="date">{{ $post->published_at->format('F j, Y') }}</span>

                                                    @if ($post->tags->count())
                                                        / {!! join(', ', $post->tagLinks('')) !!}
                                                    @endif
                                                </div>
                                                <a href="{!! $post->olderPost($tag)->url($tag) !!}"
                                                   class="title">
                                                    Previous {{ $tag->tag }} Posts
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($post->newerPost($tag))
                                        <div class="right">
                                            <a href="{!! $post->newerPost($tag)->url($tag) !!}" class="img">
                                                <img src="{{ asset(config('blog.uploads.webpath') . $post->page_image) }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date">
                                                    <span class="date">{{ $post->published_at->format('F j, Y') }}</span>

                                                    @if ($post->tags->count())
                                                        / {!! join(', ', $post->tagLinks('')) !!}
                                                    @endif
                                                </div>
                                                <a href="{!! $post->newerPost($tag)->url($tag) !!}"
                                                   class="title">
                                                    Next {{ $tag->tag }} Posts
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    @if ($post->newerPost($tag))
                                        <div class="left">
                                            <a href="{!! $post->newerPost($tag)->url($tag) !!}" class="img">
                                                <img src="{{ asset(config('blog.uploads.webpath') . $post->newerPost($tag)->page_image) }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date">
                                                    <span class="date">{{ $post->published_at->format('F j, Y') }}</span>

                                                    @if ($post->tags->count())
                                                        / {!! join(', ', $post->tagLinks('')) !!}
                                                    @endif
                                                </div>
                                                <a href="{!! $post->newerPost($tag)->url($tag) !!}"
                                                   class="title">
                                                    Newer {{ $tag ? $tag->tag : '' }} Posts
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($post->olderPost($tag))
                                        <div class="right">
                                            <a href="{!! $post->olderPost($tag)->url($tag) !!}" class="img">
                                                <img src="{{ asset(config('blog.uploads.webpath') . $post->olderPost($tag)->page_image) }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date">
                                                    <span class="date">{{ $post->published_at->format('F j, Y') }}</span>

                                                    @if ($post->tags->count())
                                                        / {!! join(', ', $post->tagLinks('')) !!}
                                                    @endif
                                                </div>
                                                <a href="{!! $post->olderPost($tag)->url($tag) !!}"
                                                   class="title">
                                                    Older {{ $tag ? $tag->tag : '' }} Posts
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="comments sm-widjet">
                            @include('blog.partials.disqus')
                        </div>
                    </div>

                    @include('blog.partials.sidebar')
                </div>
            </div>
        </div>
    </div>
@stop
--}}
