<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticlesRequest;

class ArticleController extends Controller
{
    public function store(ArticlesRequest $request) {
    
        $title= $request->title;
        $category = $request->category;
        $articleBody = $request->article;
        $img = null;
            
        if($request->file('img')){
    
            $img = $request->file('img')->store('img', 'public');
        }
    
     
        
            $article = new Articles();
            $article->title =$title;
            $article->category = $category;
            $article->article =$articleBody;
            $article->img = $img;
            $article->user_id = Auth::user()->id;
    
            
            
    
            $article->save();
            
            return redirect(route('articles'))->with('message', 'Articolo inserito correttamente');  
            
            
            
        }
        public function showForm(){

      
            return view('addarticles');
        }
    
        public function articles(){
            $article = Articles::all();
            return view('articles', ['articles'=>$article] );
        }    
      
        public function dettaglio(Articles $article){
    
    
    
            
    
     
                    return view('articolo.dettaglio',compact('article') );
                
            }
            public function edit($id){
                $article = Articles::find($id);
                return view('articolo.update', compact('article'));
            }
            
             
        
          
            public function delete($id)
            {
                $article = Articles::find($id);
                $article->delete();
                return redirect()->back()->with('message', 'Articolo eliminato correttamente');
            }
        
}
