<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    function getCategory() {

    	return $this->hasOne('App\Category' , 'id' , 'cat_id');
    }
}
