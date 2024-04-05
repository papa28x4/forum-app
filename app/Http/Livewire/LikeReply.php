<?php

namespace App\Http\Livewire;

use App\Jobs\LikeReplyJob;
use App\Jobs\UnlikeReplyJob;
use App\Models\Reply;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeReply extends Component
{
    // use DispatchesJobs;

    public $reply, $count;

    public function mount(Reply $reply)
    {
        $this->reply = $reply;
        $this->count = count($this->reply->likes());
    }

    public function toggleLike()
    {
        // if($this->reply->isLikedBy(Auth::user())){
        //     $this->dispatchSync(new UnlikeReplyJob($this->reply, Auth::user()));
        // }else{
        //     $this->dispatchSync(new LikeReplyJob($this->reply, Auth::user()));
        // }

        if($this->reply->isLikedBy(auth()->user())){
            $this->reply->disLikedBy(auth()->user());
        }else{
            $this->reply->likedBy(auth()->user());
        }

        $this->reply->unsetRelation('likesRelation');
       
        $this->count = count($this->reply->likes());
    }
    
    public function render()
    {
        return view('livewire.like-reply');
    }
}
