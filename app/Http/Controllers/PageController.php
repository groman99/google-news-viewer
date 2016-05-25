<?php

namespace App\Http\Controllers;

use SimplePie;

class PageController extends Controller
{
    private function getFeedItems($feed, $query)
    {
        $feed->set_feed_url('https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&num=20&output=rss&q=' . $query);
        $feed->init();
        $feed->handle_content_type();
        return $feed->get_items();
    }

    public function home(SimplePie $feed)
    {
        return view('home', [
            //'items' => $this->getFeedItems($feed, 'slams+-dunk+-grand')
            //'items' => $this->getFeedItems($feed, 'shames+shamed+shaming')
            //'items' => $this->getFeedItems($feed, 'bashes+bashed+bashing')
            'items' => $this->getFeedItems($feed, 'outrage+outraged')
        ]);
    }
}

