<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ArticlesRequest;

class PublicController extends Controller
{



public function store(ArticlesRequest $request) {
    
    $title= $request->title;
    $category = $request->category;
    $articleBody = $request->article;
    $autore= $request->autore;
    $img = null;
        
    if($request->file('img')){

        $img = $request->file('img')->store('img', 'public');
    }

 
    
        $article = new Articles();
        $article->title =$title;
        $article->category = $category;
        $article->article =$articleBody;
        $article->autore = $autore;
        $article->img = $img;

        
        

        $article->save();
        
        return redirect(route('articles'))->with('message', 'Articolo inserito correttamente');  
        
        
        
    }
    public function homepage(){
    
    
        $article = Articles::all();
        return view('welcome',['articles'=>$article] );
    
    }

 

    public function showForm(){

        return view('addarticles');}

    public function articles(){
        $article = Articles::all();
        return view('articles', ['articles'=>$article] );
    }    
  
    public function dettaglio($id){



        $article = Articles::find($id);

 
                return view('articolo.dettaglio', ['article'=>$article] );
            
        }

       public function lounge(){

        return view('lounge');
    }

  




}
