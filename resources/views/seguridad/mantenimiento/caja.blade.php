@extends('adminlte::page')

@section('title', 'Mantenimiento Caja Chica')

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
        <form class="formulario" action="" method="post">
            {!! csrf_field() !!}
            @method('put')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-0">Mantenimiento del módulo caja chica</h3>
                    <div class="card-tools m-0">
                        <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                        <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#instrucciones"
                            title="información"></i>
                    </div>
                    <!-- card-tools -->
                </div>
                <!-- card-header -->
                <div class="card-body">
                    <fieldset class="input-request" disabled>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="u-apertura-caja">Apertura de caja automática</label>
                            <select class="form-select" name="u-apertura-caja" id="u-apertura-caja"
                                aria-label="Idioma del sistema" aria-describedby="input-u-apertura-caja" required>
                                <option value="si">SI</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <!-- apertura de caja -->

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="u-cierre-caja">Cierre de caja automática</label>
                            <select class="form-select" name="u-cierre-caja" id="u-cierre-caja"
                                aria-label="Idioma del sistema" aria-describedby="input-u-cierre-caja" required>
                                <option value="si" selected>SI</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <!-- cierre de caja -->
                    </fieldset>
                </div>
                <!-- card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar" id="editar-1" />
                    <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" theme="danger" label="Cancelar"
                        id="cancelar-1" />
                </div>
                <!-- card-footer -->
            </div>
            <!-- card -->
        </form>
        <!-- configuración del sistema -->
    </section>
    <!--  -->
@stop

@section('content')
    <x-adminlte-modal id="instrucciones" title="Instrucciones configuración del sistema" theme="info" icon="fas fa-info"
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
        let forms = document.querySelectorAll('.formulario');

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
                            forms[0].reset();
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
