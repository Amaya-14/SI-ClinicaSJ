<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $API = Config::get('constants.API');
        $empleados = Http::get($API . '/mostrar/empleados')->object();
        $data = [];
        foreach ($empleados[0] as $clave => $valor) {
            array_push($data, [
                'empleado' => Crypt::encrypt($valor->empleado),
                'persona' => Crypt::encrypt($valor->persona),
                'nombre' => $valor->nombres . ' ' . $valor->apellidos,
                'identidad' => substr($valor->dni, 0, 4) . "-" . substr($valor->dni, 4, 4) . "-" . substr($valor->dni, 8),
                'edad' => $valor->edad,
                'fechaNacimiento' => substr($valor->fechaNacimiento, 0, 10),
                'sexo' => $valor->sexo == 'H' ? 'Hombre' : 'Mujer',
                'cargo' => $valor->nombreCargo,
            ]);
        };

        if ($request->ajax()) {

            return Datatables::of($data)
                ->addColumn('Opciones', function ($data) {
                    $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar empleado"
                    onclick="eliminar(\'' . $data["persona"] . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar empleado" 
                    onclick="editar(\'' . $data["empleado"] . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-secondary text-white mx-1 shadow" title="Ver empleado" 
                    onclick="ver(\'' . $data["empleado"] . '\')"
                    ><i class="fas fa-lg fa-fw fa-eye"></i></button>';
                    return $opciones;
                })
                ->rawColumns(['Opciones'])
                ->make(true);
        }

        return view('persona.empleados');
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
        try {
            $API = Config::get('constants.API');

            $numTelefonoF = $request->c_numero_telefono_fijo == "" ?  0 :  $request->c_numero_telefono_fijo;
            $desTelefonoF = $request->c_descripcion_telefono_fijo == "" ? "---" : $request->c_descripcion_telefono_fijo;
            $desTelefonoC = $request->c_descripcion_telefono_celular == "" ? "---" : $request->c_descripcion_telefono_celular;
            $desDireccion = $request->c_referencia == "" ? "---" : $request->c_referencia;
            $cargo = Crypt::decrypt($request->c_cargo);

            $response = Http::post($API . "/crear/empleado", [
                'dni' => $request->c_identidad,
                'nombres' => $request->c_nombre,
                'apellidos' => $request->c_apellido,
                'nacionalidad' => $request->c_nacionalidad,
                'edad' => $request->c_edad,
                'fechaNacimiento' => $request->c_fecha_nacimiento,
                'sexo' => $request->c_sexo,
                'estadoCivil' => $request->c_estado_civil,

                'numAreaF' => $request->c_area_telefono_fijo,
                'numTelefonoF' => $numTelefonoF,
                'desTelefonoF' => $desTelefonoF,

                'numAreaC' => $request->c_area_telefono_celular,
                'numTelefonoC' => $request->c_numero_telefono_celular,
                'desTelefonoC' => $desTelefonoC,

                'dirPersona' => $request->c_direccion,
                'desDireccion' => $desDireccion,

                'corrPersona' => $request->c_correo,

                'codCargo' => $cargo,
                'fotoEmpleado' => "daniel",
                'fechaContratacion' => $request->c_fecha_contratacion,

            ])->object();

            return $response;
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
        try {
            /* */
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $persona = Http::get($API . "/mostrar/empleados/$id")->object();
            $id = $persona[0]["0"]->persona;
            /* */
            $persona[0]["0"]->fechaNacimiento = substr($persona[0]["0"]->fechaNacimiento, 0, 10);
            $persona[0]["0"]->fechaContratacion = substr($persona[0]["0"]->fechaContratacion, 0, 10);
            $persona[0]["0"]->persona = Crypt::encrypt($persona[0]["0"]->persona);
            $persona[0]["0"]->empleado = Crypt::encrypt($persona[0]["0"]->empleado);
            $persona[0]["0"]->codigoCargo = Crypt::encrypt($persona[0]["0"]->codigoCargo);

            /* */
            $telefonos = Http::get($API . "/mostrar/telefonos/$id")->object();
            for ($i = 0; $i < sizeof($telefonos[0]); $i++) {
                $telefonos[0]["$i"]->codTelefono = Crypt::encrypt($telefonos[0]["$i"]->codTelefono);
            }
            /* */
            $direcciones = Http::get($API . "/mostrar/direcciones/$id")->object();
            if (sizeof($direcciones[0]) > 0) {
                $direcciones[0]["0"]->codDireccion = Crypt::encrypt($direcciones[0]["0"]->codDireccion);
            }
            /* */
            $correos = Http::get($API . "/mostrar/correos/$id")->object();
            if (sizeof($correos[0]) > 0) {
                $correos[0]["0"]->codCorreo = Crypt::encrypt($correos[0]["0"]->codCorreo);
            }
            /* */
            $data = [];
            array_push($data, $persona[0]["0"]);
            array_push($data, $telefonos[0]);
            array_push($data, $direcciones[0]);
            array_push($data, $correos[0]);
            //dd($data);
            return response()->json($data);
        } catch (DecryptException $e) {
            return false;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            /* */
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $persona = Http::get($API . "/mostrar/empleados/$id")->object();
            $id = $persona[0]["0"]->persona;
            /* */
            $persona[0]["0"]->fechaNacimiento = substr($persona[0]["0"]->fechaNacimiento, 0, 10);
            $persona[0]["0"]->fechaContratacion = substr($persona[0]["0"]->fechaContratacion, 0, 10);
            $persona[0]["0"]->persona = Crypt::encrypt($persona[0]["0"]->persona);
            $persona[0]["0"]->empleado = Crypt::encrypt($persona[0]["0"]->empleado);
            $persona[0]["0"]->codigoCargo = Crypt::encrypt($persona[0]["0"]->codigoCargo);

            /* */
            $telefonos = Http::get($API . "/mostrar/telefonos/$id")->object();
            for ($i = 0; $i < sizeof($telefonos[0]); $i++) {
                $telefonos[0]["$i"]->codTelefono = Crypt::encrypt($telefonos[0]["$i"]->codTelefono);
            }
            /* */
            $direcciones = Http::get($API . "/mostrar/direcciones/$id")->object();
            if (sizeof($direcciones[0]) > 0) {
                $direcciones[0]["0"]->codDireccion = Crypt::encrypt($direcciones[0]["0"]->codDireccion);
            }
            /* */
            $correos = Http::get($API . "/mostrar/correos/$id")->object();
            if (sizeof($correos[0]) > 0) {
                $correos[0]["0"]->codCorreo = Crypt::encrypt($correos[0]["0"]->codCorreo);
            }
            /* */
            $data = [];
            array_push($data, $persona[0]["0"]);
            array_push($data, $telefonos[0]);
            array_push($data, $direcciones[0]);
            array_push($data, $correos[0]);

            return response()->json($data);
        } catch (DecryptException $e) {
            return false;
        }
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
        try {
            /*  */
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            /*  */
            $codTelefonoFijo = Crypt::decrypt($request->cod_telefono_fijo);
            $codTelefonoCelular = Crypt::decrypt($request->cod_telefono_celular);
            $codDireccion = Crypt::decrypt($request->cod_direccion);
            $codCorreo = Crypt::decrypt($request->cod_correo);
            $codCargo = Crypt::decrypt($request->u_cargo);
            /*  */
            $response = [
                "message" => 'Ok',
                "statusCode" => 200,
                "errors" => []
            ];
            /*  */
            $persona = Http::put($API . "/update/empleado/$id", [
                "dni" => $request->u_identidad,
                "nombres" => $request->u_nombre,
                "apellidos" => $request->u_apellido,
                "nacionalidad" => $request->u_nacionalidad,
                "edad" => $request->u_edad,
                "fechaNacimiento" => $request->u_fecha_nacimiento,
                "sexo" => $request->u_sexo,
                "estadoCivil" => $request->u_estado_civil,

                "codCargo" => $codCargo,
                "fotoEmpleado" => '1',
                "fechaContratacion" => $request->u_fecha_contratacion,
            ]);
            /*  */
            if ($persona["statusCode"] != 200) {
                $response["message"] = $persona["message"];
                $response["statusCode"] = $persona["statusCode"];
                array_push($response["errors"], $persona["error"]);
            }
            /*  */
            $direccion = Http::put($API . "/update/direccion/$codDireccion", [
                "dirPersona" => $request->u_direccion,
                "desDireccion" => $request->u_referencia,
            ]);
            /*  */
            if ($direccion["statusCode"] != 200) {
                $response["message"] = $direccion["message"];
                $response["statusCode"] = $direccion["statusCode"];
                array_push($response["errors"], $direccion["error"]);
            }
            /*  */
            if ($request->u_numero_telefono_fijo != null || $request->u_numero_telefono_fijo != "") {
                $telefono1 = Http::put($API . "/update/telefono/$codTelefonoFijo", [
                    "numArea" => $request->u_area_telefono_fijo,
                    "numTelefono" => $request->u_numero_telefono_fijo,
                    "tipoTelefono" => $request->u_tipo_telefono_fijo,
                    "desTelefono" => $request->u_descripcion_telefono_fijo,
                ]);

                if ($telefono1["statusCode"] != 200) {
                    array_push($response["errors"], $telefono1["error"]);
                    if ($persona["statusCode"] == 200) {
                        $response["message"] = $telefono1["message"];
                        $response["statusCode"] = $telefono1["statusCode"];
                    }
                }
            }
            /*  */
            if ($request->u_numero_telefono_celular != null || $request->u_numero_telefono_celular != "") {
                $telefono2 = Http::put($API . "/update/telefono/$codTelefonoCelular", [
                    "numArea" => $request->u_area_telefono_celular,
                    "numTelefono" => $request->u_numero_telefono_celular,
                    "tipoTelefono" => $request->u_tipo_telefono_celular,
                    "desTelefono" => $request->u_descripcion_telefono_celular,
                ]);

                if ($telefono2["statusCode"] != 200) {
                    array_push($response["errors"], $telefono2["error"]);
                    if ($persona["statusCode"] == 200) {
                        $response["message"] = $telefono2["message"];
                        $response["statusCode"] = $telefono2["statusCode"];
                    }
                }
            }
            /*  */
            if ($request->u_correo != null || $request->u_correo != "") {
                $correo = Http::put($API . "/update/correo/$codCorreo", [
                    "corrPersona" => $request->u_correo,
                ]);

                if ($correo["statusCode"] != 200) {
                    array_push($response["errors"], $correo["error"]);
                    if ($persona["statusCode"] == 200) {
                        $response["message"] = $correo["message"];
                        $response["statusCode"] = $correo["statusCode"];
                    }
                }
            }

            return response($response);
        } catch (DecryptException $e) {
            return false;
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
        $response = [
            "message" => 'Ok',
            "statusCode" => 200,
            "errors" => []
        ];
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            intval($id);
            $persona = Http::delete($API . "/delete/empleado/$id");
            return response($response);
        } catch (DecryptException $e) {
            $response["message"] = 'Error';
            $response["statusCode"] = 409;
            array_push($response["errors"], $e["menssage"]);
            return response($response);
        }
    }
}
