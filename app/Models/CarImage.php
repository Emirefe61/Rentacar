<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    protected $fillable = [
        'car_id',
        'path',
        'is_thumbnail',
        'order',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
