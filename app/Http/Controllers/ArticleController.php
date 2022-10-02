<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   
    public function index($slug) {

       $article=Article::where('slug' , $slug)->first() ?? abort(404 , 'Yazı bulunamadı');
       $randarticles=Article::inRandomOrder()->limit(3)->get();
       $categories=Category::all();
       $Users=User::first();
       return view('article', compact('randarticles' , 'categories','article','Users'));

    }






}
