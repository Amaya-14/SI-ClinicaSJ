@extends('adminlte::page')

@section('title', 'Empleados')

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
        .grid__item10,
        .grid__item11,
        .grid__item14 {
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

        .col_center {
            text-align: center;
        }

    </style>
@stop

@section('content_header')
    <x-card>
        @slot('titulo', 'Lista de empleados')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('idBoton', 'createEmpleado')
        @slot('tabla')
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-empleados" style="width: 100%">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Identidad</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-card>
@stop

@section('content')
    <x-modal.create.create-empleado />
    <x-modal.update.update-empleado />
    <x-modal.view.view-empleado />

    <x-moda-instruccion>
        @slot('id', 'modalInstrucciones')
        @slot('titulo', 'Instrucciones')
    </x-moda-instruccion>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        let idTabla = 'tabla-empleados';
        let idFormCrearEmpleado = 'crear_empleado';
        let idFormUpdateEmpleado = 'actualizar_empleado';
        let idModalCreateEmpleado = 'createEmpleado';
        let idModalUpdateEmpleado = 'updateEmpleado';
        let idPersona;

        /* */
        $('#' + idTabla).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('empleados.index') !!}',
            "order": [
                [5, 'asc']
            ],
            columns: [{
                    data: 'nombre',
                },
                {
                    data: 'identidad'
                },
                {
                    data: 'edad',
                },
                {
                    data: 'fechaNacimiento'
                },
                {
                    data: 'sexo'
                },
                {
                    data: 'cargo'
                },
                {
                    data: 'Opciones',
                    orderable: false,
                }
            ],
            "columnDefs": [{
                    className: "col_center",
                    "targets": [1]
                },
                {
                    className: "col_center",
                    "targets": [2]
                },
                {
                    className: "col_center",
                    "targets": [3]
                },
                {
                    className: "col_center",
                    "targets": [4]
                },
                {
                    className: "col_center",
                    "targets": [5]
                },
                {
                    className: "col_center",
                    "targets": [6]
                }
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });
    </script>

    <script>
        /* */
        $('#' + idFormCrearEmpleado).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/empleados',
                data: $('#' + idFormCrearEmpleado).serialize(),
                success: function(response) {
                    if (response.statusCode == 201) {
                        $("#" + idModalCreateEmpleado).modal("hide");
                        $('#' + idFormCrearEmpleado).trigger("reset");
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
                        $('#' + idTabla).DataTable().ajax.reload();
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
                },
                error: function(err) {
                    console.log(err)
                }
            });
        })
    </script>

    <script>
        /* */
        function ver(id) {
            $.ajax({
                type: 'GET',
                url: "empleados/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        persona = response[0];
                        idPersona = persona.empleado;
                        $('#v_identidad').val(persona.dni);
                        $('#v_nacionalidad').val(persona.nacionalidad);
                        $('#v_nombre').val(persona.nombres);
                        $('#v_apellido').val(persona.apellidos);
                        $('#v_sexo').val(persona.sexo);
                        $('#v_fecha_nacimiento').val(persona.fechaNacimiento);
                        $('#v_edad').val(persona.edad);
                        $('#v_estado_civil').val(persona.estadoCivil);
                        $('#v_fecha_contratacion').val(persona.fechaContratacion);
                        $('#v_cargo').val(persona.nombreCargo);
                        $('#btn-actualizar').attr('onclick', `actualizar("${persona.persona}")`);

                        let telefonos = response[1];
                        if (telefonos.length) {
                            let limitF = 1;
                            let limitC = 1;
                            for (let i = 0; i < telefonos.length; i++) {
                                if (telefonos[`${i}`].tipoTelefono == 'F' && limitF) {
                                    $('#cod_telefono_fijo').val(telefonos[`${i}`].codTelefono);
                                    $('#v_area_telefono_fijo').val(telefonos[`${i}`].numArea);
                                    $('#v_numero_telefono_fijo').val(telefonos[`${i}`].numTelefono);
                                    $('#v_tipo_telefono_fijo').val(telefonos[`${i}`].tipoTelefono);
                                    $('#v_descripcion_telefono_fijo').val(telefonos[`${i}`]
                                        .descripcionTelefono);
                                    limitF = 0;
                                }

                                if (telefonos[`${i}`].tipoTelefono == 'C' && limitC) {
                                    $('#cod_telefono_celular').val(telefonos[`${i}`].codTelefono);
                                    $('#v_area_telefono_celular').val(telefonos[`${i}`].numArea);
                                    $('#v_numero_telefono_celular').val(telefonos[`${i}`].numTelefono);
                                    $('#v_tipo_telefono_celular').val(telefonos[`${i}`].tipoTelefono);
                                    $('#v_descripcion_telefono_celular').val(telefonos[`${i}`]
                                        .descripcionTelefono);
                                    limitC = 0;
                                }
                            }
                        }

                        let direccion = response[2][0];
                        if (response[2].length > 0) {
                            $('#cod_direccion').val(direccion.codDireccion);
                            $('#v_direccion').val(direccion.direccion);
                            $('#v_referencia').val(direccion.descripcionDireccion);
                        }
                        if (response[3].length > 0) {
                            $('#cod_correo').val(response[3][0].codCorreo);
                            $('#v_correo').val(response[3][0].correo);
                        }
                        $("#viewEmpleado").modal("show");
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
        /* */
        function editar(id) {
            $.ajax({
                type: 'GET',
                url: "empleados/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        persona = response[0];
                        idPersona = persona.empleado;
                        $('#u_identidad').val(persona.dni);
                        $('#u_nacionalidad').val(persona.nacionalidad);
                        $('#u_nombre').val(persona.nombres);
                        $('#u_apellido').val(persona.apellidos);
                        $('#u_sexo').val(persona.sexo);
                        $('#u_fecha_nacimiento').val(persona.fechaNacimiento);
                        $('#u_edad').val(persona.edad);
                        $('#u_estado_civil').val(persona.estadoCivil);
                        $('#u_fecha_contratacion').val(persona.fechaContratacion);
                        $(`#u_cargo option:contains('${persona.nombreCargo}')`).prop("selected", true);
                        $('#btn-actualizar').attr('onclick', `actualizar("${persona.persona}")`);

                        let telefonos = response[1];
                        if (telefonos.length) {
                            let limitF = 1;
                            let limitC = 1;
                            for (let i = 0; i < telefonos.length; i++) {
                                if (telefonos[`${i}`].tipoTelefono == 'F' && limitF) {
                                    $('#cod_telefono_fijo').val(telefonos[`${i}`].codTelefono);
                                    $('#u_area_telefono_fijo').val(telefonos[`${i}`].numArea);
                                    $('#u_numero_telefono_fijo').val(telefonos[`${i}`].numTelefono);
                                    $('#u_tipo_telefono_fijo').val(telefonos[`${i}`].tipoTelefono);
                                    $('#u_descripcion_telefono_fijo').val(telefonos[`${i}`]
                                        .descripcionTelefono);
                                    limitF = 0;
                                }

                                if (telefonos[`${i}`].tipoTelefono == 'C' && limitC) {
                                    $('#cod_telefono_celular').val(telefonos[`${i}`].codTelefono);
                                    $('#u_area_telefono_celular').val(telefonos[`${i}`].numArea);
                                    $('#u_numero_telefono_celular').val(telefonos[`${i}`].numTelefono);
                                    $('#u_tipo_telefono_celular').val(telefonos[`${i}`].tipoTelefono);
                                    $('#u_descripcion_telefono_celular').val(telefonos[`${i}`]
                                        .descripcionTelefono);
                                    limitC = 0;
                                }
                            }
                        }

                        let direccion = response[2][0];
                        if (response[2].length > 0) {
                            $('#cod_direccion').val(direccion.codDireccion);
                            $('#u_direccion').val(direccion.direccion);
                            $('#u_referencia').val(direccion.descripcionDireccion);
                        }
                        if (response[3].length > 0) {
                            $('#cod_correo').val(response[3][0].codCorreo);
                            $('#u_correo').val(response[3][0].correo);
                        }
                        $("#" + idModalUpdateEmpleado).modal("show");
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

        /* */
        function actualizar(id) {
            $.ajax({
                type: 'PUT',
                url: "empleados/" + id,
                data: $('#' + idFormUpdateEmpleado).serialize(),
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
                        $("#" + idModalUpdateEmpleado).modal("hide");
                        editar(idPersona);
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
        /* */
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
                        url: "empleados/" + id,
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
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'El registro no se pudo eliminar',
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                })
                                return;
                            }

                            if (response.statusCode != 200) {
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 4000,
                                    timerProgressBar: true,
                                    icon: 'success',
                                    title: 'Registro eliminado',
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer)
                                        toast.addEventListener('mouseleave',
                                            Swal
                                            .resumeTimer)
                                    }
                                })
                                $('#' + idTabla).DataTable().ajax.reload();
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log(xhr.status);
                            console.log(thrownError);
                        }
                    });
                }
            })
        }
    </script>

    <script>
        function cerrarModal(id, form) {
            Swal.fire({
                title: '¿Está seguro/a?',
                text: "¡Los cambios que no haya guardado se perderán!",
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
                }
            })
        }
    </script>
@stop
