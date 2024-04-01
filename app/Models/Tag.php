<?php

namespace App\Models;

use App\Traits\AdjustTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory, AdjustTime;

    protected $table = 'tags';

    protected $fillable = [
        'name',
        'slug'
    ];

    public const NAMES = ['Laravel', 'PHP', 'Livewire', 'Javascript'] ;

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function threads(): MorphToMany
    {
        return $this->morphedByMany(Thread::class, 'taggable');
    }
}
