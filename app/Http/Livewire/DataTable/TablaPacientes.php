<?php

namespace App\Http\Livewire\DataTable;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class TablaPacientes extends Component
{
    protected $listeners  = [
        'loadTabla' => 'render'
    ];
    public function render()
    {
        $API = Config::get('constants.API');
        $pacientes = Http::get($API . 'pacientes')->object();
        //dd($pacientes);


        $pacientes = $pacientes[0];
        return view('livewire.data-table.tabla-pacientes', compact('pacientes'));
    }

    public function buscarPaciente($codigoPaciente, $codigoPersona)
    {

        $this->emit('obtenerPaciente', $codigoPaciente, $codigoPersona);
        $this->emit('loadTabla');
    }
}
