<div class="swiper-container link-slider big-block"
     data-autoplay="0"
     data-loop="1"
     data-speed="500"
     data-center="0"
     data-slides-per-view="responsive"
     data-xs-slides="1"
     data-sm-slides="4"
     data-md-slides="5"
     data-lg-slides="6"
     data-add-slides="6">
    <div class="swiper-wrapper">
        @foreach ($posts as $post)
            <div class="swiper-slide">
                <a href="{{ $post->url($tag) }}">
                    <img src="assets/img/pm1.jpg" alt="" class="center-image">
                    <div class="bg-vs"></div>
                    <div class="content">
                        <p class="post-date">
                            {{ $post->published_at->format('F j, Y') }}

                            @if ($post->tags->count())
                                / {!! join(', ', $post->tagLinks('slider')) !!}
                            @endif
                        </p>
                        <p class="title">{{ $post->title }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="pagination hide"></div>
</div>