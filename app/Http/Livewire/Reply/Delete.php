<?php

namespace App\Http\Livewire\Reply;

use App\Models\Reply;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Delete extends Component
{
    use AuthorizesRequests;

    public $replyId;
    public $page;

    public function mount($page)
    {
        $this->page = $page;
    }

    public function deleteReply()
    {
        // dd($this->page);
        $reply = Reply::findOrFail($this->replyId);
        $this->authorize('update', $reply);
        $reply->delete();
        $this->emitUp('deleteReply', $this->page);
    }

    public function render()
    {
        return view('livewire.reply.delete');
    }
}
