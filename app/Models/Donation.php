<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nominal',
        'comment',
        'user_id',
        'fundraising_id',
    ];

    /**
     * The user that belong to the Donation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * The fundraising that belong to the Donation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fundraising(): BelongsToMany
    {
        return $this->belongsToMany(Fundraising::class);
    }
}
