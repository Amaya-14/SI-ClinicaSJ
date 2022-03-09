@extends('adminlte::page')

@section('title', 'Configuración sistema')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .grid--responsive {
            display: grid;
            gap: 1rem;
            grid-auto-flow: dense;
            grid-auto-rows: auto;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 24rem), 1fr));
        }

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

    </style>
@stop

@section('content_header')
    <section class="grid--responsive">
        <form action="" method="post">
            {!! csrf_field() !!}
            @method('put')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-0">Configuración del sistema</h3>
                    <div class="card-tools m-0">
                        <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                        <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#instruccionesCS"
                            title="información"></i>
                    </div>
                    <!-- card-tools -->
                </div>
                <!-- card-header -->
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-nombre-sistema">Nombre</label>
                        <input type="text" class="form-control" name="u-nombre-sistema" id="u-nombre-sistema"
                            aria-label="Nombre del sistema" aria-describedby="input-u-nombre-sistema" placeholder="Nombre 1"
                            required>
                        <input type="text" class="form-control" name="u-nombre-sistema" id="u-nombre-sistema"
                            aria-label="Nombre del sistema" aria-describedby="input-u-nombre-sistema" placeholder="Nombre 2"
                            required>
                    </div>
                    <!-- nombre sistema -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-logo-sistema">Logo</label>
                        <input type="file" class="form-control" name="u-logo-sistema" id="u-logo-sistema"
                            aria-label="logo del sistema" aria-describedby="input-u-logo-sistema" placeholder="" required>
                    </div>
                    <!-- logo sistema -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-idioma-sistema">Idioma</label>
                        <select class="form-select" name="u-idioma-sistema" id="u-idioma-sistema"
                            aria-label="Idioma del sistema" aria-describedby="input-u-idioma-sistema" required>
                            <option value="es" selected>idioma 1</option>
                            <option value="en">idioma 2</option>
                        </select>
                    </div>
                    <!-- idioma -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-zona-horaria">Zona Horaria</label>
                        <select class="form-select" name="u-zona-horaria" id="u-zona-horaria" aria-label="Zona horaria"
                            aria-describedby="input-u-zona-horaria" required>
                            <option value="es" selected>zona 1</option>
                            <option value="en">zona 2</option>
                        </select>
                    </div>
                    <!-- zona horaria del sistema -->
                    <div class="input-group">
                        <label class="input-group-text" for="u-url-sistema">URL</label>
                        <input type="url" class="form-control" name="u-url-sistema" id="u-url-sistema"
                            aria-label="URL del sistema" aria-describedby="input-u-url-sistema"
                            placeholder="https://example.com" pattern="https:/*" required>
                    </div>
                    <!-- url del sistema -->
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button type="button" theme="warning" label="Editar" />
                    <x-adminlte-button class="ml-1" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1" type="reset" theme="danger" label="Cancelar" />
                </div>
                <!-- card-footer -->
            </div>
            <!-- card -->
        </form>
        <!-- configuración del sistema -->
        <form action="post">
            {!! csrf_field() !!}
            @method('put')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-0">Información del propietario</h3>
                    <div class="card-tools m-0">
                        <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                        <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#instruccionesP"
                            title="información"></i>
                    </div>
                    <!-- card-tools -->
                </div>
                <!-- card-header -->
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-nombre-propietario">Nombre</label>
                        <input type="text" class="form-control" name="u-nombre-propietario" id="u-nombre-propietario"
                            aria-label="Nombre del propietario" aria-describedby="input-u-nombre-propietario"
                            placeholder="Ingrese el nombre del propietario" required>
                    </div>
                    <!-- nombre propietario -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-correo-propietario">Correo</label>
                        <input type="email" class="form-control" name="u-correo-propietario" id="u-correo-propietario"
                            aria-label="Correo del propietario" aria-describedby="input-u-correo-propietario"
                            placeholder="propietario@example.com" required>
                    </div>
                    <!-- correo propietario -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-telefono-propietario">Teléfono</label>
                        <input type="tel" class="form-control" name="u-telefono-propietario" id="u-telefono-propietario"
                            aria-label="Teléfono del propietario" aria-describedby="input-u-telefono-propietario"
                            placeholder="+504 1243 1243" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
                    </div>
                    <!-- teléfono propietario -->
                    <div class="input-group">
                        <label class="input-group-text" for="u-telefono-movil-propietario">Teléfono móvil</label>
                        <input type="tel" class="form-control" name="u-telefono-movil-propietario"
                            id="u-telefono-movil-propietario" aria-label="Teléfono móvil del propietario"
                            aria-describedby="input-u-telefono-movil-propietario" placeholder="+504 1243 1243"
                            pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
                    </div>
                    <!-- teléfono móvil propietario -->
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button type="button" theme="warning" label="Editar" />
                    <x-adminlte-button class="ml-1" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1" type="reset" theme="danger" label="Cancelar" />
                </div>
                <!-- card-footer -->
            </div>
            <!-- card -->
        </form>
        <!-- configuración información propietario -->
        <form action="post">
            {!! csrf_field() !!}
            @method('put')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-0">Información del la empresa</h3>
                    <div class="card-tools m-0">
                        <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                        <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#instruccionesE"
                            title="información"></i>
                    </div>
                    <!-- card-tools -->
                </div>
                <!-- card-header -->
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-nombre-correo-sistema">Nombre</label>
                        <input type="text" class="form-control" name="u-nombre-correo-sistema"
                            id="u-nombre-correo-sistema" aria-label="nombre del correo del sistema"
                            aria-describedby="input-u-nombre-correo-sistema" placeholder="Ingrese el nombre de la empresa"
                            required>
                    </div>
                    <!--  -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u-correo-sistema">Correo</label>
                        <input type="email" class="form-control" name="u-correo-sistema" id="u-correo-sistema"
                            aria-label="Correo del sistema" aria-describedby="input-u-correo-sistema"
                            placeholder="clinica@example.com" required>
                    </div>
                    <!--  -->
                    <div class="input-group">
                        <label class="input-group-text" for="u-telefono-empresa">Teléfono</label>
                        <input type="tel" class="form-control" name="u-telefono-empresa" id="u-telefono-empresa"
                            aria-label="Teléfono del empresa" aria-describedby="input-u-telefono-empresa"
                            placeholder="+504 1243 1243" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
                    </div>
                    <!-- teléfono fijo empresa -->
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button type="button" theme="warning" label="Editar" />
                    <x-adminlte-button class="ml-1" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1" type="reset" theme="danger" label="Cancelar" />
                </div>
                <!-- card-footer -->
            </div>
            <!-- card -->
        </form>
        <!-- configuración correo sistema -->


    </section>
    <!--  -->
@stop

@section('content')
    <x-adminlte-modal id="instruccionesCS" title="Instrucciones configuración del sistema" theme="info" icon="fas fa-info"
        v-centered scrollable>
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

    <x-adminlte-modal id="instruccionesP" title="Instrucciones configuración del propietario" theme="info"
        icon="fas fa-info" v-centered scrollable>
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

    <x-adminlte-modal id="instruccionesE" title="Instrucciones configuración de la empresa" theme="info" icon="fas fa-info"
        v-centered scrollable>
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
