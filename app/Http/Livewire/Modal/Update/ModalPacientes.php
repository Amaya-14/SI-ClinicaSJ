<?php

namespace App\Http\Livewire\Modal\Update;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class ModalPacientes extends Component
{
    public $codigoPaciente, $codigoPersona;
    public $telefonos = [];
    public $correos = [];
    public $direcciones = [];
    public $identidad, $nacionalidad, $nombres, $apellidos, $sexo, $fecha_nacimiento, $edad, $estado_civil;

    protected $listeners = [
        'obtenerPaciente',
    ];

    public function render()
    {
        return view('livewire.modal.update.modal-pacientes');
        
    }

    public function obtenerPaciente($codigoPaciente, $codigoPersona)
    {
        $this->codigoPaciente = $codigoPaciente;
        $this->codigoPersona = $codigoPersona;

        $this->codigoPaciente = Crypt::decrypt($this->codigoPaciente);
        $this->codigoPersona = Crypt::decrypt($this->codigoPersona);

        $data = Http::get("http://localhost:3001/pacientes/$this->codigoPaciente")->object();
        dd($data);

        // try    {
        //     $this->codigoPaciente = Crypt::decrypt($this->codigoPaciente);
        //     $this->codigoPersona = Crypt::decrypt($this->codigoPersona);

        //     $data = Http::get("http://localhost:3001/pacientes/$this->codigoPaciente")->object();
        //     //$data[0]->fecha = substr($data[0]->fechaNacimiento, 0, 10);

        //     $this->identidad = $data[0]->dni;
        //     $this->nacionalidad = $data[0]->nacionalidad;
        //     $this->nombres = $data[0]->nombres;
        //     $this->apellidos = $data[0]->apellidos;
        //     $this->sexo = $data[0]->sexo;
        //     $this->fecha_nacimiento = substr($data[0]->fechaNacimiento, 0, 10);
        //     $this->edad = $data[0]->edad;
        //     $this->estado_civil = $data[0]->estadoCivil;

        //     $this->telefonos = Http::get("http://localhost:3001/telefonos/$this->codigoPersona")->object();
        //     $this->correos = Http::get("http://localhost:3001/correos/$this->codigoPersona")->object();
        //     $this->direcciones = Http::get("http://localhost:3001/direcciones/$this->codigoPersona")->object();

        //     $this->emit("abrirModal", "updatePaciente");
        // } catch (DecryptException $e) {
        //     return $e;
        // }
    }

    public function actualizarPaciente()
    {
        dd($this->identidad);
    }

    public function buscarRegistro($str, $codigo)
    {
        //dd($str, $codigo, $this->telefonos);

        //$this->emit("cerrarModal", "updatePaciente");
        $this->emit("abrirModal", "updateTelefono");
    }
}
