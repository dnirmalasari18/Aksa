<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articles;
use App\Categories5;
class FormController extends Controller
{
    //
    /*public function formPost(Request $r){
        $messages = [
            'required'=> 'Atribut wajib diisi',
            'email' =>'Atribut wajib dalam format email',
            'alamat.between'=>'Atribut harus memiliki rentang 4 hingga 64 karakter',
            'min'=>'atribut memiliki karakter terlalu sedikit',
            'max'=>'atribut memiliki karakter terlalu sedikit',
        ];

        $this->validate($r, [
            'nama'=>'required|string|min:4|max:16',
            'jenisKelamin'=>'required',
            'email'=>'required|email',
            'tempatLahir'=>'required|min:4|max:16',
            'tanggalLahir'=>'required|date',
            'alamat'=>'nullable|between:4,64',
            'motto'=>'nullable|max:128'
        ], $messages);
        echo "<strong>Hasil Form</strong><br>";
        echo "Nama : ".$r->input('nama').'<br>';
        echo "Jenis Kelamin : ".$r->input('jenisKelamin').'<br>';
        echo "Email : ".$r->input('email').'<br>';
        echo "Tempat Lahir : ".$r->input('tempatLahir').'<br>';
        echo "Tanggal Lahir : ".$r->input('tanggalLahir').'<br>';
        echo "Alamat : ".$r->input('alamat').'<br>';
        echo "Motto : ".$r->input('motto').'<br>';
    }*/

    /*public function formPut(Request $r){
        echo "Hasil Put<br>";
        echo "Nama : ".$r->input('nama').'<br>';
        echo "Tempat Lahir : ".$r->input('tempatlahir').'<br>';
        echo "Tanggal Lahir : ".$r->input('tanggallahir').'<br>';
        echo "Jenis Kelamin : ".$r->input('jeniskelamin').'<br>';
        echo "Email : ".$r->input('email').'<br>';
        echo "Alamat : ".$r->input('alamat').'<br>';
    }*/

    public function productForm(Request $r){
       /* $this->validate($r, [
            'category'=>'required',
            'name'=>'required|string|max: 32',
            'desc'=>'nullable',
            'price'=>'required|integer',
        ]);*/

        DB::table('productions')->insert(
            ['category_id'=>$r->input('category'),
            'name'=>$r->input('nama'),
            'description'=>$r->input('desc'),
            'price'=>$r->input('price')
            ]
        );
        return redirect(route('tugas4'));
    }


    public function articlesAdd(Request $r){
        $this->validate($r, [
            'title'=>'required',
            'body'=>'required',
            'category'=>'required',
        ]);
        $article = new Articles;
        $article->title = $r->title;
        $article->body = $r->body;
        $article->save();

        foreach($r->category as $c){
            DB::table('article_categories')->insert([
                'article_id' => $article->id,
                'category5_id' => $c,
            ]);
        }
        return redirect(route('articleForm'));
    }
}
