<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
class Command extends Model
{
    protected $fillable = [
        'dateL',
        'dateR'

    ];
    protected $gruaded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function car()
    {
        return $this->hasOne(Car::class);
    }
}

