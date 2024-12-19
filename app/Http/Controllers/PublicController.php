<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class PublicController extends Controller
{



public function store(Request $request) {
    
    $title= $request->title;
    $category = $request->category;
    $articleBody = $request->article;
    $autore= $request->autore;
    
    
        $article = new Articles();
        $article->title =$title;
        $article->category = $category;
        $article->article =$articleBody;
        $article->autore = $autore;
        

        $article->save();
        
        return redirect(route('articles'));
        
        
        
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

    
}
