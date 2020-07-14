<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ArticleController extends Controller
{
    public $i = 10;
    public $count = 10;

    public function first() {
        $table = App\Article::all()->take($this->i);
        return view('articles.all', [
            'table' => $table
        ]);
    }

    public function add() {
        $this->count += $this->i;
        $data = App\Article::all()->take($this->count);
        return response()->json($data);
    }

    public function show($id) {
        $article = App\Article::find($id);
        return view('articles.current', compact('article'));
    }
}
