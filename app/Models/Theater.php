<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    protected $table = 'theaters';

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
