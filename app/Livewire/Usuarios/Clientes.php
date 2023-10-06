<?php

namespace App\Livewire\Usuarios;

use Livewire\Component;

class Clientes extends Component
{
    public $buscar="esto es lo que busco";
    public function render()
    {
        return view('livewire.usuarios.clientes')->layout('drogueria.usuarios.clientes.index')->render();
        $this->buscar;
    }
}
