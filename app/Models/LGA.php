<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LGA extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'state_id']; 

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function ward()
    {
        return $this->hasMany(Ward::class);
    }
}
