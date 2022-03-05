@extends('adminlte::page')

@section('title', 'Roles-Permisos')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('content_header')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills d-inline-flex" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-roles-tab" data-bs-toggle="pill" data-bs-target="#pills-roles"
                        type="button" role="tab" aria-controls="pills-roles" aria-selected="true">Roles</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-permisos-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-permisos" type="button" role="tab" aria-controls="pills-permisos"
                        aria-selected="false">Permisos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-objetos-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-objetos" type="button" role="tab" aria-controls="pills-objetos"
                        aria-selected="false">Objetos</button>
                </li>
            </ul>
            <div class="card-tools mt-1">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo rol" icon="fas fa-plus" data-toggle="modal"
                    data-target="#createRol" />
                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo objeto" icon="fas fa-plus" data-toggle="modal"
                data-target="#createObjeto" />
            </div><!-- /.card-tools -->
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-roles" role="tabpanel" aria-labelledby="pills-roles-tab">
                    @livewire('data-table.tabla-roles')
                </div>
                <div class="tab-pane fade" id="pills-permisos" role="tabpanel" aria-labelledby="pills-permisos-tab">
                    @livewire('data-table.tabla-permisos')
                </div>
                <div class="tab-pane fade" id="pills-objetos" role="tabpanel" aria-labelledby="pills-objetos-tab">
                    @livewire('data-table.tabla-objetos')
                </div>
            </div>
        </div><!-- /.card-body -->
    </div><!-- /.card -->
@stop

@section('content')
    @livewire('modal.create.modal-rol')
    @livewire('modal.update.modal-rol')
    @livewire('modal.update.modal-permiso')
    @livewire('modal.create.modal-objeto')
    @livewire('modal.update.modal-objeto')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
