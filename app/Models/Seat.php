<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }
}
