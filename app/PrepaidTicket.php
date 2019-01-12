<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrepaidTicket extends Model
{
    protected $fillable = ['citizen_id', 'ferry_line_id', 'valid_from', 'valid_to'];

    public function citizen()
    {
        return $this->belongsTo(\App\Citizen::class);
    }  
    
    public function ferryLine()
    {
        return $this->belongsTo(\App\FerryLine::class);
    }
}

