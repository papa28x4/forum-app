<?php 

namespace App\Traits;

use App\Models\Point;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasPoints
{
    public function awards($amount = null): MorphMany
    {
        return $this->morphMany(Point::class, 'pointable')
                ->orderBy('created_at', 'desc')
                ->take($amount);
    }

    public function countAwards()
    {
        return $this->awards()->count();
    }

    public function currentPoints()
    {
        return (new Point())->getCurrentPoints($this);
    }

    public function addPoints($amount, $message)
    {
        return (new Point())->addAwards($this, $amount, $message);
    }

    public function rank()
    {
        $currentPoints = $this->currentPoints();

        if($currentPoints <= 100){
            return 'Level 1';
        }elseif ($currentPoints <= 200) {
            return 'Level 2';
        }elseif ($currentPoints <= 300) {
            return 'Level 3';
        }elseif ($currentPoints <= 400) {
            return 'Level 4';
        }elseif ($currentPoints <= 500) {
            return 'Level 5';
        }elseif ($currentPoints <= 600) {
            return 'Level 6';
        }elseif ($currentPoints > 600) {
            return 'Level 7';
        }

    }
}