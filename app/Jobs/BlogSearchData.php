<?php

namespace App\Jobs;

use App\Post;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BlogSearchData extends Job
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @param $query
     */
    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * Execute the job.
     *
     * @return array
     */
    public function handle()
    {
        $posts = Post::with('tags')
            ->where('published_at', '<=', Carbon::now())
            ->where('title', 'LIKE', '%' . $this->query . '%')
            ->where('is_draft', 0)
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        
        return [
            'title' => config('blog.title'),
            'subtitle' => config('blog.subtitle'),
            'posts' => $posts,
            'meta_description' => config('blog.description'),
            'reverse_direction' => false,
            'tag' => null,
        ];
    }
}
