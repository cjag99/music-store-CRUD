<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'price',
        'weight',
        'is_acoustic',
        'release_year',
        'category_id'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'weight' => 'float',
        'is_acoustic' => 'boolean',
        'release_year' => 'integer',
        'category_id' => 'integer'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
