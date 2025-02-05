<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Articles;
use App\Models\Announcemt;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticlesRequest;
use App\Http\Requests\StoreAnnouncementRequest;


class PublicController extends Controller
{
  


    public function homepage(){
       
 
    
       $articles = Articles::all();
        $annunci =  Announcemt::all();
        return view('welcome',['annunci'=>$annunci], ['articles'=>$articles]); 

        
    
    }

 

    

       public function lounge(){

        return view('lounge');
    }

   
    public function annunci_form(){
        $tags = Tag::all();
        return view('annunci.addAnnunci',compact('tags'));
    }
    public function annunci()
    {
        $annunciaments = Announcemt::all();
      
        return view('annunci', ['annunciaments' => $annunciaments]);
    }

    public function annunci_storage(StoreAnnouncementRequest $request){
      

        $title = $request->title;
        $price = $request->price;
        $annunciamentBody = $request->annunciamentBody;
        $img = null;

        if ($request->file('img')) {
            $img = $request->file('img')->store('img', 'public');
        }

         $announcemt = Announcemt::create([
            'title' => $title,
            'annunciamentBody' => $annunciamentBody,
            'price' => $price,
            'img' => $img,
            'user_id'=> Auth::user()->id,
        ]);
    

        

       
        $announcemt->tags()->attach($request->tags);
        return redirect(route('annunci'))->with('message', 'Annuncio inserito correttamente');  
        
    
        
        
    }
    public function annunci_edit(Announcemt $announcemt){
        $announcemt = Announcemt::find($announcemt->id);
        $tags = Tag::all();
        return view('annunci.edit', compact('announcemt', 'tags'));;
    }

 
   public function delete_annunci($id)
    {
        $annunciament = Announcemt::find($id);
        $annunciament->delete();
        return redirect()->back()->with('message', 'Annuncio eliminato correttamente');
    }

}
