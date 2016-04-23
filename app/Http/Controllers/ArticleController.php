<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }
    public function index(){
        $article=Article::all();
        return view('article.index',compact('article'));
    }
    public function store(Request $request){
        $article=Article::create(array('title'=>$request->get('title'),'text'=>$request->get('text')));
        //dd($article->id);得到$article的id号
        return Redirect::route('article.show',array($article->id));
    }
    public function show($id){
        $article=Article::findOrFail($id);

        return view('article.show',compact('article'));
    }
    public function edit($id){
        $article=Article::findOrFail($id);
        return view('article.edit',compact('article'));
    }
    public function update(Request $request, $id){
        $article=Article::findOrFail($id);
        $data['title']=$request->get('title');
        $data['text']=$request->get('text');
        $article->update($data);
        return Redirect::route('article.index');
    }
    public function destroy($id){
        Article::destroy($id);
        return Redirect::route('article.index');
    }


}
