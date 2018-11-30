<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Categories5;
use App\Articles;
class TableController extends Controller
{
    //
    public function productIndex(){
        $productData = DB::table('productions')->get();
        return view('showProduct')->with('products',$productData);
    }

    public function articleIndex(){
        $article = Articles::all();
        $category= Categories5::all();
        return view('Article.articleShow')->with('article',$article)->with('category',$category);
    }

    public function articleUpdate(){
        $category= Categories5::all();
        $article=Articles::find(Input::get('article'));
        return view('Article.articleUpdate')->with('article',$article)->with('category',$category);
    }

    public function articleUpdated(Request $r,$id){
        $article = Articles::find($id);
        $article->title = $r->title;
        $article->body = $r->body;
        $article->save();
        DB::table('article_categories')->where('article_id',$id)->delete();
        foreach($r->category as $c){
            DB::table('article_categories')->insert([
                'article_id' => $article->id,
                'category5_id' => $c,
            ]);
        }
        return redirect(route('articleShow'));
    }
    public function articleDestroy(){
        $a=Articles::find(Input::get('article'));
        $a->delete();
        return redirect('articleShow');
    }
    public function categoryIndex(){
        $category= Categories5::all();
        return view('Show.categoryShow')->with('category',$category);
    }
}
