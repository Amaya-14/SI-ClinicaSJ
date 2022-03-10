@extends('adminlte::page')

@section('title', 'Roles-Permisos')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
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
            <div class="d-flex justify-content-between align-items-center mb-3">
                <ul class="nav nav-pills d-inline-flex" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-roles-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-roles" type="button" role="tab" aria-controls="pills-roles"
                            aria-selected="true">Roles</button>
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
                <div>
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo rol" icon="fas fa-plus" data-toggle="modal"
                        data-target="#createRol" />
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo Objeto" icon="fas fa-plus" data-toggle="modal"
                        data-target="#createObjeto" />
                </div>
            </div>
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

    @livewire('modal.create.modal-rol')
    @livewire('modal.update.modal-rol')
    @livewire('modal.update.modal-permiso')
    @livewire('modal.create.modal-objeto')
    @livewire('modal.update.modal-objeto')
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

        // Funcionalidad al cerrar un modal
        modal.forEach(element => {
            element.addEventListener('hidden.bs.modal', function(event) {
                if (this.id == 'updateRol' && btnEditar[0].classList.contains('d-none')) {
                    inputs[0].setAttribute('disabled');
                    btnEditar[0].classList.remove('d-none');
                    btnHidden[0].classList.add('d-none');
                    btnHidden[1].classList.add('d-none');
                }

                if (this.id == 'updatePermiso' && btnEditar[1].classList.contains('d-none')) {
                    inputs[1].setAttribute('disabled');
                    btnEditar[1].classList.remove('d-none');
                    btnHidden[2].classList.add('d-none');
                    btnHidden[3].classList.add('d-none');
                }

                if (this.id == 'updateObjeto' && btnEditar[2].classList.contains('d-none')) {
                    inputs[2].setAttribute('disabled');
                    btnEditar[2].classList.remove('d-none');
                    btnHidden[4].classList.add('d-none');
                    btnHidden[5].classList.add('d-none');
                }
            })
        });
    </script>
@stop
