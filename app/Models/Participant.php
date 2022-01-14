<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participant extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the conversations for the Participant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversations(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get all of the users for the Participant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
