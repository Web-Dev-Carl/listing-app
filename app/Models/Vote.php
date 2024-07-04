<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'email', 'ip_address'];

    /**
     * Get the item that the vote belongs to.
     */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
