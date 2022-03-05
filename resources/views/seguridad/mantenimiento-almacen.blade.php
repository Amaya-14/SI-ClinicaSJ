@extends('adminlte::page')

@section('title', 'Mantenimiento Personas')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .grid--responsive {
            display: grid;
            gap: 1rem;
            grid-auto-flow: dense;
            grid-auto-rows: auto;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 30rem), 1fr));
        }

        .btn__info {
            cursor: pointer;
            color: cornflowerblue;
        }

        .card {
            margin: 0;
        }

        .tab-content-fix {
            width: 100%;
        }

    </style>
@stop

@section('content_header')
    <section class="">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title m-0">Mnateimiento del módulo almacén</h3>
                <div class="card-tools m-0">
                    <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                    <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalPurple"
                        title="información"></i>
                </div>
                <!-- card-tools -->
            </div>
            <!-- card-header -->
            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo registro" icon="fas fa-plus" data-toggle="modal"
                        data-target="#createRegistroAlmacen" />
                </div>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-tipo-medicamento-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-tipo-medicamento" type="button" role="tab"
                            aria-controls="v-pills-tipo-medicamento" aria-selected="true">Tipo médicamentos</button>
                        <button class="nav-link" id="v-pills-presentacion-medicamento-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-presentacion-medicamento" type="button" role="tab"
                            aria-controls="v-pills-presentacion-medicamento" aria-selected="false">Presentación
                            Médicamento</button>
                        <button class="nav-link" id="v-pills-tipo-materiales-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-tipo-materiales" type="button" role="tab"
                            aria-controls="v-pills-tipo-materiales" aria-selected="false">Tipo materiales</button>
                    </div>
                    <div class="tab-content tab-content-fix" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-tipo-medicamento" role="tabpanel"
                            aria-labelledby="v-pills-tipo-medicamento-tab">
                            @livewire('data-table.tabla-tipo-medicamentos')
                        </div>
                        <div class="tab-pane fade" id="v-pills-presentacion-medicamento" role="tabpanel"
                            aria-labelledby="v-pills-presentacion-medicamento-tab">
                            @livewire('data-table.tabla-presentacion-medicamento')
                        </div>
                        <div class="tab-pane fade" id="v-pills-tipo-materiales" role="tabpanel"
                            aria-labelledby="v-pills-tipo-materiales-tab">
                            @livewire('data-table.tabla-tipo-materiales')
                        </div>
                    </div>
                </div>
            </div>
            <!-- card-body -->
            <div class="card-footer d-flex justify-content-end">
            </div>
            <!-- card-footer -->
        </div>
        <!-- card -->
    </section>
    <!--  -->
@stop

@section('content')
    @livewire('modal.create.modal-mantenimiento-almacen')
    @livewire('modal.update.modal-presentacion-medicamento')
    @livewire('modal.update.modal-tipo-medicamento')
    @livewire('modal.update.modal-tipo-material')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
