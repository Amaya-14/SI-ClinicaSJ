<?php

namespace App\View\Components\modal\create;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class createEmpleado extends Component
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
            $response = Http::get($API . "/mostrar/cargos")->object();
            $cargos = $response[0];

            foreach ($cargos as $key => $value) {
                $value->cargo = Crypt::encrypt($value->cargo);
            }

            return view('components.modal.create.create-empleado', compact('cargos'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
