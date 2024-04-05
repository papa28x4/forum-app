<?php

namespace App\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Subscriptionable
{
    public function subscriptions();

    public function subscriptionsRelation(): MorphMany;

    public function hasSubscriber(User $user): bool;
}