@extends('blog.layouts.master', [
  'title' => $post->title,
  'meta_description' => $post->meta_description ?: config('blog.description'),
])

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
                                    {!! join(', ', $post->tagLinks('post')) !!}
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
