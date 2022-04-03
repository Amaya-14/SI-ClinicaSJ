<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class RolPermisoController extends Controller
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
        return view('seguridad.roles-permisos');
    }

    /**
     * Muestra la lista de roles.
     */
    public function loadRoles()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . '/mostrar/roles')->object();

        foreach ($response[0] as $key => $value) {
            $value->codigo = Crypt::encrypt($value->codigo);
        }
        $data = $response[0];
        return Datatables::of($data)
            ->addColumn('Opciones', function ($data) {
                $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar rol"
                    onclick="eliminarRol(\'' . $data->codigo . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar rol" 
                    onclick="editarRol(\'' . $data->codigo . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                return $opciones;
            })
            ->rawColumns(['Opciones'])
            ->make(true);
    }

    /**
     * Muestra la lista de objetos.
     */
    public function loadObjetos()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . '/mostrar/objetos')->object();
        foreach ($response[0] as $key => $value) {
            $value->codigo = Crypt::encrypt($value->codigo);
        }
        $data = $response[0];
        return Datatables::of($data)
            ->addColumn('Opciones', function ($data) {
                $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar objeto"
                    onclick="eliminarObjeto(\'' . $data->codigo . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar objeto" 
                    onclick="editarObjeto(\'' . $data->codigo . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                return $opciones;
            })
            ->rawColumns(['Opciones'])
            ->make(true);
    }

    /** 
     * Muestra la lista de permisos.
     */
    public function loadPermisos()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . '/mostrar/permisos')->object();
        foreach ($response[0] as $key => $value) {
            $value->codigoRol = Crypt::encrypt($value->codigoRol);
            $value->codigoObjeto = Crypt::encrypt($value->codigoObjeto);
            $value->visualizar = $value->visualizar ? 'SI' : 'NO';
            $value->consultar = $value->consultar ? 'SI' : 'NO';
            $value->insertar = $value->insertar ? 'SI' : 'NO';
            $value->actualizar = $value->actualizar ? 'SI' : 'NO';
            $value->eliminar = $value->eliminar ? 'SI' : 'NO';
        }
        $data = $response[0];
        return Datatables::of($data)
            ->addColumn('Opciones', function ($data) {
                $opciones = '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar objeto" 
                    onclick="editarPermiso(\'' . $data->codigoRol . '\',\'' . $data->codigoObjeto . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';

                return $opciones;
            })
            ->rawColumns(['Opciones'])
            ->make(true);
    }

    /**
     * 
     */
    public function storeRol(Request $request)
    {
        $API = Config::get('constants.API');
        $response = Http::post($API . "/crear/rol", [
            "nombre" => $request->c_nombre_rol,
        ]);

        return $response->json();
    }

    /**
     * 
     */
    public function storeObjeto(Request $request)
    {
        $API = Config::get('constants.API');
        $response = Http::post($API . "/crear/objeto", [
            "nombre" => $request->c_nombre_objeto,
        ]);

        return $response->json();
    }

    /** 
     * 
     */
    public function editRol($id)
    {
        $API = Config::get('constants.API');
        $id = Crypt::decrypt($id);
        $response = Http::get($API . "/mostrar/roles/$id")->object();
        $response[0]["0"]->codigo = Crypt::encrypt($response[0]["0"]->codigo);

        return $response[0]["0"];
    }

    /** 
     * 
     */
    public function editObjeto($id)
    {
        $API = Config::get('constants.API');
        $id = Crypt::decrypt($id);
        $response = Http::get($API . "/mostrar/objetos/$id")->object();
        $response[0]["0"]->codigo = Crypt::encrypt($response[0]["0"]->codigo);

        return $response[0]["0"];
    }

    /** 
     * 
     */
    public function editPermiso($rol, $obj)
    {
        $API = Config::get('constants.API');
        $rol = Crypt::decrypt($rol);
        $obj = Crypt::decrypt($obj);
        $response = Http::get($API . "/mostrar/permisos/$rol/$obj")->object();
        $response[0]["0"]->codigoRol = Crypt::encrypt($response[0]["0"]->codigoRol);
        $response[0]["0"]->codigoObjeto = Crypt::encrypt($response[0]["0"]->codigoObjeto);

        return $response[0]["0"];
    }

    /**
     * 
     */
    public function updateRol(Request $request, $id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::put($API . "/update/rol/$id", [
                "nombre" => $request->u_nombre_rol
            ])->object();

            return $response;
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /**
     * 
     */
    public function updateObjeto(Request $request, $id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::put($API . "/update/objeto/$id", [
                "nombre" => $request->u_nombre_objeto
            ])->object();

            return $response;
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /**
     * 
     */
    public function updatePermiso(Request $request, $rol, $obj)
    {
        try {
            $API = Config::get('constants.API');
            $rol = Crypt::decrypt($rol);
            $obj = Crypt::decrypt($obj);

            $visualizar = isset($request->u_visualizar) ? 1 : 0;
            $consultar = isset($request->u_consultar) ? 1 : 0;
            $insertar = isset($request->u_insertar) ? 1 : 0;
            $actualizar = isset($request->u_actualizar) ? 1 : 0;
            $eliminar = isset($request->u_eliminar) ? 1 : 0;

            $response = Http::put($API . "/update/permiso/$rol/$obj", [
                "visualizar" => $visualizar,
                "consultar" => $consultar,
                "insertar" => $insertar,
                "actualizar" => $actualizar,
                "eliminar" => $eliminar
            ])->object();

            return $response;
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /**
     * 
     */
    public function destroyRol($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::delete($API . "/delete/rol/$id")->object();
            return $response;
        } catch (DecryptException $e) {
            return false;
        }
    }

    /**
     * 
     */
    public function destroyObjeto($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::delete($API . "/delete/objeto/$id")->object();
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
