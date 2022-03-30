<?php

namespace App\View\Components\modal\create;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class createMedicamento extends Component
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
            $tiposMedicamentos = Http::get($API . "/mostrar/tipo/medicamentos")->object();
            $tipos = $tiposMedicamentos[0];
            $unidadPresentacion = Http::get($API . "/mostrar/unidades/presentacion")->object();
            $presentaciones = $unidadPresentacion[0];

            foreach ($tipos as $key => $value) {
                $value->codigoTipo = Crypt::encrypt($value->codigoTipo);
            }

            foreach ($presentaciones as $key => $value) {
                $value->codigoPresentacion = Crypt::encrypt($value->codigoPresentacion);
            }

            return view('components.modal.create.create-medicamento', compact('tipos', 'presentaciones'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
