<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The post that belong to the PostComment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(post::class);
    }
}
