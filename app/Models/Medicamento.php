<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function categoria(){
        return $this->hasOne(Categoria::class);
    }
     public function tipoMedicamentos(){
        return $this->hasOne(TipoMedicamento::class);
    }

    public function viaAdministracion(){
        return $this->hasOne(ViaAdministracion::class);
    }

    public function presentacionMedicamento(){
        return $this->hasOne(PresentacionMedicamento::class);
    }


}
