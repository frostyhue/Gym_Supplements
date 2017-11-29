<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SupplementController extends  Controller
{
    public function getSupplement()
    {
        $article = Article::all();

        return view('articles')->with('articles', $article);
    }
}

