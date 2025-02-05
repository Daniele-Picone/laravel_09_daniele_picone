<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditArticle extends Component
{
    use WithFileUploads; 
    #[Validate('required', message:'Il titolo è obbligatorio')]
    #[Validate('min:5',message:'il titolo è troppo corto')]
    public $title;


  
    public $category;

     public $body;
     public $img;
     public $article;

     public function mount(){
        $this->title = $this->article->title;
        $this->category= $this->article->category;
        $this->body = $this->article->body;
      
     }

     public function updateArticle(){
        $this->validate();
        
        $this->article->update([
        'title'=> $this->title,
        'category'=> $this->category,
        'body'=>$this->body,
        
        ]);
        
        
        $this->reset();
        
        return redirect()->route('articles')->with('message', 'Articolo modificato correttamente');
        
         



        
       }
    
     
    public function render()
    {
        return view('livewire.edit-article');
    }
}
