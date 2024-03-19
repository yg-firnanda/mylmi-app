<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'post_id',
    ];

    /**
     * The user that belong to the PostComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * The post that belong to the PostComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function post(): BelongsToMany
    {
        return $this->belongsToMany(post::class);
    }
}
