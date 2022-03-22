<?php

namespace App\Http\Livewire\Modal\Create;

use Illuminate\Support\Facades\Http;

use Livewire\Component;

class ModalPacientes extends Component
{
    public $identidad, $nacionalidad, $nombres, $apellidos, $sexo, $fecha_nacimiento, $edad, $estado_civil, $telefono, $tipo_telefono, $descripcion, $direccion, $referencia, $correo;
    public $area = 504;

    public function render()
    {
        return view('livewire.modal.create.modal-pacientes');
    }

    public function submit()
    {
        $response = Http::post('http://localhost:3000/paciente', [
            'identidad' => $this->identidad,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'nacionalidad' => $this->nacionalidad,
            'edad' => $this->edad,
            'fechaNacimiento' => $this->fecha_nacimiento,
            'sexo' => $this->sexo,
            'estadoCivil' => $this->estado_civil,

            'numArea' => $this->area,
            'numTelefono' => $this->telefono,
            'tipoTelefono' => $this->tipo_telefono,
            'desTelefono' => $this->descripcion,

            'direccion' => $this->direccion,
            'desDireccion' => $this->referencia,

            'correo' => $this->correo,
        ]);
    }
}
