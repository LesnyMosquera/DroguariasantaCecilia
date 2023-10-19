<?php

namespace App\Livewire\Medicamentos;

use Livewire\Component;
use App\Models\Laboratorio;
use Livewire\WithFileUploads;

class CreateLaboratorio extends Component
{
    use WithFileUploads;
    public $laboratorio, $descripcion, $imagen;
    public $mostrar=0;
    public $modal=false;
    public $title="LABORATORIO";
    public $buscar;
    public $imagenName='Avatar'.'aviif';

    public function saveLaboratorio(){

        $this->validate([
            'laboratorio' =>'required|min:2|max:15',
            'imagen'=>'min:30|max:4096'

        ]);
        if($this->imagen){
            $imagenName='laboratorio/'.uniqid().'.'.$this->imagen->extension();
            $this->imagen->storeAs('public',$imagenName);
        }
        Laboratorio::create([
             'laboratorio' => $this->laboratorio,
             'descripcion' => $this->descripcion,
             'imagen' => $imagenName,
            ]);
            $this->reset();
       }
       public function resetForm(){
        $this->reset();
       }
    public function render()
    {
        $lab=Laboratorio::where('laboratorio', 'like', '%'.$this->buscar .'%')->paginate(20);
        return view('livewire.medicamentos.create-laboratorio', compact('lab'));
    }

}
