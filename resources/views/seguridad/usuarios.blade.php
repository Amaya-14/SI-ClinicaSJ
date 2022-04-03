@extends('adminlte::page')

@section('title', 'Usuarios')

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
    <x-card>
        @slot('titulo', 'Usuarios')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('idBoton', 'createUsuario')
        @slot('tabla')
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-usuarios" style="width: 100%">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-card>
@stop

@section('content')
    <x-modal.create.create-usuario />
    <x-modal.update.update-usuario />
    <x-modal.view.view-usuario />
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        let idTabla = 'tabla-usuarios';

        let idModalCreate = 'createUsuario';
        let idFormCreate = 'crear_usuario';

        let idModalUpdate = 'updateUsuario';
        let idFormUpdate = 'actualizar_usuario';

        let idModalView = 'viewUsuario';
        let idFormView = 'ver_usuario';
    </script>

    <script>
        $('#' + idTabla).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('load.usuarios') !!}',
            columns: [{
                    data: 'usuario'
                },
                {
                    data: 'rol'
                },
                {
                    data: 'correo'
                },
                {
                    data: 'opciones',
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
        $('#' + idFormCreate).submit(function(event) {
            event.preventDefault();

            let password = $("#c_password").val();
            let confirmPassword = $("#c_password_confirmation").val();

            if (confirmPassword == password) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('user.store') }}",
                    data: $('#' + idFormCreate).serialize(),
                    success: function(response) {
                        console.log(response)
                        if (response.statusCode == 201) {
                            $('#' + idTabla).DataTable().ajax.reload();
                            $("#" + idModalCreate).modal("hide");
                            $('#' + idFormCreate).trigger("reset");
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
            }

            if (confirmPassword != password) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    icon: 'error',
                    title: 'Error',
                    text: 'La contraseña no coinciden',
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal
                            .resumeTimer)
                    }
                })
            }
        })
    </script>

    <script>
        function editar(id) {
            $.ajax({
                type: 'GET',
                url: "/seguridad/usuarios/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_empleado').val(response.empleado);
                        $('#u_name').val(response.usuario);
                        $('#u_email').val(response.correo);
                        $(`#u_rol option:contains('${response.rol}')`).prop(
                            "selected", true);
                        $('#btn-actualizar').attr('onclick',
                            `actualizar("${response.codigoUsuario}","${response.codigoRelacion}")`);
                        $("#" + idModalUpdate).modal("show");
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
        function actualizar(rol, rel) {
            $.ajax({
                type: 'PUT',
                url: "/seguridad/usuario/" + rol + "/" + rel,
                data: $('#' + idFormUpdate).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 200) {
                        $('#' + idTabla).DataTable().ajax.reload();
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
                        $("#" + idModalUpdate).modal("hide");
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
        function ver(id) {
            $.ajax({
                type: 'GET',
                url: "/seguridad/usuarios/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#v_empleado').val(response.empleado);
                        $('#v_name').val(response.usuario);
                        $('#v_email').val(response.correo);
                        $('#v_rol').val(response.rol);
                        $("#" + idModalView).modal("show");
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
                confirmButtonText: 'Si, cancelar',
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

    <script>
        function eliminar(id) {
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
                        url: "/seguridad/usuario/" + id,
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
                                $('#' + idTabla).DataTable().ajax.reload();
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
        $("#c_empleado").change(function(evenet) {
            $.ajax({
                type: 'GET',
                url: "/seguridad/usuario/correo/" + evenet.target.value,
                success: function(response) {
                    console.log(response.correo)
                    if (response) {
                        $("#c_email").val(response.correo);
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
            });
        });
    </script>
@stop
