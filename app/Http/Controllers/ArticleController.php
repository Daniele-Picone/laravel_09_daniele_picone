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
      
        public function dettaglio($id){
    
    
    
            $article = Articles::find($id);
    
     
                    return view('articolo.dettaglio', ['article'=>$article] );
                
            }
            public function edit($id){
                $article = Articles::find($id);
                return view('articolo.update', ['article'=>$article]);
            }
            public function update(Request $request, $id)
            {
                $article = Articles::find($id);
        
                $request->validate([
                    'title' => 'required|string|max:255',
                    'category' => 'required|string|max:255',
                    'article' => 'required|string',
                    'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
        
                $article->update([
                    'title' => $request->title,
                    'category' => $request->category,
                    'article' => $request->article,
                    'img' => $request->hasFile('img') ? $request->file('img')->store('img', 'public') : $article->img,
                ]);
        
                return redirect()->route('articles')->with('message', 'Articolo aggiornato con successo!');
            }
        
          
            public function delete($id)
            {
                $article = Articles::find($id);
                $article->delete();
                return redirect()->back()->with('message', 'Articolo eliminato correttamente');
            }
        
}
