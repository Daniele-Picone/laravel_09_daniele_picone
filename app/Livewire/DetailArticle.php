<?php

namespace App\Livewire;

use Livewire\Component;

class DetailArticle extends Component
{
    public $article;
    public function render()
    {
        return view('livewire.detail-article');
    }
}
