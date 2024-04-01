<?php

namespace App\Http\Livewire\Notifications;

use App\Policies\NotificationPolicy;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public $notificationId;

    public function markAsRead(string $notificationId )
    {
        $this->notificationId = $notificationId;

        // dd($this->notificationId);

        $this->authorize(NotificationPolicy::MARK_AS_READ, $this->notification);

        // dd($this->notification->notifiable);

        $this->notification->markAsRead();
        
        $this->emit('markedAsRead', Auth::user()->unreadNotifications()->count());
    }

    public function getNotificationProperty(): DatabaseNotification
    {
        return DatabaseNotification::findOrFail($this->notificationId);
    }
    
    public function render()
    {
        // dd(Auth::user());
        return view('livewire.notifications.index', [
            'notifications' => Auth::user()->unreadNotifications()->paginate(10),
        ]);
    }

}
