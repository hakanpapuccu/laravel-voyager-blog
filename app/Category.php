<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    function countArticle() {

    	return $this->hasMany('App\Article' , 'cat_id' , 'id')->count();
    }
}
