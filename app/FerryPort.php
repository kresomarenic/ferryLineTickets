<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FerryPort extends Model
{
    protected $fillable = ['ferry_port_name', 'city_id'];

    public function city()
    {
        return $this->belongsTo(\App\City::class);
    }
}
