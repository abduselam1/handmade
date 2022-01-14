<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    public $appends = ['date'];
    protected $guarded = [];
    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    /**
     * The roles that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function catagories(): BelongsToMany
    {
        return $this->belongsToMany(Catagory::class);
    }

    /**
     * Get all of the Images for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function getDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function saveds(): HasMany
    {
        return $this->hasMany(Saved::class);
    }

    /**
     * The roles that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_saved', 'post_id', 'user_id')->withTimestamps();
    }
}
