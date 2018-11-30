<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    protected $fillable = [
        'title',
        'body' 
    ];
    public function categories(){
        return $this->belongsToMany('App\Categories5','article_categories','article_id','category5_id');
    }
}
