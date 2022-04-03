<?php

namespace App\View\Components\modal\create;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class createUsuario extends Component
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
            $response1 = Http::get($API . "/mostrar/empleados")->object();
            $response2 = Http::get($API . "/mostrar/roles")->object();
            $empleados = [];
            $roles = $response2[0];

            foreach ($response1[0] as $key => $value) {
                array_push($empleados, [
                    "codigo" => Crypt::encrypt($value->empleado),
                    "nombre" => $value->nombres . " " . $value->apellidos,
                ]);
            }

            foreach ($roles as $key => $value) {
                $value->codigo = Crypt::encrypt($value->codigo);
            }

            return view('components.modal.create.create-usuario', compact('empleados', 'roles'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
