<?php

namespace App\Models;

use App\Contracts\Subscriptionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'user_id', 
    ];

    public function user(): User
    {
        return $this->userRelation;
    }

    public function userRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subscriptionable(): Subscriptionable
    {
        return $this->subscriptionableRelation;
    }

    public function subscriptionableRelation(): MorphTo
    {
        return $this->morphTo('subscriptionableRelation', 'subscriptionable_type', 'subscriptionable_id');
    }
}
