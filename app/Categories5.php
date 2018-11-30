<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories5 extends Model
{
    //
    public function articles(){
        return $this->belongsToMany('App\Articles','article_categories','category5_id','article_id');
    }
}
