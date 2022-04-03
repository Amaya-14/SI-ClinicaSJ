<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    use RegistersUsers;

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
        return view('seguridad.usuarios');
    }

    /**
     * 
     */
    public function loadUsuarios()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . "/mostrar/usuarios")->object();
        $data = $response[0];
        foreach ($data as $key => $value) {
            $value->codigoRelacion = Crypt::encrypt($value->codigoRelacion);
            $value->codigoUsuario = Crypt::encrypt($value->codigoUsuario);
            $value->codigoRol = Crypt::encrypt($value->codigoRol);
            $value->codigoEmpleado = Crypt::encrypt($value->codigoEmpleado);
        }
        return Datatables::of($data)->addColumn('opciones', function ($data) {
            $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar usuario"
                onclick="eliminar(\'' . $data->codigoUsuario . '\')"
                ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
            $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar usuario" 
                onclick="editar(\'' . $data->codigoRelacion . '\')"
                ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
            $opciones .= '<button class="btn btn-sm btn-xs btn-secondary text-white mx-1 shadow" title="Ver usuario" 
                onclick="ver(\'' . $data->codigoRelacion . '\')"
                ><i class="fas fa-lg fa-fw fa-eye"></i></button>';
            return $opciones;
        })
            ->rawColumns(['opciones'])
            ->make(true);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function store(Request $request)
    {
        try {
            $API = Config::get('constants.API');
            $rol = Crypt::decrypt($request->c_rol);
            $empleado = Crypt::decrypt($request->c_empleado);

            $response = Http::post($API . "/crear/usuario", [
                "name" => $request->c_name,
                "email" => $request->c_email,
                "password"  => Hash::make($request->c_password),
                "rol"  => $rol,
                "empleado" => $empleado
            ]);
            return $response->json();
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $API = Config::get('constants.API');
        $id = Crypt::decrypt($id);

        $empleado = Http::get($API . "/mostrar/empleados/$id")->object();
        $id = $empleado[0]["0"]->persona;

        $correos = Http::get($API . "/mostrar/correos/$id")->object();
        if (sizeof($correos[0]) > 0) {
            $correos[0]["0"]->codCorreo = Crypt::encrypt($correos[0]["0"]->codCorreo);
        }

        return response()->json($correos[0]["0"]);
    }

    public function edit($id)
    {
        $API = Config::get('constants.API');
        $id = Crypt::decrypt($id);
        $response = Http::get($API . "/mostrar/usuarios/$id")->object();
        $response[0]["0"]->codigoRelacion = Crypt::encrypt($response[0]["0"]->codigoRelacion);
        $response[0]["0"]->codigoUsuario = Crypt::encrypt($response[0]["0"]->codigoUsuario);
        $response[0]["0"]->codigoRol = Crypt::encrypt($response[0]["0"]->codigoRol);
        $response[0]["0"]->codigoEmpleado = Crypt::encrypt($response[0]["0"]->codigoEmpleado);

        return $response[0]["0"];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rol, $rel)
    {
        try {
            $API = Config::get('constants.API');
            $idRol = Crypt::decrypt($rol);
            $idRel = Crypt::decrypt($rel);
            $nombreRol = Crypt::decrypt($request->u_rol);

            $response = Http::put($API . "/update/usuario/$idRol/$idRel", [
                "name" => $request->u_name,
                "email" => $request->u_email,
                "rol"  => $nombreRol,
            ]);
            return $response->json();
        } catch (DecryptException $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::delete($API . "/delete/usuario/$id")->object();
            return $response;
        } catch (DecryptException $e) {
            return false;
        }
    }
}
