<?php

namespace App\Livewire;

use Livewire\Component;

class ShowCategoria extends Component
{
    public $title="Categoria";
    public $mostrar=0;
    public $modal = false;
    public $buscar="hola busqueda";
    public function mount(){
        $this->modal = "true";
    }
    public function render()
    {
        return view('livewire.show-categoria');
    }
}
