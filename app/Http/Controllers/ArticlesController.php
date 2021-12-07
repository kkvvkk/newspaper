<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticlesService;
use App\Services\ArticlesViewsService;
use App\Models\Tag;


class ArticlesController extends Controller
{
    protected $articlesService;
    protected $articlesViewsService;

    public function __construct(ArticlesService $articlesService, ArticlesViewsService $articlesViewsService)
    {
        $this->articlesService = $articlesService;
        $this->articlesViewsService = $articlesViewsService;
    }

    public function showArticles(Request $request)
    {
        $tags = Tag::all();
        if (!$request->input('tag')) {
            $articles = $this->articlesService->getPaginateArticles(10);
        } else {
            $articles = $this->articlesService->getPaginateArticlesByTag(10, $request->input('tag'));
        }
        return view('articles.articles', compact('tags', 'articles'));
    }

    public function showArticleBySlug($slug)
    {
        $article = $this->articlesService->getArticleBySlug($slug);
        $views = $this->articlesViewsService->getArticlesViews($article, 10);
        return view('article.article', compact('article', 'views'));
    }
}
