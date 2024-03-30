<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On; 

class Search extends Component
{
    public $search1 = "";
    public $results = [];

    #[On('search')] 
    public function search()
    {
        if(strlen($this->search1)>=1){
            $this->results = User::where('name', 'like', '%' . $this->search1. '%')->get();
        }
        return view('livewire.search');
    }
    public function render()
    {
        return view('livewire.search');
    }
}
