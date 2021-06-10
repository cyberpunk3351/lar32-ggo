<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;

    public function employes() {
        return $this->hasOne(Employes::class, 'employe_position', 'position_id', 'employes_id');
    }
}
