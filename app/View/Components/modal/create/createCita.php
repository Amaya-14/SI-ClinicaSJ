<?php

namespace App\View\Components\modal\create;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class createCita extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        try {
            $API = Config::get('constants.API');
            $pacientes = Http::get($API . "/mostrar/pacientes")->object();
            $empleados = Http::get($API . "/mostrar/empleados")->object();
            $tipos = Http::get($API . "/mostrar/tipos")->object();
            $tipos = $tipos[0];
            $estados = Http::get($API . "/mostrar/estados")->object();
            $estados = $estados[0];
            $dataPacientes = [];
            $dataDoctores = [];

            foreach ($pacientes[0] as $key => $value) {
                array_push($dataPacientes, [
                    "codigoPaciente" => Crypt::encrypt($value->paciente),
                    "nombrePaciente" => $value->nombres . " " . $value->apellidos,
                ]);
            }
            foreach ($empleados[0] as $key => $value) {
                if ($value->nombreCargo == 'Médico') {
                    array_push($dataDoctores, [
                        "codigoDoctor" => Crypt::encrypt($value->empleado),
                        "nombreDoctor" => $value->nombres . " " . $value->apellidos
                    ]);
                }
            }

            foreach ($tipos as $key => $value) {
                $value->codigoTipo = Crypt::encrypt($value->codigoTipo);
            }

            foreach ($estados as $key => $value) {
                $value->codigoEstado = Crypt::encrypt($value->codigoEstado);
            }

            return view('components.modal.create.create-cita', compact('dataPacientes', 'dataDoctores', 'tipos', 'estados'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
