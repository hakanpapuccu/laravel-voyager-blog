<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Article;
use App\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {

        $articles=Article::all();
        $categories=Category::all();
        $Users=User::first();
        return view('index', compact('categories','articles','Users'));
        

      

    }
}
