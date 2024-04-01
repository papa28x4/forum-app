<?php

namespace App\Models;

use App\Traits\AdjustTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, AdjustTime;

    public const NAMES = ['Events', 'Off-Topic', 
                          'Technical Assistance', 'Suggestions',
                            'General', 'Feedback', 'Announcements'
                          ] ;

    protected $fillable = ['name', 'slug'];

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class);
    }

    public function id()
    {
      return $this->id;
    }

    public function name()
    {
      return $this->name;
    }
    
    public function slug()
    {
      return $this->slug;
    }
    
}
