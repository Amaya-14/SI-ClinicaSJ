@extends('adminlte::page')

@section('title', 'Pacientes')

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

        .grid__item3,
        .grid__item8,
        .grid__item9,
        .grid__item10 {
            grid-column-start: 1;
            grid-column-end: -1;
        }
    </style>
@stop

@section('content_header')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de pacientes</h3>
            <div class="card-tools">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <x-adminlte-button class="btn-sm" label="Nuevo registro" theme="info" icon="fas fa-plus"
                    data-toggle="modal" data-target="#crearPaciente" />
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @livewire('data-table.tabla-pacientes')
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('content')
    @livewire('modal.create.modal-pacientes')
    @livewire('modal.update.modal-pacientes')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
