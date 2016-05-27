<?php

namespace App\Services;

use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class SiteMap
{
    /**
     * Return the content of the Site Map
     *
     * @return mixed
     */
    public function getSiteMap()
    {
        if (Cache::has('site-map')) {
            return Cache::get('site-map');
        }

        $siteMap = $this->buildSiteMap();
        Cache::add('site-map', $siteMap, 120);

        return $siteMap;
    }

    /**
     * Build the SiteMap
     *
     * @return mixed
     */
    protected function buildSiteMap()
    {
        $postsInfo = $this->getPostsInfo();
        $dates = array_keys($postsInfo);
        sort($dates);
        $lastmod = last($dates);
        $url = str_finish(url(), '/');

        $xml = [];
        $xml[] = '<?xml version="1.0" encoding="UTF-8"?' . '>';
        $xml[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $xml[] = '  <url>';
        $xml[] = "    <loc>$url</loc>";
        $xml[] = "    <lastmod>$lastmod</lastmod>";
        $xml[] = '    <changefreq>daily</changefreq>';
        $xml[] = '    <priority>0.8</priority>';
        $xml[] = '  </url>';

        foreach ($postsInfo as $slug => $lastmod) {
            $xml[] = '  <url>';
            $xml[] = "    <loc>{$url}blog/$slug</loc>";
            $xml[] = "    <lastmod>$lastmod</lastmod>";
            $xml[] = "  </url>";
        }

        $xml[] = '</urlset>';

        return join("\n", $xml);
    }

    /**
     * Return all posts as url
     *
     * @return mixed
     */
    protected function getPostsInfo()
    {
        return Post::where('published_at', '>=', Carbon::now())
            ->where('is_draft', 0)
            ->orderBy('published_at', 'desc')
            ->lists('updated_at', 'slug')
            ->all();
    }
}
