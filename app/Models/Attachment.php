<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attachment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the message that owns the Attachment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
