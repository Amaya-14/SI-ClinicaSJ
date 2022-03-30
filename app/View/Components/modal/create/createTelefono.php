<?php

namespace App\View\Components\modal\create;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class createTelefono extends Component
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
            $response = Http::get($API . "/mostrar/personas")->object();
            $personas = [];
            foreach ($response[0] as $key => $value) {
                array_push($personas, [
                    "codigo" => Crypt::encrypt($value->persona),
                    "nombrePersona" => $value->nombres . " " . $value->apellidos,
                ]);
            }

            return view('components.modal.create.create-telefono', compact('personas'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
