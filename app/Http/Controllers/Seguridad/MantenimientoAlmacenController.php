<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class MantenimientoAlmacenController extends Controller
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
        return view('seguridad.mantenimiento.almacen');
    }

    public function loadTiposMedicamentos(Request $request)
    {
        if ($request->ajax()) {
            $API = Config::get('constants.API');
            $response = Http::get($API . "/mostrar/tipo/medicamentos")->object();
            foreach ($response[0] as $key => $value) {
                $value->codigo = Crypt::encrypt($value->codigo);
            }
            $data = $response[0];
            return Datatables::of($data)
                ->addColumn('Opciones', function ($data) {
                    $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro"
                    onclick="eliminar(\'' . $data->codigo . '\',\'' . Crypt::encrypt('Tmed') . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar registro" 
                    onclick="editar(\'' . $data->codigo . '\',\'' . Crypt::encrypt('Tmed') . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                    return $opciones;
                })
                ->rawColumns(['Opciones'])
                ->make(true);
        }
    }

    public function loadUnidsPres(Request $request)
    {
        if ($request->ajax()) {
            $API = Config::get('constants.API');
            $response = Http::get($API . "/mostrar/unidades/presentacion")->object();
            foreach ($response[0] as $key => $value) {
                $value->codigo = Crypt::encrypt($value->codigo);
            }
            $data = $response[0];
            return Datatables::of($data)
                ->addColumn('Opciones', function ($data) {
                    $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro"
                    onclick="eliminar(\'' . $data->codigo . '\',\'' . Crypt::encrypt('UniPres') . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar registro" 
                    onclick="editar(\'' . $data->codigo . '\',\'' . Crypt::encrypt('UniPres') . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                    return $opciones;
                })
                ->rawColumns(['Opciones'])
                ->make(true);
        }
    }

    public function loadTiposMateriales(Request $request)
    {
        if ($request->ajax()) {
            $API = Config::get('constants.API');
            $response = Http::get($API . "/mostrar/tipo/materiales")->object();
            foreach ($response[0] as $key => $value) {
                $value->codigo = Crypt::encrypt($value->codigo);
            }
            $data = $response[0];
            return Datatables::of($data)
                ->addColumn('Opciones', function ($data) {
                    $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro"
                    onclick="eliminar(\'' . $data->codigo . '\',\'' . Crypt::encrypt('Tmat') . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar registro" 
                    onclick="editar(\'' . $data->codigo . '\',\'' . Crypt::encrypt('Tmat') . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                    return $opciones;
                })
                ->rawColumns(['Opciones'])
                ->make(true);
        }
    }

    public function storeRegistro(Request $request)
    {
        $API = Config::get('constants.API');
        $str = $request->c_tipo_registro;

        if ($str == 'Tmed') {
            $response = Http::post($API . "/crear/tipo/medicamento", [
                "nombre" => $request->c_nombre_registro,
                "descripcion" => $request->c_descripcion_registro,
            ]);
        }

        if ($str == 'UniPres') {
            $response = Http::post($API . "/crear/unidad/presentacion", [
                "nombre" => $request->c_nombre_registro,
            ]);
        }

        if ($str == 'Tmat') {
            $response = Http::post($API . "/crear/tipo/material", [
                "nombre" => $request->c_nombre_registro,
                "descripcion" => $request->c_descripcion_registro,
            ]);
        }

        return $response->json();
    }

    public function editRegistro($id, $str)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $val = Crypt::decrypt($str);

            if ($val == 'Tmed') $response = Http::get($API . "/mostrar/tipo/medicamentos/$id")->object();
            if ($val == 'UniPres') $response = Http::get($API . "/mostrar/unidades/presentacion/$id")->object();
            if ($val == 'Tmat') $response = Http::get($API . "/mostrar/tipo/materiales/$id")->object();

            $response[0]["0"]->codigo = Crypt::encrypt($response[0]["0"]->codigo);
            array_push($response[0], $val, $str);

            return $response[0];
        } catch (DecryptException $e) {
            return false;
        }
    }

    public function updateRegistro(Request $request, $id)
    {

        $API = Config::get('constants.API');
        $str = $request->u_tipo_registro;
        $id = Crypt::decrypt($id);

        if ($str == 'Tmed') {
            $response = Http::put($API . "/actualizar/tipo/medicamento/$id", [
                "nombre" => $request->u_nombre_registro,
                "descripcion" => $request->u_descripcion_registro,
            ]);
        }

        if ($str == 'UniPres') {
            $response = Http::put($API . "/actualizar/unidad/presentacion/$id", [
                "nombre" => $request->u_nombre_registro,
            ]);
        }

        if ($str == 'Tmat') {
            $response = Http::put($API . "/actualizar/tipo/material/$id", [
                "nombre" => $request->u_nombre_registro,
                "descripcion" => $request->u_descripcion_registro,
            ]);
        }

        return $response->json();
    }

    public function destroyRegistro($id, $str)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $str = Crypt::decrypt($str);

            if ($str == 'Tmed') $response = Http::delete($API . "/delete/tipo/medicamento/$id")->object();
            if ($str == 'UniPres') $response = Http::delete($API . "/delete/unidad/presentacion/$id")->object();
            if ($str == 'Tmat') $response = Http::delete($API . "/delete/tipo/material/$id")->object();

            return $response;
        } catch (DecryptException $e) {
            return false;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
