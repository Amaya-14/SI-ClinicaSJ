@extends('adminlte::page')

@section('title', 'Medicamentos')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0 mt-1">Lista de medicamentos</h3>
            <div class="card-tools">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo medicamento" icon="fas fa-plus" data-toggle="modal"
                    data-target="#createMedicamento" />
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @livewire('data-table.tabla-medicamentos')
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('content')
    @livewire('modal.create.modal-medicamento')
    @livewire('modal.update.modal-medicamento')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
