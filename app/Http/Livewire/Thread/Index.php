<?php

namespace App\Http\Livewire\Thread;

use App\Models\Thread;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search_term;
    public $category_id;
    public $page_key;
    
    protected $listeners = [
        'filterThread'
    ];

    public function mount($category_id=null, $page_key=null)
    {
        $this->category_id = $category_id;
        $this->page_key = $page_key;
    }

    public function filterThread($query){
        $this->search_term = $query;
    }

    public function render()
    {
        
        if(!is_null($this->page_key)){
            if($this->page_key == 'allTime'){
                $threads = Thread::has('repliesRelation')->withCount('repliesRelation')
                        ->orderBy('replies_relation_count', 'desc')->paginate();
            // dd($threads);
            }elseif($this->page_key == 'weekly'){
                $threads = Thread::has('repliesRelation')->withCount('repliesRelation')
                            ->whereBetween('created_at', [Carbon::now()->startOfWeek(Carbon::SUNDAY), Carbon::now()->endOfWeek(Carbon::SATURDAY)])
                            ->orderBy('replies_relation_count', 'desc')->paginate();
            }elseif($this->page_key == 'noReply'){
                $threads = Thread::doesntHave('repliesRelation')->where('title', 'like', "%{$this->search_term}%")->paginate();
            }
        }
        elseif(is_null($this->category_id)){
            $threads = Thread::where('title', 'like', "%{$this->search_term}%")->latest('updated_at')->paginate(10);
        }else {
            $threads = Thread::where('category_id', $this->category_id)
                        ->where('title', 'like', "%{$this->search_term}%")
                        ->latest('updated_at')->paginate(10);
        }
        return view('livewire.thread.index', compact('threads'));
    }
}
