<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = ['citizen_name', 'citizen_surname', 'citizen_oib', 'city_id', 'category_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }


}

