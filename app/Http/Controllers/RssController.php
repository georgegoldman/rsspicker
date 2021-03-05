<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Vedmant\FeedReader\Facades\FeedReader;

class RssController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $feed = FeedReader::read(array(
                                        'http://www.sportingnews.com/us/rss',
                                        'http://www.eonline.com/syndication/feeds/rssfeeds/topstories.xml',
                                        'https://thinkprogress.org/feed/',
                                        'https://www.worldreligionnews.com/feed/',
                                        'https://www.sciencedaily.com/rss/top/science.xml',
                                        'https://www.sciencedaily.com/rss/top/technology.xml',
                                        'https://www.sciencedaily.com/rss/most_popular.xml',
                                        'https://www.sciencedaily.com/rss/top/environment.xml',
                                        'https://feeds.feedburner.com/EducationWeekNewsAndInformationAboutEducationIssues',
                                        'http://www.cnbc.com/id/19746125/device/rss/rss.xml',
                                        'http://jimdaly.focusonthefamily.com/feed/',
                                        'https://news.google.com/news/rss'
        ));

        return View::make('rss')
            ->with('title', 'RSSPICKER')
            ->with('feed', $feed);
    }
}
