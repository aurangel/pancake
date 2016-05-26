<?php

namespace App;

use Illuminate\Support\HtmlString;
use Illuminate\Pagination\BootstrapThreePresenter;

class Pagination extends BootstrapThreePresenter
{
    /**
     * Convert the URL window into Bootstrap HTML.
     *
     * @return string
     */
    public function render()
    {
        if ($this->hasPages()) {
            return new HtmlString($this->getLinks());
        }

        return '';
    }

    /**
     * Get HTML wrapper for an available page link.
     *
     * @param  string $url
     * @param  int $page
     * @param  string|null $rel
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page, $rel = null)
    {
        $rel = is_null($rel) ? '' : ' rel="' . $rel . '"';

        return '<a href="' . htmlentities($url) . '"' . $rel . '>' . $page . '</a>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param  string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<a href="#" class="active">' . $text . '</a>';
    }
}
