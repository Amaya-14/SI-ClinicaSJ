<?php

namespace App\Http\Controllers\Agenda;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CitaController extends Controller
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
        return view('agenda.citas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . "/mostrar/citas")->object();
        $data = [];

        foreach ($response[0] as $key => $value) {
            array_push($data, [
                "codigo" => Crypt::encrypt($value->codigoCita),
                "title" => $value->paciente,
                "start" => substr($value->fechaInicio, 0, 10),
                "end" => substr($value->fechaFinal, 0, 10),
            ]);
        }

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $API = Config::get('constants.API');
        $response = Http::post($API . "/crear/cita", [
            "paciente" => Crypt::decrypt($request->c_paciente_cita),
            "empleado" => Crypt::decrypt($request->c_doctor_cita),
            "fechaInicio" => $request->c_fecha_inicio_cita,
            "fechaFinal" => $request->c_fecha_final_cita,
            "horaInicio" => $request->c_hora_inicio_cita,
            "horaFinal" => $request->c_hora_final_cita,
            "estado" => Crypt::decrypt($request->c_estado_cita),
            "tipo" => Crypt::decrypt($request->c_tipo_cita),
            "descripcion" => $request->c_descripcion_cita,
        ]);

        return $response->json();
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
        $API = Config::get('constants.API');
        $id = Crypt::decrypt($id);

        $response = Http::get($API . "/mostrar/citas/$id")->object();
        foreach ($response[0] as $key => $value) {
            $value->codigoCita = Crypt::encrypt($value->codigoCita);
            $value->fechaInicio = substr($value->fechaInicio, 0, 10);
            $value->fechaFinal = substr($value->fechaFinal, 0, 10);
        }

        return $response[0]["0"];
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
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            $response = Http::put($API . "/update/cita/$id", [
                "pacientes" => Crypt::decrypt($request->u_paciente_cita),
                "empleado" => Crypt::decrypt($request->u_doctor_cita),
                "fechaInicio" => $request->u_fecha_inicio_cita,
                "horaInicio" => $request->u_hora_inicio_cita,
                "fechaFinal" => $request->u_fecha_final_cita,
                "horaFinal" => $request->u_hora_final_cita,
                "estado" => Crypt::decrypt($request->u_estado_cita),
                "tipo" => Crypt::decrypt($request->u_tipo_cita),
                "descripcion" => $request->u_descripcion_cita,
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
        $response = [
            "message" => 'Ok',
            "statusCode" => 200,
            "errors" => []
        ];
        try {
            $API = Config::get('constants.API');
            $id = Crypt::decrypt($id);
            intval($id);
            $persona = Http::delete($API . "/delete/cita/$id");
            return $response;
        } catch (DecryptException $e) {
            $response["message"] = 'Error';
            $response["statusCode"] = 409;
            array_push($response["errors"], $e["menssage"]);
            return $response;
            //return $e;
        }
    }
}
