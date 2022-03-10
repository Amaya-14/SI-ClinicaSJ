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
    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0">Lista de pacientes</h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                    title="información"></i>
            </div>
            <!-- card-tools -->
        </div>
        <!-- card-header -->
        <div class="card-body">
            <div class="d-flex justify-content-end align-items-center mb-3">
                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo registro" icon="fas fa-plus" data-toggle="modal"
                    data-target="#crearPaciente" />
            </div>
            <div>
                @livewire('data-table.tabla-pacientes')
            </div>
        </div>
        <!-- card-body -->
        <div class="card-footer d-flex justify-content-end">
        </div>
        <!-- card-footer -->
    </div>
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

    @livewire('modal.create.modal-pacientes')
    @livewire('modal.update.modal-pacientes')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Variables
        let inputs = document.querySelectorAll(".input-request");
        let btnEditar = document.querySelectorAll(".btn-editar");
        let btnCancelar = document.querySelectorAll(".btn-cancelar");
        let btnHidden = document.querySelectorAll(".btn-hidden");
        let modal = document.querySelectorAll('.modal-update');
        console.log(modal)
        // Funcionalidad de los button editar
        btnEditar.forEach(element => {
            element.addEventListener('click', function() {
                if (this.id == 'editar-persona') {
                    inputs[0].removeAttribute('disabled');
                    btnEditar[0].classList.add('d-none');
                    btnHidden[0].classList.remove('d-none');
                    btnHidden[1].classList.remove('d-none');
                }

                if (this.id == 'editar-telefono') {
                    inputs[1].removeAttribute('disabled');
                    btnEditar[1].classList.add('d-none');
                    btnHidden[2].classList.remove('d-none');
                    btnHidden[3].classList.remove('d-none');
                }

                if (this.id == 'editar-correo') {
                    inputs[2].removeAttribute('disabled');
                    btnEditar[2].classList.add('d-none');
                    btnHidden[4].classList.remove('d-none');
                    btnHidden[5].classList.remove('d-none');
                }

                if (this.id == 'editar-direccion') {
                    inputs[3].removeAttribute('disabled');
                    btnEditar[3].classList.add('d-none');
                    btnHidden[6].classList.remove('d-none');
                    btnHidden[7].classList.remove('d-none');
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
                        if (this.id == 'cancelar-persona') {
                            inputs[0].setAttribute('disabled');
                            btnEditar[0].classList.remove('d-none');
                            btnHidden[0].classList.add('d-none');
                            btnHidden[1].classList.add('d-none');
                        }

                        if (this.id == 'cancelar-telefono') {
                            inputs[1].setAttribute('disabled');
                            btnEditar[1].classList.remove('d-none');
                            btnHidden[2].classList.add('d-none');
                            btnHidden[3].classList.add('d-none');
                        }

                        if (this.id == 'cancelar-correo') {
                            inputs[2].setAttribute('disabled');
                            btnEditar[2].classList.remove('d-none');
                            btnHidden[4].classList.add('d-none');
                            btnHidden[5].classList.add('d-none');
                        }

                        if (this.id == 'cancelar-direccion') {
                            inputs[3].setAttribute('disabled');
                            btnEditar[3].classList.remove('d-none');
                            btnHidden[6].classList.add('d-none');
                            btnHidden[7].classList.add('d-none');
                        }
                    }
                })
            });
        });

        // Funcionalidad al cerrar un modal
        modal.forEach(element => {
            element.addEventListener('hidden.bs.modal', function(event) {
                if (this.id == 'updatePaciente') {
                    inputs[0].setAttribute('disabled');
                    btnEditar[0].classList.remove('d-none');
                    btnHidden[0].classList.add('d-none');
                    btnHidden[1].classList.add('d-none');
                }

                if (this.id == 'updateTelefono') {
                    inputs[1].setAttribute('disabled');
                    btnEditar[1].classList.remove('d-none');
                    btnHidden[2].classList.add('d-none');
                    btnHidden[3].classList.add('d-none');

                    $('#updatePaciente').modal('show');
                }

                if (this.id == 'updateCorreo') {
                    inputs[2].setAttribute('disabled');
                    btnEditar[2].classList.remove('d-none');
                    btnHidden[4].classList.add('d-none');
                    btnHidden[5].classList.add('d-none');

                    $('#updatePaciente').modal('show');
                }

                if (this.id == 'updateDireccion') {
                    inputs[3].setAttribute('disabled');
                    btnEditar[3].classList.remove('d-none');
                    btnHidden[6].classList.add('d-none');
                    btnHidden[7].classList.add('d-none');

                    $('#updatePaciente').modal('show');
                }
            })

        });
    </script>
@stop
