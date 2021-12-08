<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Views;
use Illuminate\Support\Facades\Redis;

class ArticlesViewsService 
{
    /**
     * Get articles views 
     * @param  App\Models\Article $article
     * @param int $DBFieldUpdateFrequency
     * @return int
     */
    public function getArticlesViews (Article $article, int $DBFieldUpdateFrequency) 
    {
        $views = Redis::get('article:' . $article->id . ':views');
        if (!$views) {
            $views = $article->views->number;
        } elseif ( ($views + 1) % $DBFieldUpdateFrequency === 0) {
            Views::where('article_id', $article->id)->update(['number' => $views + 1]);
        }
        Redis::set('article:' . $article->id . ':views', $views + 1);
        return $views + 1;
    }

}