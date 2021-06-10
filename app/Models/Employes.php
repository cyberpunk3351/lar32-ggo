<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    use HasFactory;

    public function positions() {
        return $this->hasOne(Positions::class, 'employe_position', 'employes_id', 'position_id');
    }
}
