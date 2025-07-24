<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Menampilkan halaman daftar artikel.
     */
    public function index()
    {
        $articles = Article::all();

        return view('artikel.index', compact('articles'));
    }
}
