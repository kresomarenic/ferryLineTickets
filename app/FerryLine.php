<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FerryLine extends Model
{
    protected $fillable = ['departure_port_id', 'destination_port_id'];

    
    public function departureFerryPort()
    {
        return $this->belongsTo(\App\FerryPort::class, 'departure_port_id');
    }
    
    public function destinationFerryPort()
    {
        return $this->belongsTo(\App\FerryPort::class, 'destination_port_id');
    } 
    
}
