<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'items';

    /**
     * Get the votes for the item.
     */
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Check if the user has already voted for this item.
     *
     * @param string $email
     * @return bool
     */
    public function hasUserVoted(string $email): bool
    {
        return $this->votes()->where('email', $email)->exists();
    }
}
