<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $appends = ['date'];
    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
    
    public function getDateAttribute(){
        return $this->created_at->diffForHumans();
    }
}
