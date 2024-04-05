<?php

namespace App\Models;

use App\Contracts\Pointable;
use App\Traits\AdjustTime;
use App\Traits\HasFollows;
use App\Traits\HasPoints;
use App\Traits\HasReplies;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements MustVerifyEmail, Pointable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use ModelHelpers;
    use AdjustTime;
    use HasReplies;
    use HasFollows;
    use HasPoints;

    CONST DEFAULT = 1;
    CONST MODERATOR = 2;
    CONST ADMIN = 3;
    const TABLE = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'type',
        'slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function name(): string
    {
        return $this->name;
    }

    public function emailAddress(): string
    {
        return $this->email;
    }
    
    
    public function type(): int
    {
        return (int) $this->type;
    }

    public function isModerator(): bool
    {
        return $this->type === self::MODERATOR;
    }

    public function isAdmin(): bool
    {
        return $this->type === self::ADMIN;
    }

    public function threads()
    {
        return $this->threadsRelation;
    }

    public function threadsRelation(): HasMany
    {
        return $this->hasMany(Thread::class, 'author_id');
    }

    public function latestThreads(int $amount=5)
    {
        $this->threadsRelation()->latest()->limit($amount)->get();
    }

    public function deleteThreads()
    {
        foreach($this->threads() as $thread)
        {
            $thread->delete();
        }
    }

    public function countThreads(): int
    {
        return $this->threadsRelation()->count();
    }

}
