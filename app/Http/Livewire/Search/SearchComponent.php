<?php

namespace App\Http\Livewire\Search;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SearchComponent extends Component
{
    public $scope;

    public function mount()
    {
       $parts = explode('/', url()->current());

       if(request()->routeIs('threads.index')){
            $this->scope = 'All Topics';
        }else{
            $this->scope = ucwords(end($parts));
        }
    }

    public function render()
    {
        return view('livewire.search.search-component');
    }
}
