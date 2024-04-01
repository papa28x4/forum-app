<?php

namespace App\Models;

use App\Traits\AdjustTime;
use App\Traits\HasAuthor;
use App\Traits\HasReplies;
use App\Traits\HasTags;
use App\Contracts\ReplyAble;
use App\Traits\HasLikes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Thread extends Model implements ReplyAble
{
    use HasFactory;
    use HasTags;
    use HasAuthor;
    use AdjustTime;
    use HasReplies;
    use HasLikes;
    // use HasTeams;

    const TABLE = 'threads';

    protected $fillable = [
        'title', 'body', 'slug', 'category_id', 'author_id'
    ];

    protected $with = [
        'authorRelation',
        'category',
        'tagsRelation',
        'likesRelation'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body), $limit);
    }

    public function replyAbleSubject(): string
    {
        return $this->title();
    }

    public function title(): string
    {
        return ucwords(strtolower($this->title));
    }

    public function id(): string
    {
        return $this->id;
    }

    public function body(): string
    {
        return $this->body;
    }
    
    public function slug()
    {
      return $this->slug;
    }

    public function delete()
    {
        $this->removeTags();

        parent::delete();
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->whereHas('tagsRelation', function($query) use ($tag){
            $query->where('tags.slug', $tag);
        });
    }
}
