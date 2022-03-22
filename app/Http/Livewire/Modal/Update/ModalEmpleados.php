<?php

namespace App\Http\Livewire\Modal\Update;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class ModalEmpleados extends Component
{
    public $codigoEmpleado, $codigoPersona;
    public $telefonos = [];
    public $correos = [];
    public $direcciones = [];
    public $identidad, $nacionalidad, $nombres, $apellidos, $sexo, $fecha_nacimiento, $edad, $estado_civil;

    protected $listeners = [
        'obtenerEmpleado',
    ];

    public function render()
    {
        return view('livewire.modal.update.modal-empleados');
    }

    public function obtenerEmpleado($codigoEmpleado, $codigoPersona)
    {
        $this->codigoEmpleado = $codigoEmpleado;
        $this->codigoPersona = $codigoPersona;

        try {

            $this->codigoEmpleado = Crypt::decrypt($this->codigoEmpleado);
            $this->codigoPersona = Crypt::decrypt($this->codigoPersona);

            $data = Http::get("http://localhost:3000/empleado/$this->codigoEmpleado")->object();
            //$data[0]->fecha = substr($data[0]->fecha, 0, 10);

            $this->identidad = $data[0]->identidad;
            $this->nacionalidad = $data[0]->nacionalidad;
            $this->nombres = $data[0]->nombres;
            $this->apellidos = $data[0]->apellidos;
            $this->sexo = $data[0]->sexo;
            $this->fecha_nacimiento = substr($data[0]->fecha, 0, 10);
            $this->edad = $data[0]->edad;
            $this->estado_civil = $data[0]->estado_civil;

            $this->telefonos = Http::get("http://localhost:3000/telefonos/$this->codigoPersona")->object();
            $this->correos = Http::get("http://localhost:3000/correos/$this->codigoPersona")->object();
            $this->direcciones = Http::get("http://localhost:3000/direcciones/$this->codigoPersona")->object();

            $this->emit("abrirModal", "updateEmpleado");
        } catch (DecryptException $e) {
            return $e;
        }
    }
}
