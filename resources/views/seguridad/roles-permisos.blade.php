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

        .col_center {
            text-align: center;
        }

    </style>
@stop

@section('content_header')
    <x-simple-card>
        @slot('titulo', '')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('content')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <ul class="nav nav-pills d-inline-flex" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-roles-tab" data-bs-toggle="pill" data-bs-target="#pills-roles"
                            type="button" role="tab" aria-controls="pills-roles" aria-selected="true">Roles</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-objetos-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-objetos" type="button" role="tab" aria-controls="pills-objetos"
                            aria-selected="false">Objetos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-permisos-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-permisos" type="button" role="tab" aria-controls="pills-permisos"
                            aria-selected="false">Permisos</button>
                    </li>
                </ul>
                <div>
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo rol" icon="fas fa-plus" data-bs-toggle="modal"
                        data-bs-target="#createRol" />
                    <x-adminlte-button class="btn-sm bg-teal" label="Nuevo Objeto" icon="fas fa-plus" data-bs-toggle="modal"
                        data-bs-target="#createObjeto" />
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-roles" role="tabpanel" aria-labelledby="pills-roles-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-roles" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-objetos" role="tabpanel" aria-labelledby="pills-objetos-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-objetos" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Objetos</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-permisos" role="tabpanel" aria-labelledby="pills-permisos-tab">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabla-permisos" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Objeto</th>
                                    <th scope="col">Visualizar</th>
                                    <th scope="col">Consultar</th>
                                    <th scope="col">Insertar</th>
                                    <th scope="col">Actualizar</th>
                                    <th scope="col">Eliminar</th>
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
    <x-modal.create.create-rol />
    <x-modal.update.update-rol />
    <x-modal.update.update-permiso />

    <x-modal.create.create-objeto />
    <x-modal.update.update-objeto />
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        let idTablaRoles = 'tabla-roles';
        let idTablaObjetos = 'tabla-objetos';
        let idTablaPermisos = 'tabla-permisos';

        let idModalCreateRol = 'createRol';
        let idModalUpdateRol = 'updateRol';
        let idFormCreateRol = 'crear_rol';
        let idFormUpdateRol = 'actualizar_rol';

        let idModalCreateObjeto = 'createObjeto';
        let idModalUpdateObjeto = 'updateObjeto';
        let idFormCreateObjeto = 'crear_objeto';
        let idFormUpdateObjeto = 'actualizar_objeto';

        let idModalUpdatePermiso = 'updatePermiso';
        let idFormUpdatePermiso = 'actualizar_permiso';
    </script>

    <script>
        $('#' + idTablaRoles).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.roles') !!}',
            columns: [{
                    data: 'rol'
                },
                {
                    data: 'Opciones',
                    orderable: false
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

        $('#' + idTablaObjetos).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.objetos') !!}',
            columns: [{
                    data: 'objeto'
                },
                {
                    data: 'Opciones',
                    orderable: false
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

        $('#' + idTablaPermisos).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.permisos') !!}',
            columns: [{
                    data: 'rol'
                },
                {
                    data: 'objeto'
                },
                {
                    data: 'visualizar'
                },
                {
                    data: 'consultar'
                },
                {
                    data: 'insertar'
                },
                {
                    data: 'actualizar'
                },
                {
                    data: 'eliminar'
                },
                {
                    data: 'Opciones',
                    orderable: false
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
        $('#' + idFormCreateRol).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{ route('rol.post') }}",
                data: $('#' + idFormCreateRol).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        actualizarTablas();
                        $("#" + idModalCreateRol).modal("hide");
                        $('#' + idFormCreateRol).trigger("reset");
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
                },
                error: function(error) {
                    console.error(error);
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
            });
        })

        $('#' + idFormCreateObjeto).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{ route('objeto.post') }}",
                data: $('#' + idFormCreateObjeto).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        actualizarTablas();
                        $("#" + idModalCreateObjeto).modal("hide");
                        $('#' + idFormCreateObjeto).trigger("reset");
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
                },
                error: function(error) {
                    console.error(error);
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
            });
        })
    </script>

    <script>
        function editarRol(id) {
            $.ajax({
                type: 'GET',
                url: "/seguridad/rol/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_nombre_rol').val(response.rol);
                        $('#btn-actualizar-rol').attr('onclick', `actualizarRol("${response.codigo}")`);
                        $("#" + idModalUpdateRol).modal("show");
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
                },
                error: function(error) {
                    console.error(response);
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
            });
        }

        function editarObjeto(id) {
            $.ajax({
                type: 'GET',
                url: "/seguridad/objeto/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_nombre_objeto').val(response.objeto);
                        $('#btn-actualizar-objeto').attr('onclick', `actualizarObjeto("${response.codigo}")`);
                        $("#" + idModalUpdateObjeto).modal("show");
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
                },
                error: function(error) {
                    console.error(response);
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
            });
        }

        function editarPermiso(rol, obj) {
            $.ajax({
                type: 'GET',
                url: "/seguridad/permiso/" + rol + "/" + obj + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_rol_permiso').val(response.rol);
                        $('#u_objeto_permiso').val(response.objeto);
                        if (response.visualizar) $('#u_visualizar').attr('checked', 'true');
                        if (response.consultar) $('#u_consultar').attr('checked', 'true');
                        if (response.insertar) $('#u_insertar').attr('checked', 'true');
                        if (response.actualizar) $('#u_actualizar').attr('checked', 'true');
                        if (response.eliminar) $('#u_eliminar').attr('checked', 'true');
                        $('#btn-actualizar-permiso').attr('onclick',
                            `actualizarPermiso("${response.codigoRol}","${response.codigoObjeto}")`);
                        $("#" + idModalUpdatePermiso).modal("show");
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
                },
                error: function(error) {
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
                    console.error(error);
                }
            });
        }
    </script>

    <script>
        function actualizarRol(id) {
            $.ajax({
                type: 'PUT',
                url: "/seguridad/rol/" + id,
                data: $('#' + idFormUpdateRol).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        actualizarTablas();
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
                        $("#" + idModalUpdateRol).modal("hide");
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
                },
                error: function(error) {
                    console.error(error);
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
            });
        }

        function actualizarObjeto(id) {
            $.ajax({
                type: 'PUT',
                url: "/seguridad/objeto/" + id,
                data: $('#' + idFormUpdateObjeto).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        actualizarTablas();
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
                        $("#" + idModalUpdateObjeto).modal("hide");
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
                },
                error: function(error) {
                    console.error(error);
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
            });
        }

        function actualizarPermiso(rol, obj) {
            $.ajax({
                type: 'PUT',
                url: "/seguridad/permiso/" + rol + "/" + obj,
                data: $('#' + idFormUpdatePermiso).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        actualizarTablas();
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
                        //$("#" + idModalUpdateObjeto).modal("hide");
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
                },
                error: function(error) {
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
                    console.log(error);
                }
            });
        }
    </script>

    <script>
        function eliminarRol(id) {
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
                        url: "/seguridad/rol/" + id,
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
                                actualizarTablas();
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
                        },
                        error: function(error) {
                            console.error(error);
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
                    });
                }
            })
        }

        function eliminarObjeto(id) {
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
                        url: "/seguridad/objeto/" + id,
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
                                actualizarTablas();
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
                        },
                        error: function(error) {
                            console.error(error);
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
                    if (form == 'actualizar_permiso') {
                        $("#u_visualizar").removeAttr("checked");
                        $("#u_consultar").removeAttr("checked")
                        $("#u_insertar").removeAttr("checked")
                        $("#u_actualizar").removeAttr("checked")
                        $("#u_eliminar").removeAttr("checked")
                    }
                }
            })
        }
    </script>

    <script>
        function actualizarTablas() {
            $('#' + idTablaRoles).DataTable().ajax.reload();
            $('#' + idTablaObjetos).DataTable().ajax.reload();
            $('#' + idTablaPermisos).DataTable().ajax.reload();
        }
    </script>
@stop
