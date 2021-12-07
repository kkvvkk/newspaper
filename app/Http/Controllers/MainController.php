<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticlesService;

class MainController extends Controller
{
    private $articlesService;

    public function __construct(ArticlesService $articlesService)
    {
        $this->articlesService = $articlesService;
    }

    public function main()
    {
        $articles = $this->articlesService->getLastArticles(6);
        return view('main.main', compact('articles'));
    }
}
