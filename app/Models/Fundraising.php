<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fundraising extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'slug',
        'collected_fund',
        'target_fund',
        'description',
        'type',
        'status',
        'deadline',
        'submission_status',
        'user_id',
        'category_id',
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
    ];

    /**
     * Get the user that owns the Fundraising
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the fundraisingcategory that owns the Fundraising
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(FundraisingCategory::class, 'category_id', 'id');
    }

    /**
     * Get all of the donations for the Fundraising
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class, 'fundraising_id', 'id');
    }
}
