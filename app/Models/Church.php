<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parishioner;
use App\Models\Bapstismal;
use App\Models\Confirmations;
use App\Models\Marriages;
use App\Models\Death;

class Church extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parishioners(){
        return $this->hasMany(Parishioner::class);
    }

    public function baptismals(){
        return $this->hasMany(Bapstismal::class);
    }

    public function confirmations(){
        return $this->hasMany(Confirmations::class);
    }

    public function marriages(){
        return $this->hasMany(Marriages::class);
    }

    public function death(){
        return $this->hasMany(Death::class);
    }
}
