<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundraisingCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name',
    ];

    /**
     * Get all of the fundraisings for the FundraisingCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fundraisings(): HasMany
    {
        return $this->hasMany(Fundraising::class, 'category_id', 'id');
    }
}
