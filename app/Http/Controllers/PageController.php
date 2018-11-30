<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories5;
class PageController extends Controller
{
    //
    public function Article(){
        $category=Categories5::all();
        return view('Article.formArticles')->with('category',$category);
    }
}
