<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the conversation that owns the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }

    /**
     * Get the user that owns the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the attachements for the Message
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class);
    }
}
