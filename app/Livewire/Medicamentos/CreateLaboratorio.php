<?php

namespace App\Livewire\Medicamentos;

use Livewire\Component;
use App\Models\Laboratorio;

class CreateLaboratorio extends Component
{
    public $laboratorio, $descripcion, $imagen;
    public $title="LABORATORIO";

    public function saveLaboratorio(){
        Laboratorio::create(
           $this->only(['laboratorio','descripcion'])
        );
       }
    public function render()
    {
        $lab=Laboratorio::all();
        return view('livewire.medicamentos.create-laboratorio', compact('lab'));

    }
}
