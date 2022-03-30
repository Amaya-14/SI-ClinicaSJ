<?php

namespace App\Http\Controllers\Almacen;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $API = Config::get('constants.API');
        $response = Http::get($API . "/mostrar/medicamentos")->object();
        foreach ($response[0] as $key => $value) {
            $value->codigoMedicamento = Crypt::encrypt($value->codigoMedicamento);
        }
        $data = $response[0];

        if ($request->ajax()) {
            return Datatables::of($data)
                ->addColumn('Opciones', function ($data) {
                    $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro"
                    onclick="eliminar(\'' . $data->codigoMedicamento . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar registro" 
                    onclick="editar(\'' . $data->codigoMedicamento . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro" 
                    onclick="ver(\'' . $data->codigoMedicamento . '\')"
                    ><i class="fas fa-lg fa-fw fa-eye"></i></button>';
                    return $opciones;
                })
                ->rawColumns(['Opciones'])
                ->make(true);
        }

        return view('almacen.medicamentos');
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
        $API = Config::get('constants.API');
        $response = Http::post($API . "/crear/medicamento", [
            "medicamento" => $request->c_nombre_medicamento,
            "presentacion" => Crypt::decrypt($request->c_presentacion_medicamento),
            "tipo" => Crypt::decrypt($request->c_tipo_medicamento),
            "descripcion" => $request->c_descripcion_medicamento,
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
        $response = Http::get($API . "/mostrar/medicamentos/$id")->object();
        $response[0]["0"]->codigoMedicamento = Crypt::encrypt($response[0]["0"]->codigoMedicamento);

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
            $response = Http::put($API . "/actualizar/medicamento/$id", [
                "medicamento" => $request->u_nombre_medicamento,
                "presentacion" => Crypt::decrypt($request->u_presentacion_medicamento),
                "tipo" => Crypt::decrypt($request->u_tipo_medicamento),
                "descripcion" => $request->u_descripcion_medicamento,
            ])->object();

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
            $response = Http::delete($API . "/delete/medicamento/$id")->object();
            return $response;
        } catch (DecryptException $e) {
            return false;
        }
    }
}
