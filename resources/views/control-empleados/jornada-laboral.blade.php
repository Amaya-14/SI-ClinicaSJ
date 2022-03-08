@extends('adminlte::page')

@section('title', 'Jornada Laboral')

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

        .bg-download {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
        }

        .btn-check:focus+.btn,
        .btn:focus,
        .form-select:focus,
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.1rem rgb(26 108 229 / 40%);
        }

    </style>
@stop

@section('content_header')
    <section class="card">
        <div class="card-header">
            <h3 class="card-title m-0">Jornada Laboral</h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                    title="información"></i>
            </div>
            <!-- card-tools -->
        </div>
        <!-- card-header -->
        <div class="card-body">
            <div class="btn-group d-inline-flex justify-content-start align-items-center mb-3" role="group"
                aria-label="Basic example">
                <x-adminlte-button class="bg-download" icon="fas fa-fw fa-lg fa-file-pdf text-red"
                    title="Descargar pdf" />
                <x-adminlte-button class="bg-download" icon="fas fa-fw fa-lg fa-file-excel text-success"
                    title="Descargar excel" />
            </div>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="text-center table-light">
                        <tr>
                            <th scope="col">Empleado</th>
                            <th scope="col">Lunes</th>
                            <th scope="col">Martes</th>
                            <th scope="col">Miercoles</th>
                            <th scope="col">Jueves</th>
                            <th scope="col">Viernes</th>
                            <th scope="col">Sabado</th>
                            <th scope="col">Domingo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <h6>Daniel Amaya</h6>
                                <p>Admin</p>
                            </th>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                            <td>
                                <h6>Jornada Matutina</h6>
                                <p>Hora</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- card-body -->
        <div class="card-footer d-flex justify-content-end">
        </div>
        <!-- card-footer -->
    </section>
    <!-- card -->
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
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
