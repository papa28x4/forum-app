<?php

namespace App\Http\Livewire\Thread;

use App\Models\Thread;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search_term;
    public $category_id;
    
    protected $listeners = [
        'filterThread'
    ];

    public function mount($category_id=null)
    {
        $this->category_id = $category_id;
    }

    public function filterThread($query){
        $this->search_term = $query;
    }

    public function render()
    {

        if(is_null($this->category_id)){
            $threads = Thread::where('title', 'like', "%{$this->search_term}%")->latest('updated_at')->paginate(10);
        }else {
            $threads = Thread::where('category_id', $this->category_id)
                        ->where('title', 'like', "%{$this->search_term}%")
                        ->latest('updated_at')->paginate(10);
        }
        return view('livewire.thread.index', compact('threads'));
    }
}
