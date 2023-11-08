<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function subcategorias(){
        return $this->hasMany(SubCategoria::class);

    }

    public function medicamentos(){
        return $this->hasMany(Medicamentos::class);

    }
}
