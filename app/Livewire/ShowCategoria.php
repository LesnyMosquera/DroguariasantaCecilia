<?php

namespace App\Livewire;

use Livewire\Component;

class ShowCategoria extends Component
{
    public $title="Categoria";
    public $mostrar=0;
    public $open =true;
    public $buscar="hola busqueda";
    public function mount(){

    }
    public function render()
    {
        return view('livewire.show-categoria');
    }
}
