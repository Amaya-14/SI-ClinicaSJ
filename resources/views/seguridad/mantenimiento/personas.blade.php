@extends('adminlte::page')

@section('title', 'Mantenimiento módulo personas')

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
        @slot('titulo', 'Lista de pacientes')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('content')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-telefonos-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-telefonos" type="button" role="tab" aria-controls="pills-telefonos"
                            aria-selected="true">Teléfonos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-cargos-tab" data-bs-toggle="pill" data-bs-target="#pills-cargos"
                            type="button" role="tab" aria-controls="pills-cargos" aria-selected="false">Puestos de
                            trabajo</button>
                    </li>
                </ul>
                <div>
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo télefono" icon="fas fa-plus" data-bs-toggle="modal"
                        data-bs-target="#createTelefono" />
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo puesto" icon="fas fa-plus" data-bs-toggle="modal"
                        data-bs-target="#createPuesto" />
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-telefonos" role="tabpanel"
                    aria-labelledby="pills-telefonos-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-telefonos" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Persona</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-cargos" role="tabpanel" aria-labelledby="pills-cargos-tab">
                    <table class="table table-striped" id="tabla-cargos" style="width: 100%">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Cargo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        @endslot
    </x-simple-card>

@stop

@section('content')
    <x-modal.create.create-telefono />
    <x-modal.update.update-telefono />
    <x-modal.view.view-telefono />
    <x-modal.create.create-puesto-trabajo />
    <x-modal.update.update-puesto-trabajo />
    <x-modal.view.view-puesto-trabajo />
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let idTablaTelefonos = 'tabla-telefonos';
        let idTablaCargos = 'tabla-cargos';

        let idModalCreateTelefono = 'createTelefono';
        let idModalUpdateTelefono = 'updateTelefono';
        let idModalViewTelefono = 'viewTelefono';
        let idFormCreateTelefono = 'crear_telefono';
        let idFormUpdateTelefono = 'actualizar_telefono';

        let idModalCreatePuesto = 'createPuesto';
        let idModalUpdatePuesto = 'updatePuesto';
        let idModalViewPuesto = 'viewPuesto';
        let idFormCreatePuesto = 'crear_puesto';
        let idFormUpdatePuesto = 'actualizar_puesto';
    </script>

    <script>
        $('#' + idTablaTelefonos).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.telefonos') !!}',
            columns: [{
                    data: 'nombrePersona'
                },
                {
                    data: 'numTelefono'
                },
                {
                    data: 'tipoTelefono'
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

        $('#' + idTablaCargos).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.puestos') !!}',
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
        $('#' + idFormCreateTelefono).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/mantenimiento/telefono',
                data: $('#' + idFormCreateTelefono).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        $('#' + idTablaTelefonos).DataTable().ajax.reload();
                        $("#" + idModalCreateTelefono).modal("hide");
                        $('#' + idFormCreateTelefono).trigger("reset");
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

        $('#' + idFormCreatePuesto).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('puesto.store') }}',
                data: $('#' + idFormCreatePuesto).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        $('#' + idTablaCargos).DataTable().ajax.reload();
                        $("#" + idModalCreatePuesto).modal("hide");
                        $('#' + idFormCreatePuesto).trigger("reset");
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
        function editarPuesto(id) {
            $.ajax({
                type: 'GET',
                url: "/mantenimiento/puesto/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_nombre_puesto_trabajo').val(response.nombre);
                        $('#u_descripcion_puesto_trabajo').val(response.descripcion);
                        $('#btn-actualizar-puesto').attr('onclick', `actualizarPuesto("${response.cargo}")`);
                        $("#" + idModalUpdatePuesto).modal("show");
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

        function editarTelefono(id) {
            $.ajax({
                type: 'GET',
                url: "/mantenimiento/telefono/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_persona').val(response.nombrePersona);
                        $('#u_area_telefono_persona').val(response.numArea);
                        $('#u_numero_telefono_persona').val(response.numTelefono);
                        $(`#u_tipo_telefono option:contains('${response.tipoTelefono}')`).prop("selected",
                            true);
                        $('#u_descripcion_telefono').val(response.descripcionTelefono);
                        $('#btn-actualizar-telefono').attr('onclick',
                            `actualizarTelefono("${response.codTelefono}")`);
                        $("#" + idModalUpdateTelefono).modal("show");
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
        function actualizarPuesto(id) {
            $.ajax({
                type: 'PUT',
                url: "/mantenimiento/puesto/" + id,
                data: $('#' + idFormUpdatePuesto).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        $('#' + idTablaCargos).DataTable().ajax.reload();
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
                        $("#" + idModalUpdatePuesto).modal("hide");
                        $('#' + idTablaCargos).DataTable().ajax.reload();
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

        function actualizarTelefono(id) {
            $.ajax({
                type: 'PUT',
                url: "/mantenimiento/telefono/" + id,
                data: $('#' + idFormUpdateTelefono).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        $('#' + idTablaCargos).DataTable().ajax.reload();
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
                        $("#" + idModalUpdateTelefono).modal("hide");
                        $('#' + idTablaTelefonos).DataTable().ajax.reload();
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
        function eliminarPuesto(id) {
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
                        url: "/mantenimiento/puesto/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
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
                                $('#' + idTablaCargos).DataTable().ajax.reload();
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

        function eliminarTelefono(id) {
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
                        url: "/mantenimiento/telefono/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
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
                                $('#' + idTablaTelefonos).DataTable().ajax.reload();
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
        function verPuesto(id) {
            $.ajax({
                type: 'GET',
                url: "/mantenimiento/puesto/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#v_nombre_puesto_trabajo').val(response.nombre);
                        $('#v_descripcion_puesto_trabajo').val(response.descripcion);
                        $("#" + idModalViewPuesto).modal("show");
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

        function verTelefono(id) {
            $.ajax({
                type: 'GET',
                url: "/mantenimiento/telefono/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#v_persona').val(response.nombrePersona);
                        $('#v_area_telefono_persona').val(response.numArea);
                        $('#v_numero_telefono_persona').val(response.numTelefono);
                        $('#v_tipo_telefono').val(response.tipoTelefono);
                        $('#v_descripcion_telefono').val(response.descripcionTelefono);
                        $("#" + idModalViewTelefono).modal("show");
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
                }
            })
        }
    </script>
@stop
