@extends('adminlte::page')

@section('title', 'Mantenimiento del módulo personas')

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
                <h3 class="card-title m-0">Mantenimiento del módulo personas</h3>
                <div class="card-tools m-0">
                    <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                    <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                        title="información"></i>
                </div>
                <!-- card-tools -->
            </div>
            <!-- card-header -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-telefonos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-telefonos" type="button" role="tab" aria-controls="pills-telefonos"
                                aria-selected="true">Teléfonos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-direcciones-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-direcciones" type="button" role="tab"
                                aria-controls="pills-direcciones" aria-selected="false">Direcciones</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-cargos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-cargos" type="button" role="tab" aria-controls="pills-cargos"
                                aria-selected="false">Puesto de trabajo</button>
                        </li>
                    </ul>
                    <div>
                        <x-adminlte-button class="btn-sm bg-teal" label="Nuevo télefono" icon="fas fa-plus"
                            data-toggle="modal" data-target="#createTelefono" />
                        <x-adminlte-button class="btn-sm bg-teal" label="Nueva dirección" icon="fas fa-plus"
                            data-toggle="modal" data-target="#createDireccion" />
                        <x-adminlte-button class="btn-sm bg-teal" label="Nuevo puesto" icon="fas fa-plus"
                            data-toggle="modal" data-target="#createPuestoTrabajo" />
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-telefonos" role="tabpanel"
                        aria-labelledby="pills-telefonos-tab">
                        @livewire('data-table.tabla-telefonos-personas')
                    </div>
                    <div class="tab-pane fade" id="pills-direcciones" role="tabpanel"
                        aria-labelledby="pills-direcciones-tab">
                        @livewire('data-table.tabla-direcciones-personas')
                    </div>
                    <div class="tab-pane fade" id="pills-cargos" role="tabpanel" aria-labelledby="pills-cargos-tab">
                        @livewire('data-table.tabla-cargos-empleados')
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
    <x-adminlte-modal id="modalInstrucciones" title="Instrucciones" theme="info" icon="fas fa-info" v-centered scrollable>
        <section>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio non vitae facere velit sequi ducimus officia odit
            repellat voluptas enim! Suscipit perspiciatis dolorum sequi nesciunt maxime labore, fugit consequatur natus?
        </section>
        <!-- body modal -->
        <x-slot name="footerSlot">
            <x-adminlte-button theme="danger" label="Cerrar" data-dismiss="modal" />
            <!-- bottones modal -->
        </x-slot>
        <!-- footer modal -->
    </x-adminlte-modal>
    <!-- modal instrucciones -->

    @livewire('modal.create.modal-telefono')
    @livewire('modal.create.modal-direccion')
    @livewire('modal.update.modal-telefono')
    @livewire('modal.update.modal-direccion')
    @livewire('modal.create.modal-puesto-trabajo')
    @livewire('modal.update.modal-puesto-trabajo')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
