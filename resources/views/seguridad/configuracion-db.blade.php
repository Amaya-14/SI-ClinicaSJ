@extends('adminlte::page')

@section('title', 'Configuración DB')

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

        .grid__item-card {
            grid-column-start: 1;
            grid-column-end: -1;
        }

        .btn__info {
            cursor: pointer;
            color: cornflowerblue;
        }

        .card {
            margin: 0;
        }

    </style>
@stop

@section('content_header')
    <section class="grid--responsive">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title m-0">Información de la base de datos</h3>
                <div class="card-tools m-0">
                    <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                    <span>
                        <i class="fas fa-info-circle fs-5 btn__info" title="información" data-toggle="modal"
                            data-target="#instruccionesDB"></i>
                    </span>
                </div>
                <!-- card-tools -->
            </div>
            <!-- card-header -->
            <div class="card-body">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-nombre-db">Nombre</label>
                    <input type="text" class="form-control" name="s-nombre-db" id="s-nombre-db"
                        aria-label="Nombre de la db" aria-describedby="input-s-nombre-db" readonly>
                </div>
                <!-- nombre db -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-host-db">Host</label>
                    <input type="text" class="form-control" name="s-host-db" id="s-host-db" aria-label="Host de la db"
                        aria-describedby="input-s-host-db" readonly>
                </div>
                <!-- host db -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-tamano-usado-db">Tamaño usado</label>
                    <input type="text" class="form-control" name="s-tamano-usado-db" id="s-tamano-usado-db"
                        aria-label="Tamaño usado de la db" aria-describedby="input-s-tamano-usado-db" readonly>
                </div>
                <!-- tamaño usado -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-tamano-disponible-db">Tamaño disponible</label>
                    <input type="text" class="form-control" name="s-tamano-disponible-db" id="s-tamano-disponible-db"
                        aria-label="Tamaño disponible de la db" aria-describedby="input-s-tamano-disponible-db" readonly>
                </div>
                <!-- tamaño disponible -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-tamano-total-db">Tamaño total</label>
                    <input type="text" class="form-control" name="s-tamano-total-db" id="s-tamano-total-db"
                        aria-label="Tamaño total de la db" aria-describedby="input-s-tamano-total-db" readonly>
                </div>
                <!-- tamaño total -->
                <div class="d-flex justify-content-end">
                    <x-adminlte-button class="ml-1" type="submit" theme="primary" label="Realizar respaldo"
                        data-toggle="modal" data-target="#createRespaldo" />
                </div>
            </div>
            <!-- card-body -->
            <div class="card-footer d-flex justify-content-end">
            </div>
            <!-- card-footer -->
        </div>
        <!-- card - configuración base de datos -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title m-0">Información de la api</h3>
                <div class="card-tools m-0">
                    <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                    <span>
                        <i class="fas fa-info-circle fs-5 btn__info" title="información" data-toggle="modal"
                            data-target="#instruccionesAPI"></i>
                    </span>
                </div>
                <!-- card-tools -->
            </div>
            <!-- card-header -->
            <div class="card-body">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-nombre-api">Nombre</label>
                    <input type="text" class="form-control" name="s-nombre-api" id="s-nombre-api"
                        aria-label="Nombre de la api" aria-describedby="input-s-nombre-api" readonly>
                </div>
                <!-- nombre api -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-host-api">Host</label>
                    <input type="text" class="form-control" name="s-host-api" id="s-host-api" aria-label="Host de la api"
                        aria-describedby="input-s-host-api" readonly>
                </div>
                <!-- host api -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-mantenimiento-api">Versión</label>
                    <input type="text" class="form-control" name="s-mantenimiento-api" id="s-mantenimiento-api"
                        aria-label="Fecha de mantenimiento de la api" aria-describedby="input-s-mantenimiento-api" readonly>
                </div>
                <!-- versión api -->
                <div class="input-group">
                    <label class="input-group-text" for="s-mantenimiento-api">Último mantenimiento</label>
                    <input type="date" class="form-control" name="s-mantenimiento-api" id="s-mantenimiento-api"
                        aria-label="Fecha de mantenimiento de la api" aria-describedby="input-s-mantenimiento-api" readonly>
                </div>
                <!-- mantenimiento api -->
            </div>
            <!-- card-body -->
            <div class="card-footer d-flex justify-content-end">
            </div>
            <!-- card-footer -->
        </div>
        <!-- card - configuración api-->

        <div class="card grid__item-card">
            <div class="card-header">
                <h3 class="card-title m-0">Historial respaldos db</h3>
                <div class="card-tools m-0">
                    <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                    <span>
                        <i class="fas fa-info-circle fs-5 btn__info" title="información" data-toggle="modal"
                            data-target="#instruccionesTabla"></i>
                    </span>
                </div>
                <!-- card-tools -->
            </div>
            <!-- card-header -->
            <div class="card-body">
                @livewire('data-table.tabla-respaldo')
            </div>
            <!-- card-body -->
            <div class="card-footer d-flex justify-content-end">
            </div>
            <!-- card-footer -->
        </div>
        <!-- card - historial respaldos-->
    </section>
    <!--  -->
