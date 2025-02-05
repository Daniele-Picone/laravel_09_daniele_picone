<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Articles;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticlesRequest;

class CreateArticle extends Component
{ 
    use WithFileUploads;
    
    #[Validate('required', message:'Il titolo è obbligatorio')]
    #[Validate('min:5',message:'il titolo è troppo corto')]
    public $title;
    public $category;
    public $body;

    public $img ;
            
    
    
    public function store() {
        $this->validate();

        $imgPath = null;

        if ($this->img) {
            $imgPath = $this->img->storePublicly('img', 'public'); 
        }
        
        $this->validate();
           Articles::create([
              
           'title'=> $this->title,
         'category'=> $this->category,
         'body'=>$this->body,
            'img'=>$imgPath,
            'user_id' => Auth::id(),




           ]);

          $this->reset();
            
            return redirect(route('articles'))->with('message', 'Articolo inserito correttamente');  
            
            
            
        }
    public function render()
    {
        return view('livewire.create-article');
    }
}
