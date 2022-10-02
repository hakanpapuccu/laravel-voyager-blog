<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Article;
use App\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {

        $articles=Article::orderBy('created_at' , 'DESC')->paginate(3);
        $articleslimit=Article::orderBy('created_at' , 'DESC')->limit(3)->get();
        $randarticles=Article::inRandomOrder()->limit(3)->get();
        $categories=Category::all();
        $Users=User::first();
        return view('index', compact('randarticles' , 'articleslimit','categories','articles','Users'));
        

      

    }

    
}
