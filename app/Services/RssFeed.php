<?php

namespace App\Services;

use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Suin\RSSWriter\Channel;
use Suin\RSSWriter\Feed;
use Suin\RSSWriter\Item;

class RssFeed
{
    /**
     * Return the content of the RSS feed
     *
     * @return mixed
     */
    public function getRSS()
    {
        if (Cache::has('rss-feed')) {
            return Cache::get('rss-feed');
        }

        $rss = $this->buildRssData();
        Cache::add('rss-feed', $rss, 120);

        return $rss;
    }

    /**
     * Return a string with the feed data
     *
     * @return string|Feed
     */
    protected function buildRssData()
    {
        $now = Carbon::now();
        $feed = new Feed();
        $channel = new Channel();

        $channel
            ->title(config('blog.title'))
            ->description(config('blog.description'))
            ->language('en')
            ->copyright('Copyright (c) ' . config('blog.author'))
            ->lastBuildDate($now->timestamp)
            ->appendTo($feed);

        $posts = Post::where('published_at', '<=', $now)
            ->where('is_draft', 0)
            ->orderBy('published_at', 'desc')
            ->take(config('blog.rss_size'))
            ->get();

        foreach ($posts as $post) {
            $item = new Item();
            $item
                ->title($post->title)
                ->description($post->subtitle)
                ->url($post->url())
                ->pubDate($post->published_at->timestamp)
                ->guid($post->url(), true)
                ->appendTo($channel);
        }

        $feed = (string)$feed;

        return $feed;
    }
}
