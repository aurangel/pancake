@extends('blog.layouts.master')

@section('content')
    <div id="content-wrapper">
        @include('blog.partials.slider')

        <div class="content-wrapper-content big-block type-2">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <div class="post-list type-2">
                            {{-- The Posts --}}
                            @foreach ($posts as $k => $post)
                                <div class="blog-post style-2 @if ($k % 2 == 0) {{ '' }} @else {{ 'type-2' }} @endif ">
                                    <a href="#" class="img">
                                        <img src="{{ asset(config('blog.uploads.webpath') . $post->page_image) }}" alt="" />
                                    </a>
                                    <div class="content">
                                        <div class="post-date">
                                            {{ $post->published_at->format('F j, Y') }}

                                            @if ($post->tags->count())
                                                / {!! join(', ', $post->tagLinks('')) !!}
                                            @endif
                                        </div>
                                        <a href="{{ $post->url($tag) }}" class="title">{{ $post->title }}</a>
                                        @if ($post->subtitle)
                                            <p class="description">
                                                {{ $post->subtitle }}
                                            </p>
                                        @endif
                                        <div class="post-social clearfix">
                                            <span>
                                                <a class="post-social-link soc-n"
                                                   href="http://twitter.com/share?url={{ $post->url($tag) }}&text={{ $post->title }}">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="post-social-link soc-n"
                                                   href="http://www.facebook.com/sharer.php?u={{ $post->url($tag) }}">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a class="post-social-link" href="#">
                                                    <i class="fa fa-heart-o"></i> 0 Likes
                                                </a>
                                                <a class="post-social-link" href="#">
                                                    <i class="fa fa-comment-o"></i> 0 Comments
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination type-2">
                            {{-- Reverse direction --}}
                            @if ($reverse_direction)
                                @if ($posts->currentPage() > 1)
                                    <a class="page-left"
                                       href="{!! $posts->url($posts->currentPage() - 1) !!}">
                                        Previous {{ $tag->tag }} Posts
                                    </a>
                                @endif
                                @if ($posts->hasMorePages())
                                    <a class="page-right"
                                       href="{!! $posts->nextPageUrl() !!}">
                                        Next {{ $tag->tag }} Posts
                                    </a>
                                @endif
                            @else
                                @if ($posts->currentPage() > 1)
                                    <a class="page-left"
                                       href="{!! $posts->url($posts->currentPage() - 1) !!}">
                                        Newer {{ $tag ? $tag->tag : '' }} Posts
                                    </a>
                                @endif
                                @if ($posts->hasMorePages())
                                    <a class="page-right"
                                       href="{!! $posts->nextPageUrl() !!}">
                                        Older {{ $tag ? $tag->tag : '' }} Posts
                                    </a>
                                @endif
                            @endif
                        </div>
                    </div>

                    @include('blog.partials.sidebar')
                </div>
            </div>
        </div>
    </div>
@stop