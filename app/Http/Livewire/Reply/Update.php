<?php

namespace App\Http\Livewire\Reply;

use App\Models\Reply;
use App\Policies\ReplyPolicy;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Update extends Component
{
    use AuthorizesRequests;

    public $replyId; 
    public $replyOrigBody;
    public $replyNewBody;
    public $author;
    public $createdAt;

    protected $listeners = ['deleteReply'];

    public function mount(Reply $reply)
    {
        $this->replyId = $reply->id();
        $this->replyOrigBody = $reply->body();
        $this->author = $reply->author();
        $this->createdAt = $reply->created_at->diffForHumans();

        $this->initialize($reply);
    }

    public function initialize(Reply $reply)
    {
        $this->replyOrigBody = $reply->body();
        $this->replyNewBody = $this->replyOrigBody;
    }

    public function deleteReply($page)
    {
        session()->flash('success', 'Reply Deleted');
        return redirect($page);
    }

    public function updateReply()
    {
        $reply = Reply::findOrFail($this->replyId);

        $this->authorize('update', $reply);
        $reply->body = $this->replyNewBody;
        $reply->save();
        session()->flash('success', 'Reply Updated!');
        $this->initialize($reply);
    }

    public function render()
    {
        return view('livewire.reply.update');
    }
}
