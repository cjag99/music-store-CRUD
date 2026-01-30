<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'family'
    ];

    public function instruments()
    {
        return $this->hasMany(Instrument::class);
    }
}
