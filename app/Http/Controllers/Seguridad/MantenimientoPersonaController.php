<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class MantenimientoPersonaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seguridad.mantenimiento.personas');
    }

    /* */
    public function loadTelefonos()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . "/mostrar/telefonos")->object();
        foreach ($response[0] as $key => $value) {
            $value->persona = Crypt::encrypt($value->persona);
            $value->codTelefono = Crypt::encrypt($value->codTelefono);
            $value->numTelefono = "+" . $value->numArea . " " . substr($value->numTelefono, 0, 4) . "-" . substr($value->numTelefono, 4);
            $value->tipoTelefono = $value->tipoTelefono == "F" ? "Fijo" : "Celular";
        }

        $data = $response[0];
        return Datatables::of($data)
            ->addColumn('Opciones', function ($data) {
                $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro"
                    onclick="eliminarTelefono(\'' . $data->codTelefono . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar registro" 
                    onclick="editarTelefono(\'' . $data->codTelefono . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                $opciones .= '<button class="btn btn-sm btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro" 
                    onclick="verTelefono(\'' . $data->codTelefono . '\')"
                    ><i class="fas fa-lg fa-fw fa-eye"></i></button>';
                return $opciones;
            })
            ->rawColumns(['Opciones'])
            ->make(true);
    }

    /* */
    public function loadPuestos()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . "/mostrar/cargos")->object();
        foreach ($response[0] as $key => $value) {
            $value->cargo = Crypt::encrypt($value->cargo);
        }

        $data = $response[0];
        return Datatables::of($data)
            ->addColumn('Opciones', function ($data) {
                $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro"
                    onclick="eliminarPuesto(\'' . $data->cargo . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar registro" 
                    onclick="editarPuesto(\'' . $data->cargo . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                $opciones .= '<button class="btn btn-sm btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro" 
                    onclick="verPuesto(\'' . $data->cargo . '\')"
                    ><i class="fas fa-lg fa-fw fa-eye"></i></button>';
                return $opciones;
            })
            ->rawColumns(['Opciones'])
            ->make(true);
    }

    /* */
    public function storeTelefono(Request $request)
    {
        $API = Config::get('constants.API');
        $response = Http::post($API . "/crear/telefono", [
            "cod" => Crypt::decrypt($request->c_persona),
            "numArea" => $request->c_area_telefono_persona,
            "numTelefono" => $request->c_numero_telefono_persona,
            "tipoTelefono" => $request->c_tipo_telefono,
            "desTelefono" => $request->c_descripcion_telefono
        ]);

        return $response->json();
    }

    /* */
    public function editTelefono($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::get($API . "/mostrar/telefonos/$id")->object();
            $response[0]["0"]->codTelefono = Crypt::encrypt($response[0]["0"]->codTelefono);
            $response[0]["0"]->tipoTelefono = $response[0]["0"]->tipoTelefono == "F" ? "Fijo" : "Celular";

            return $response[0]["0"];
        } catch (DecryptException $e) {
            return false;
        }
    }

    /* */
    public function updateTelefono(Request $request, $id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::put($API . "/update/telefono/$id", [
                "numArea" => $request->u_area_telefono_persona,
                "numTelefono" => $request->u_numero_telefono_persona,
                "tipoTelefono" => $request->u_tipo_telefono,
                "desTelefono" => $request->u_descripcion_telefono
            ]);

            return $response->json();
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /* */
    public function destroyTelefono($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::delete($API . "/delete/telefono/$id")->object();
            return $response;
        } catch (DecryptException $e) {
            return false;
        }
    }

    /* */
    public function storePuesto(Request $request)
    {
        $API = Config::get('constants.API');
        $response = Http::post($API . "/crear/cargo", [
            "nombreCargo" => $request->c_nombre_puesto_trabajo,
            "desCargo" => $request->c_descripcion_puesto_trabajo,
        ]);

        return $response->json();
    }

    /* */
    public function editPuesto($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::get($API . "/mostrar/cargos/$id")->object();
            $response[0]["0"]->cargo = Crypt::encrypt($response[0]["0"]->cargo);

            return $response[0]["0"];
        } catch (DecryptException $e) {
            return false;
        }
    }

    /* */
    public function updatePuesto(Request $request, $id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::put($API . "/update/cargo/$id", [
                "nombreCargo" => $request->u_nombre_puesto_trabajo,
                "desCargo" => $request->u_descripcion_puesto_trabajo,
            ]);

            return $response->json();
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /* */
    public function destroyPuesto($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::delete($API . "/delete/cargo/$id")->object();
            return $response;
        } catch (DecryptException $e) {
            return false;
        }
    }
}
