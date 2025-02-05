<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
     public $count = 0;
    public function increment(){
       
       
        $this->count++;

    }

    public function decrement(){
        $this->count--;
    }

    public function incrementBynum($num){

        $this->count+=$num;
    }
    public function decrementBynum($num){

        $this->count-=$num;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
