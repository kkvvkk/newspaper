<?php

namespace App\Services;

use App\Models\Article;

class ArticlesService
{
    public function getLastArticles(int $number)
    {
        $articles = Article::latest('created_at')->take($number)->get();
        return $articles;
    }

    public function getPaginateArticles(int $number)
    {
        $articles = Article::latest('created_at')->paginate($number);
        return $articles;
    }

    public function getPaginateArticlesByTag(int $number, string $tagSlug)
    {
        $articles = Article::byTag($tagSlug)->latest('created_at')->paginate($number);
        return $articles;
    }

    public function getArticleBySlug(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        return $article;
    }
}