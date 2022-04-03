<?php

namespace App\View\Components\modal\update;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class updateUsuario extends Component
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
            $response2 = Http::get($API . "/mostrar/roles")->object();
            $roles = $response2[0];

            foreach ($roles as $key => $value) {
                $value->codigo = Crypt::encrypt($value->codigo);
            }

            return view('components.modal.update.update-usuario', compact('roles'));
        } catch (DecryptException $e) {
            return false;
        }
    }
}
