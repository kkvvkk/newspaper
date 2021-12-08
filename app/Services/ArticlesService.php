<?php

namespace App\Services;

use App\Models\Article;

class ArticlesService
{
    /**
     * Get last $number articles
     * @param  int  $number
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getLastArticles(int $number)
    {
        $articles = Article::latest('created_at')->take($number)->get();
        return $articles;
    }

    /**
     * Get paginate $number articles with sort by created_at
     * @param  int  $number
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPaginateArticles(int $number)
    {
        $articles = Article::latest('created_at')->paginate($number);
        return $articles;
    }

    /**
     * Get last $number articles by $tagSlug with sort by created_at
     * @param  int  $number
     * @param string $tagSlug
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPaginateArticlesByTag(int $number, string $tagSlug)
    {
        $articles = Article::byTag($tagSlug)->latest('created_at')->paginate($number);
        return $articles;
    }

    /**
     * Get article by slug
     * @param string $tagSlug
     * @return \App\Models\Article
     */
    public function getArticleBySlug(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        return $article;
    }
}