<?php

namespace App\Livewire\Medicamentos;
use Livewire\Component;
use App\Models\Laboratorio;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class CreateLaboratorio extends Component
{
    use WithFileUploads;
    public $laboratorio, $descripcion, $imagen;
    public $mostrar=0; //Variable para mostrar u ocultar el formulario de crear
    public $modal=false;
    public $title="LABORATORIO";
    public $buscar;
    public $imagenName='Avatar'.'aviif';
    public $updateLab; //variable para actualizar y eliminar
    public $open=false;
    public $abrirmodal=true;

    public function clearForm(){
       $borrar=[
            'laboratorio'=> '',
            'descripcion'=> '',
            'imagen'=> '',
        ];
    }
    public function saveLaboratorio(){
        $this->validate([
            'laboratorio' =>'required|min:2|max:20',
            'imagen'=>'image|min:1|max:4096'
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
            $this->open=true;
       }
    public function render()
    {
        $lab=Laboratorio::where('laboratorio', 'like', '%'.$this->buscar .'%')->paginate(20);
        return view('livewire.medicamentos.create-laboratorio', compact('lab'));
    }
    public function editar(Laboratorio $lab) {
    $this->laboratorio=$lab->laboratorio;
    $this->descripcion=$lab->descripcion;
    $this->imagen=$lab->imagen;
    $this->updateLab=$lab->id;
    $this->modal='true';
    }

    public function updateLaboratorio() {
        $actualizarlab=Laboratorio::find($this->updateLab);
        if($this->imagen){
            $imagenName='laboratorio/'.uniqid().'.'.$this->imagen->extension();
            $this->imagen->storeAs('public',$imagenName);
        }
        $actualizarlab->update([
            'laboratorio' => $this->laboratorio,
            'descripcion' => $this->descripcion,
            'imagen' => $imagenName,
        ]);

    }
    public function delete(){
        Laboratorio::find($this->updateLab)->delete();
       $this->modal=false;
    }

}
