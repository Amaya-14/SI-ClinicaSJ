<?php

namespace App\Http\Controllers\Agenda;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class HistorialController extends Controller
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
    public function index(Request $request)
    {
        $API = Config::get('constants.API');
        $citas = Http::get($API . '/mostrar/citas')->object();
        $data = [];
        foreach ($citas[0] as $clave => $valor) {
            array_push($data, [
                'cita' => Crypt::encrypt($valor->codigoCita),
                'paciente' => $valor->paciente,
                'doctor' => $valor->doctor,
                'fechaInicio' => substr($valor->fechaInicio, 0, 10),
                'estado' => $valor->estado,
                'tipo' => $valor->tipo,
            ]);
        };
        //dd($data[0]);
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addColumn('Opciones', function ($data) {
                    $opciones = '<button class="btn btn-sm btn-xs btn-danger text-white mx-1 shadow" title="Eliminar cita"
                    onclick="eliminar(\'' . $data["cita"] . '\')"
                    ><i class="fa fa-lg fa-fw fa-trash-alt"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-warning text-white mx-1 shadow" title="Editar cita" 
                    onclick="editar(\'' . $data["cita"] . '\')"
                    ><i class="fas fa-lg fa-fw fa-edit"></i></button>';
                    $opciones .= '<button class="btn btn-sm btn-xs btn-secondary text-white mx-1 shadow" title="Ver cita" 
                    onclick="ver(\'' . $data["cita"] . '\')"
                    ><i class="fas fa-lg fa-fw fa-eye"></i></button>';
                    return $opciones;
                })
                ->rawColumns(['Opciones'])
                ->make(true);
        }
        return view('agenda.historial');
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
