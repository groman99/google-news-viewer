<?php

namespace App\Http\Controllers;

use SimplePie;
use Config;

class PageController extends Controller
{

    protected $categories;

    public function __construct()
    {
        $this->categories = Config::get('constants.CATEGORIES');
    }

    private function getFeedItems($feed, $query)
    {
        $feed->set_feed_url('https://news.google.com/news?cf=all&hl=en&pz=1&ned=us&num=20&output=rss&q=' . $query);
        $feed->init();
        $feed->handle_content_type();
        
        return $feed->get_items();
    }

    public function home()
    {
        return view('home');
    }

    public function category(SimplePie $feed, $category)
    {
        $category = $this->categories[$category];

        return view('category', [
            'title' => $category['title'],
            'items' => $this->getFeedItems($feed, $category['query'])
        ]);
    }
}

