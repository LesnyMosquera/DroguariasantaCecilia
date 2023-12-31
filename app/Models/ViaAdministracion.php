<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViaAdministracion extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function medicamentos(){
        return $this->hasOne(Medicamentos::class);
    }
}
