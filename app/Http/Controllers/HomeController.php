<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Article;
use App\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {

        $articles=Article::orderBy('created_at' , 'DESC')->get();
        $articleslimit=Article::orderBy('created_at' , 'DESC')->limit(3)->get();
        $categories=Category::all();
        $Users=User::first();
        return view('index', compact('articleslimit','categories','articles','Users'));
        

      

    }

    public function article ($slug) {


        $article=Article::where('slug' , $slug)->first() ?? abort(404 , 'Yazı bulunamadı');
        $categories=Category::all();
        $Users=User::first();
        return view('article', compact('categories','article','Users'));

    }
}
