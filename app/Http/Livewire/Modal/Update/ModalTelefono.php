<?php

namespace App\Http\Livewire\Modal\Update;

use Livewire\Component;

class ModalTelefono extends Component
{
    //public $area, $numero, $tipo, $descripcion;

    protected $listeners = [
        'obetenerRegistro',
    ];

    public function render()
    {
        return view('livewire.modal.update.modal-telefono');
    }

    public function obetenerRegistro()
    {
        $this->emit("abrirModal", "updateTelefono");
    }
}
