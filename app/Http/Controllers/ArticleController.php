<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->get();
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
//        dd(\Route::currentRouteName());
        return view('article.detail', compact('article'));
    }
}
