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
                                <a class="post-social-link" href="#"><i class="fa fa-heart-o"></i> 15 Likes</a>
                                <a class="post-social-link" href="#"><i class="fa fa-comment-o"></i> 10 Comments</a>
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
                                            <a href="#" class="img">
                                                <img src="{{ asset('assets/img/img82.jpg') }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date"><span class="date">July 20, 2015</span> / <a href="#" class="tag-name">Travel</a></div>
                                                <a href="{!! $post->olderPost($tag)->url($tag) !!}"
                                                   class="title">
                                                    Previous {{ $tag->tag }} Posts
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($post->newerPost($tag))
                                        <div class="right">
                                            <a href="#" class="img">
                                                <img src="{{ asset('assets/img/img83.jpg') }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date"><span class="date">July 20, 2015</span> / <a href="#" class="tag-name">Travel</a></div>
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
                                            <a href="#" class="img">
                                                <img src="{{ asset('assets/img/img82.jpg') }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date"><span class="date">July 20, 2015</span> / <a href="#" class="tag-name">Travel</a></div>
                                                <a href="{!! $post->newerPost($tag)->url($tag) !!}"
                                                   class="title">
                                                    Newer {{ $tag ? $tag->tag : '' }} Posts
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($post->olderPost($tag))
                                        <div class="right">
                                            <a href="#" class="img">
                                                <img src="{{ asset('assets/img/img83.jpg') }}" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="post-date"><span class="date">July 20, 2015</span> / <a href="#" class="tag-name">Travel</a></div>
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






    {{-- The Post --}}{{--
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $post->content_html !!}
                </div>
            </div>
        </div>
    </article>

    --}}{{-- The Pager --}}{{--
    <div class="container">
        <div class="row">
            <ul class="pager">
                @if ($tag && $tag->reverse_direction)
                    @if ($post->olderPost($tag))
                        <li class="previous">
                            <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                Previous {{ $tag->tag }} Post
                            </a>
                        </li>
                    @endif
                    @if ($post->newerPost($tag))
                        <li class="next">
                            <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                                Next {{ $tag->tag }} Post
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </li>
                    @endif
                @else
                    @if ($post->newerPost($tag))
                        <li class="previous">
                            <a href="{!! $post->newerPost($tag)->url($tag) !!}">
                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                Next Newer {{ $tag ? $tag->tag : '' }} Post
                            </a>
                        </li>
                    @endif
                    @if ($post->olderPost($tag))
                        <li class="next">
                            <a href="{!! $post->olderPost($tag)->url($tag) !!}">
                                Next Older {{ $tag ? $tag->tag : '' }} Post
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>

    </div>--}}
@stop