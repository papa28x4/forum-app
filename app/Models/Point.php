<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Point extends Model
{
    use HasFactory;

    const TABLE = 'points';

    protected $fillable = [
        'amount', 'message', 'current_points', 
    ];

    public function pointable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getCurrentPoints(Model $pointable): int
    {
        $currentPoints = Point::where('pointable_id', $pointable->id)
                            ->where('pointable_type', $pointable->getMorphClass())
                            ->orderBy('created_at', 'desc')
                            ->pluck('current_points')->first();

        if(!$currentPoints){
            $currentPoints = 0;
        }

        return $currentPoints;
    }

    public function addAwards(Model $pointable, $amount, $message)
    {
        $award = new Static();
        $award->amount = $amount;
        $award->current_points = $this->getCurrentPoints($pointable) + $amount;
        $award->message = $message;

        $pointable->awards()->save($award);

        return $award;
    }

}
