<?php

namespace App\Http\Livewire\DataTable;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class TablaEmpleados extends Component
{
    public function render()
    {
        $API = Config::get('constants.API');
        $empleados = Http::get($API . 'empleados')->object();

        $empleados = $empleados[0];
        return view('livewire.data-table.tabla-empleados', compact('empleados'));
    }

    public function buscarEmpleado($codigoEmpleado, $codigoPersona)
    {
        $this->emit('obtenerEmpleado', $codigoEmpleado, $codigoPersona);
    }
}
