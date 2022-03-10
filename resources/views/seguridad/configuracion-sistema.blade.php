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
                    <fieldset class="input-request" disabled>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="u-nombre-sistema">Nombre</label>
                            <input type="text" class="form-control" name="u-nombre-sistema" id="u-nombre-sistema"
                                aria-label="Nombre del sistema" aria-describedby="input-u-nombre-sistema"
                                placeholder="Nombre 1" required>
                            <input type="text" class="form-control" name="u-nombre-sistema" id="u-nombre-sistema"
                                aria-label="Nombre del sistema" aria-describedby="input-u-nombre-sistema"
                                placeholder="Nombre 2" required>
                        </div>
                        <!-- nombre sistema -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="u-logo-sistema">Logo</label>
                            <input type="file" class="form-control" name="u-logo-sistema" id="u-logo-sistema"
                                aria-label="logo del sistema" aria-describedby="input-u-logo-sistema" placeholder=""
                                required>
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
                            <select class="form-select" name="u-zona-horaria" id="u-zona-horaria"
                                aria-label="Zona horaria" aria-describedby="input-u-zona-horaria" required>
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
                    </fieldset>
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar" id="editar-1" />
                    <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                        label="Cancelar" id="cancelar-1" />
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
                    <fieldset class="input-request" disabled>
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
                            <input type="tel" class="form-control" name="u-telefono-propietario"
                                id="u-telefono-propietario" aria-label="Teléfono del propietario"
                                aria-describedby="input-u-telefono-propietario" placeholder="+504 1243 1243"
                                pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
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
                    </fieldset>
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar" id="editar-2" />
                    <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                        label="Cancelar" id="cancelar-2" />
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
                    <fieldset class="input-request" disabled>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="u-nombre-correo-sistema">Nombre</label>
                            <input type="text" class="form-control" name="u-nombre-correo-sistema"
                                id="u-nombre-correo-sistema" aria-label="nombre del correo del sistema"
                                aria-describedby="input-u-nombre-correo-sistema"
                                placeholder="Ingrese el nombre de la empresa" required>
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
                    </fieldset>
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar" id="editar-3" />
                    <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                        label="Cancelar" id="cancelar-3" />
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
    <script>
        // Variables
        let inputs = document.querySelectorAll(".input-request");
        let btnEditar = document.querySelectorAll(".btn-editar");
        let btnCancelar = document.querySelectorAll(".btn-cancelar");
        let btnHidden = document.querySelectorAll(".btn-hidden");

        // Funcionalidad de los button editar
        btnEditar.forEach(element => {
            element.addEventListener('click', function() {
                if (this.id == 'editar-1') {
                    inputs[0].removeAttribute('disabled');
                    btnEditar[0].classList.add('d-none');
                    btnHidden[0].classList.remove('d-none');
                    btnHidden[1].classList.remove('d-none');
                }

                if (this.id == 'editar-2') {
                    inputs[1].removeAttribute('disabled');
                    btnEditar[1].classList.add('d-none');
                    btnHidden[2].classList.remove('d-none');
                    btnHidden[3].classList.remove('d-none');
                }

                if (this.id == 'editar-3') {
                    inputs[2].removeAttribute('disabled');
                    btnEditar[2].classList.add('d-none');
                    btnHidden[4].classList.remove('d-none');
                    btnHidden[5].classList.remove('d-none');
                }
            });
        });

        // Funcionalidad de los button cancelar
        btnCancelar.forEach(element => {
            element.addEventListener('click', function() {
                Swal.fire({
                    icon: 'question',
                    title: '¿En realidad deas cancelar esta acción?',
                    text: '¡Tus cambios se perderán!',
                    confirmButtonText: 'Si, cancelar',
                    showDenyButton: true,
                    denyButtonText: `No`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        if (this.id == 'cancelar-1') {
                            inputs[0].setAttribute('disabled');
                            btnEditar[0].classList.remove('d-none');
                            btnHidden[0].classList.add('d-none');
                            btnHidden[1].classList.add('d-none');
                        }

                        if (this.id == 'cancelar-2') {
                            inputs[1].setAttribute('disabled');
                            btnEditar[1].classList.remove('d-none');
                            btnHidden[2].classList.add('d-none');
                            btnHidden[3].classList.add('d-none');
                        }

                        if (this.id == 'cancelar-3') {
                            inputs[2].setAttribute('disabled');
                            btnEditar[2].classList.remove('d-none');
                            btnHidden[4].classList.add('d-none');
                            btnHidden[5].classList.add('d-none');
                        }
                    }
                })
            });
        });
    </script>
@stop
