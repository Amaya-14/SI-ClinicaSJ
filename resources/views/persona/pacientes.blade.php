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
        .grid__item10,
        .grid__item11 {
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
        @slot('titulo', 'Lista de pacientes')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('idBoton', 'createPaciente')
        @slot('tabla')
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-pacientes" style="width: 100%">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Identidad</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-card>
@stop

@section('content')
    <x-modal.create.create-paciente />
    <x-modal.update.update-paciente />
    <x-modal.view.view-paciente />

    <x-moda-instruccion>
        @slot('id', 'modalInstrucciones')
        @slot('titulo', 'Instrucciones')
    </x-moda-instruccion>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let idTabla = 'tabla-pacientes';
        let idFormCrearEmpleado = 'crear_paciente';
        let idFormUpdateEmpleado = 'actualizar_paciente';
        let idModalCreateEmpleado = 'createPaciente';
        let idModalUpdateEmpleado = 'updatePaciente';
        let idPersona;
        /* */
        $('#' + idTabla).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('pacientes.index') !!}',
            columns: [{
                    data: 'nombre'
                },
                {
                    data: 'identidad'
                },
                {
                    data: 'edad'
                },
                {
                    data: 'fechaNacimiento'
                },
                {
                    data: 'sexo'
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
                url: 'pacientes',
                data: $('#' + idFormCrearEmpleado).serialize(),
                success: function(response) {
                    if (response) {
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
        /* */
        function ver(id) {
            $.ajax({
                type: 'GET',
                url: 'pacientes/' + id,
                success: function(response) {
                    console.log(response)
                    data = response[0];
                    $('#v_identidad').val(data.dni);
                    $('#v_nacionalidad').val(data.nacionalidad);
                    $('#v_nombre').val(data.nombres);
                    $('#v_apellido').val(data.apellidos);
                    $('#v_sexo').val(data.sexo);
                    $('#v_fecha_nacimiento').val(data.fechaNacimiento);
                    $('#v_edad').val(data.edad);
                    $('#v_estado_civil').val(data.estadoCivil);
                    telefonos = response[1];
                    if (telefonos.length) {
                        let limitF = 1;
                        let limitC = 1;
                        for (let i = 0; i < telefonos.length; i++) {
                            if (telefonos[`${i}`].tipoTelefono == 'F' && limitF) {
                                $('#v_area_telefono_fijo').val(telefonos[`${i}`].numArea);
                                $('#v_numero_telefono_fijo').val(telefonos[`${i}`].numTelefono);
                                $('#v_tipo_telefono_fijo').val(telefonos[`${i}`].tipoTelefono);
                                $('#v_descripcion_telefono_fijo').val(telefonos[`${i}`]
                                    .descripcionTelefono);
                                limitF = 0;
                            }

                            if (telefonos[`${i}`].tipoTelefono == 'C' && limitC) {
                                $('#v_area_telefono_celular').val(telefonos[`${i}`].numArea);
                                $('#v_numero_telefono_celular').val(telefonos[`${i}`].numTelefono);
                                $('#v_tipo_telefono_celular').val(telefonos[`${i}`].tipoTelefono);
                                $('#v_descripcion_telefono_celular').val(telefonos[`${i}`]
                                    .descripcionTelefono);
                                limitC = 0;
                            }
                        }
                    }
                    $("#viewPaciente").modal("show");
                },
            });
        }
    </script>
    <script>
        /* */
        function editar(id) {
            $.ajax({
                type: 'GET',
                url: "pacientes/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        persona = response[0];
                        idPersona = persona.paciente;
                        $('#u_identidad').val(persona.dni);
                        $('#u_nacionalidad').val(persona.nacionalidad);
                        $('#u_nombre').val(persona.nombres);
                        $('#u_apellido').val(persona.apellidos);
                        $('#u_sexo').val(persona.sexo);
                        $('#u_fecha_nacimiento').val(persona.fechaNacimiento);
                        $('#u_edad').val(persona.edad);
                        $('#u_estado_civil').val(persona.estadoCivil);
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
                url: "pacientes/" + id,
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
                        url: "pacientes/" + id,
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
                                $('#tabla-empleados').DataTable().ajax.reload();
                            }
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
