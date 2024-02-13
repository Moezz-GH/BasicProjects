<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Events extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'time',
        'capacity',
        'price',
        'categories_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'price' => 'decimal',
        'categories_id' => 'integer',
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function eventImages(): HasMany
    {
        return $this->hasMany(EventImages::class);
    }
}
