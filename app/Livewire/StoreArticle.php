<?php

namespace App\Livewire;

use App\Models\Articles;
use Livewire\Component;

class StoreArticle extends Component
{
    public function destroy(Articles $article){


        $article->delete();
    }
    public function render()
    {    
        $articles = Articles::all();
        return view('livewire.store-article', compact('articles'));
    }
}
