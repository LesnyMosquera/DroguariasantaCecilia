<?php

namespace App\Livewire\Medicamentos;

use Livewire\Component;
use App\Models\Laboratorio;
use Livewire\WithFileUploads;

class CreateLaboratorio extends Component
{
    public $laboratorio, $descripcion, $imagen;
    public $mostrar=false;
    public $title="LABORATORIO";
    public $buscar;






    public function saveLaboratorio(){
        $imgen=$this->imagen->store('imagen');
        Laboratorio::create(
           $this->only(['laboratorio','descripcion', 'imagen'])
        );
       }
       public function resetForm(){
        $this->reset();
       }
    public function render()
    {
        $lab=Laboratorio::where('laboratorio', 'like', '%'.$this->buscar .'%')->get();
        return view('livewire.medicamentos.create-laboratorio', compact('lab'));
    }

}
