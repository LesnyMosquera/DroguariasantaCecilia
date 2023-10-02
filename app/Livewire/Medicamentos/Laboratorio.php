<?php

namespace App\Livewire\Medicamentos;

use Livewire\Component;



class Laboratorio extends Component
{
    public $laboratorio;
    public $descripcion;
    public $imagen;

    public function saveLaboratorio(){
        Laboratorio::create(
           $this->only(['laboratorio','descripcion'])
        );
       }

    public function render()
    {

        return view('livewire.medicamentos.laboratorio');
    }
}