@stop

@section('content')
    <x-adminlte-modal id="instruccionesDB" title="Instrucciones de uso DB" theme="info" icon="fas fa-info" v-centered
        scrollable>
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
    <!-- modal instrucciones db -->

    <x-adminlte-modal id="instruccionesAPI" title="Instrucciones de uso API" theme="info" icon="fas fa-info" v-centered
        scrollable>
        <section>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio non vitae facere velit sequi ducimus officia odit
            repellat voluptas enim! Suscipit perspiciatis dolorum sequi nesciunt maxime labore, fugit consequatur natus?
        </section>
        <x-slot name="footerSlot">
            <x-adminlte-button theme="danger" label="Cerrar" data-dismiss="modal" />
        </x-slot>
        <!-- footer modal -->
    </x-adminlte-modal>
    <!-- modal instrucciones api -->

    <x-adminlte-modal id="instruccionesTabla" title="Instrucciones de uso tabla" theme="info" icon="fas fa-info" v-centered
        scrollable>
        <section>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio non vitae facere velit sequi ducimus officia odit
            repellat voluptas enim! Suscipit perspiciatis dolorum sequi nesciunt maxime labore, fugit consequatur natus?
        </section>
        <!-- body modal -->
        <x-slot name="footerSlot">
            <x-adminlte-button theme="danger" label="Cerrar" data-dismiss="modal" />
        </x-slot>
        <!-- footer modal -->
    </x-adminlte-modal>
    <!-- modal instrucciones tabla -->

    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createRespaldo" title="Nuevo Respaldo" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-fecha-respaldo">Fecha respaldo<span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="c-fecha-respaldo" id="c-fecha-respaldo"
                        aria-label="Fehca de respaldo" aria-describedby="input-c-fecha-respaldo" readonly>
                </div>
                <!-- fecha de respaldo -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-usuario-respaldo">Usuario<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="s-usuario-respaldo" id="s-usuario-respaldo"
                        aria-label="Usuario" aria-describedby="input-s-usuario-respaldo" readonly>
                </div>
                <!-- usuario -->
                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-respaldo">Descripción<span
                            class="text-danger">*</span></label>
                    <textarea class="form-control" name="c-descripcion-respaldo" id="c-descripcion-respaldo"
                        aria-label="Motivo del respaldo" aria-describedby="input-c-descripcion-respaldo"
                        placeholder="Motivo del respaldo" required></textarea>
                </div>
                <!-- descripción del respaldo -->
            </section>
            <!-- body modal -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
            <!-- footer modal -->
        </x-adminlte-modal>
        <!-- modal nuevo respaldo -->
    </form>
    <!-- formulario nuevo respaldo -->

    @livewire('modal.select.modal-respaldo')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
