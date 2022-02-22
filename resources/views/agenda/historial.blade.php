@extends('adminlte::page')

@section('title', 'Historial Citas')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .grid--responsive {
            display: grid;
            gap: 1rem;
            grid-auto-flow: dense;
            grid-auto-rows: auto;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 20rem), 1fr));
        }

        .grid--row__extend {
            grid-column-start: 1;
            grid-column-end: -1;
        }

    </style>
@stop

@section('content_header')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de citas</h3>
            <div class="card-tools">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @livewire('data-table.tabla-historial-cita')
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('content')
    @livewire('modal.update.modal-cita')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
