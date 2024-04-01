<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Notifications\DatabaseNotification;

class NotificationPolicy
{
    use HandlesAuthorization;

    const MARK_AS_READ = 'markAsRead';

    //Checks if the given notification can be marked as read by the user in question
    //DatabaseNotification is the model associated with notifications table
    public function markAsRead(User $user, DatabaseNotification $notification): bool
    {
        return $notification->notifiable()->is($user);
    }
}
