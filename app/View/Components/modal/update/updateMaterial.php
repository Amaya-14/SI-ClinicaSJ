<?php

namespace App\View\Components\modal\update;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class updateMaterial extends Component
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
            $tiposMateriales = Http::get($API . "/mostrar/tipo/materiales")->object();
            $tipos = $tiposMateriales[0];


            foreach ($tipos as $key => $value) {
                $value->codigoTipo = Crypt::encrypt($value->codigoTipo);
            }

            return view('components.modal.update.update-material', compact('tipos'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
