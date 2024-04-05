<?php

namespace App\Http\Livewire;

use App\Jobs\LikeThreadJob;
use App\Jobs\UnlikeThreadJob;
use App\Models\Thread;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeThread extends Component
{
    // use DispatchesJobs;

    public $thread, $count;

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
        $this->count = count($this->thread->likes());
    }

    public function toggleLike()
    {
        // dd(Auth::user()->id);
        // if($this->thread->isLikedBy(Auth::user())){
        //     $this->dispatchSync(new UnlikeThreadJob($this->thread, Auth::user()));
        // }else{
        //     $this->dispatchSync(new LikeThreadJob($this->thread, Auth::user()));
        // }
        if($this->thread->isLikedBy(auth()->user())){
            $this->thread->disLikedBy(auth()->user());
        }else{
            $this->thread->likedBy(auth()->user());
        }

        $this->thread->unsetRelation('likesRelation');
       
        $this->count = count($this->thread->likes());
        
    }

    public function render()
    {
        return view('livewire.like-thread');
    }
}
