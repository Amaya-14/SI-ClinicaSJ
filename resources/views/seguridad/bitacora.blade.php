@extends('adminlte::page')

@section('title', 'Bitacora')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .btn__info {
            cursor: pointer;
            color: cornflowerblue;
        }

        .card {
            margin: 0;
        }

        .btn-check:focus+.btn,
        .btn:focus,
        .form-select:focus,
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.1rem rgb(26 108 229 / 40%);
        }

        .col_center {
            text-align: center;
        }

    </style>
@stop

@section('content_header')
    <x-simple-card>
        @slot('titulo', 'Bitácora')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('content')
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-bitacora" style="width: 100%">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Objeto</th>
                            <th scope="col">Acción</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-simple-card>
@stop

@section('content')

@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let idTablaBitacora = 'tabla-bitacora';
    </script>

    <script>
        $('#' + idTablaBitacora).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.bitacora') !!}',
            columns: [{
                    data: 'usuario'
                },
                {
                    data: 'objeto'
                },
                {
                    data: 'accion'
                },
                {
                    data: 'fecha'
                },
                {
                    data: 'descripcion'
                },
            ],
            "columnDefs": [{
                className: "col_center",
                "targets": "_all"
            }, ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });
    </script>
@stop
