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

        .btn-check:focus+.btn,
        .btn:focus,
        .form-select:focus,
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.1rem rgb(26 108 229 / 40%);
        }

        .col_center {
            text-align: center;
        }

    </style>
@stop

@section('content_header')
    <x-simple-card>
        @slot('titulo', 'Mantenimiento del módulo almacén')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('content')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <ul class="nav nav-pills d-inline-flex" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-tipo-medicamento-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-tipo-medicamento" type="button" role="tab"
                            aria-controls="pills-tipo-medicamento" aria-selected="true">Tipos de medicamentos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-unidades-presentacion-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-unidades-presentacion" type="button" role="tab"
                            aria-controls="pills-unidades-presentacion" aria-selected="false">Unidades de
                            presentación</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tipo-materiales-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-tipo-materiales" type="button" role="tab"
                            aria-controls="pills-tipo-materiales" aria-selected="false">Tipos de materiales</button>
                    </li>
                </ul>
                <div>
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo registro" icon="fas fa-plus" data-bs-toggle="modal"
                        data-bs-target="#createRegistroAlmacen" />
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tipo-medicamento" role="tabpanel"
                    aria-labelledby="pills-tipo-medicamento-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-tipos-medicamentos" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-unidades-presentacion" role="tabpanel"
                    aria-labelledby="pills-unidades-presentacion-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-unidades-presentacion" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tipo-materiales" role="tabpanel"
                    aria-labelledby="pills-tipo-materiales-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-tipos-materiales" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        @endslot
    </x-simple-card>
@stop

@section('content')
    <x-modal.create.create-mantenimiento-almacen />
    <x-modal.update.update-mantenimiento-almacen />
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let idTablaTiposMedicamentos = 'tabla-tipos-medicamentos';
        let idTablaUnidadesPresentacion = 'tabla-unidades-presentacion';
        let idTablaTiposMateriales = 'tabla-tipos-materiales';

        let idModalCreateRegistroAlmacen = 'createRegistroAlmacen';
        let idModalUpdateRegistroAlmacen = 'updateRegistroAlmacen';
        let idFormCreateRegistroAlmacen = 'crear_registro_almacen';
        let idFormUpdateRegistroAlmacen = 'update_registro_almacen';
    </script>

    <script>
        $('#' + idTablaTiposMedicamentos).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.tipos.medicamentos') !!}',
            columns: [{
                    data: 'nombre'
                },
                {
                    data: 'descripcion'
                },
                {
                    data: 'Opciones',
                    orderable: false,
                }
            ],
            "columnDefs": [{
                className: "col_center",
                "targets": "_all"
            }, ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });

        $('#' + idTablaUnidadesPresentacion).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.unidades.presentacion') !!}',
            columns: [{
                    data: 'nombre'
                },
                {
                    data: 'Opciones',
                    orderable: false,
                }
            ],
            "columnDefs": [{
                className: "col_center",
                "targets": "_all"
            }, ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });

        $('#' + idTablaTiposMateriales).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.tipos.materiales') !!}',
            columns: [{
                    data: 'nombre'
                },
                {
                    data: 'descripcion'
                },
                {
                    data: 'Opciones',
                    orderable: false,
                }
            ],
            "columnDefs": [{
                className: "col_center",
                "targets": "_all"
            }, ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });
    </script>

    <script>
        $('#' + idFormCreateRegistroAlmacen).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/mantenimiento/almacen/registro',
                data: $('#' + idFormCreateRegistroAlmacen).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        $('#' + idTablaTiposMedicamentos).DataTable().ajax.reload();
                        $('#' + idTablaUnidadesPresentacion).DataTable().ajax.reload();
                        $('#' + idTablaTiposMateriales).DataTable().ajax.reload();

                        $("#" + idModalCreateRegistroAlmacen).modal("hide");
                        $('#' + idFormCreateRegistroAlmacen).trigger("reset");
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Registro creado exitosamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                    }

                    if (response.statusCode != 201) {
                        console.log(response);
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo crear el registro correctamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                    }
                }
            });
        })
    </script>

    <script>
        function editar(id, str) {
            $.ajax({
                type: 'GET',
                url: "/mantenimiento/almacen/registro/" + id + "/edit/" + str,
                success: function(response) {
                    console.log(response)
                    if (response) {
                        data = response[0]
                        /*$(`#u_tipo_registro option:contains('${response.tipoTelefono}')`).prop("selected",
                        true);*/
                        $('#u_tipo_registro').val(response[1]);
                        $('#u_nombre_registro').val(data.nombre);
                        if (response[1] != 'UniPres') $('#u_descripcion_registro').val(data.descripcion);
                        if (response[1] == 'UniPres') {
                            $('#u_descripcion_registro').val("---");
                            $('#input-descripcion').addClass('d-none');
                            //$('#input-descripcion').attr('disabled');
                        }

                        $('#btn-actualizar').attr('onclick', `actualizar("${data.codigo}", "${response[2]}")`);
                        $("#" + idModalUpdateRegistroAlmacen).modal("show");
                    }

                    if (!response) {
                        console.log(response);
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo obtener la información del registro',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                    }
                }
            });
        }
    </script>

    <script>
        function actualizar(id) {
            $.ajax({
                type: 'PUT',
                url: "/mantenimiento/almacen/registro/" + id,
                data: $('#' + idFormUpdateRegistroAlmacen).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        $('#' + idTablaTiposMedicamentos).DataTable().ajax.reload();
                        $('#' + idTablaUnidadesPresentacion).DataTable().ajax.reload();
                        $('#' + idTablaTiposMateriales).DataTable().ajax.reload();
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Registro actualizado exitosamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        $("#" + idModalUpdateRegistroAlmacen).modal("hide");
                        //editar(idPersona);
                    }

                    if (response.statusCode != 200) {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo actualizar el registro correctamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                    }
                }
            });
        }
    </script>

    <script>
        function eliminar(id, str) {
            console.log(id)
            console.log(str)
            Swal.fire({
                title: '¿Eliminar el registro?',
                text: "¡No podrá revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                stopKeydownPropagation: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: "/mantenimiento/almacen/registro/" + id + "/" + str,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response)
                            if (response.statusCode == 200) {
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    icon: 'success',
                                    title: 'Registro eliminado',
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                })
                                $('#' + idTablaTiposMedicamentos).DataTable().ajax.reload();
                                $('#' + idTablaUnidadesPresentacion).DataTable().ajax.reload();
                                $('#' + idTablaTiposMateriales).DataTable().ajax.reload();
                                return;
                            }

                            if (response.statusCode != 200) {
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 4000,
                                    timerProgressBar: true,
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'El registro no se pudo eliminar',
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer)
                                        toast.addEventListener('mouseleave',
                                            Swal
                                            .resumeTimer)
                                    }
                                })
                            }
                        }
                    });
                }
            })

        }
    </script>

    <script>
        function cerrarModal(str, id, form, btn = null) {
            Swal.fire({
                title: '¿Está seguro/a?',
                text: `¡${str} que no haya guardado se perderán!`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, salir',
                cancelButtonText: 'No',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                stopKeydownPropagation: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#" + id).modal("hide");
                    $('#' + form).trigger("reset");
                    if (btn) $("#" + btn).removeAttr("onclick");
                    //$('#input-descripcion').removeAttr('disabled');
                    $('#input-descripcion').removeClass('d-none');
                }
            })
        }
    </script>
@stop
