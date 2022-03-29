@extends('adminlte::page')

@section('title', 'Historial Citas')

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

        .grid--row__extend {
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
        @slot('titulo', 'Lista de citas')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('idBoton', 'createCita')
        @slot('tabla')
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-citas" style="width: 100%">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Médico</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-card>
@stop

@section('content')
    <x-modal.create.create-cita />
    <x-modal.update.update-cita />
    <x-modal.view.view-cita />

    <x-moda-instruccion>
        @slot('id', 'modalInstrucciones')
        @slot('titulo', 'Instrucciones')
    </x-moda-instruccion>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let idTabla = 'tabla-citas';
        let idModalCreateCita = 'createCita';
        let idFormCreateCita = 'crear_cita';
        let idModalUpdateCita = 'updateCita';
        let idFormUpdateCita = 'actualizar_cita';
        let idModalViewCita = 'viewCita';

        $("#habilitar-edicion").addClass("d-none");
    </script>
    <script>
        $('#' + idTabla).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('historial.index') !!}',
            columns: [{
                    data: 'doctor'
                },
                {
                    data: 'paciente'
                },
                {
                    data: 'fechaInicio'
                },
                {
                    data: 'estado'
                },
                {
                    data: 'tipo'
                },
                {
                    data: 'Opciones',
                    orderable: false,
                }
            ],
            "columnDefs": [{
                className: "col_center",
                "targets": "_all"
            }],
            "order": [
                [2, 'desc']
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
            }
        });
    </script>

    <script>
        $("#" + idFormCreateCita).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'citas',
                data: $("#" + idFormCreateCita).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        $("#" + idModalCreateCita).modal("hide");
                        $("#" + idFormCreateCita).trigger("reset");
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Cita creada exitosamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        $('#' + idTabla).DataTable().ajax.reload();
                    }

                    if (response.statusCode != 201) {
                        //console.log(response);
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo crear la cita correctamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                    }
                },
                error: function(err) {
                    console.log(err);
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo crear la cita correctamente',
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })
                }
            });
        });
    </script>

    <script>
        /* */
        function ver(id) {
            $.ajax({
                type: 'GET',
                url: "citas/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $("#v_doctor_cita").val(response.doctor);
                        $("#v_paciente_cita").val(response.paciente);
                        $("#v_estado_cita").val(response.estado);
                        $("#v_tipo_cita").val(response.tipo);
                        $("#v_fecha_inicio_cita").val(response.fechaInicio);
                        $("#v_hora_inicio_cita").val(response.horaInicio);
                        $("#v_fecha_final_cita").val(response.fechaFinal);
                        $("#v_hora_final_cita").val(response.horaFinal);
                        $("#v_descripcion_cita").val(response.desCita);
                        $("#" + idModalViewCita).modal('show');
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
                url: "citas/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $(`#u_doctor_cita option:contains('${response.doctor}')`).prop(
                            "selected", true);
                        $(`#u_paciente_cita option:contains('${response.paciente}')`)
                            .prop("selected", true);
                        $(`#u_estado_cita option:contains('${response.estado}')`).prop(
                            "selected", true);
                        $(`#u_tipo_cita option:contains('${response.tipo}')`).prop(
                            "selected", true);
                        $("#u_fecha_inicio_cita").val(response.fechaInicio);
                        $("#u_hora_inicio_cita").val(response.horaInicio);
                        $("#u_fecha_final_cita").val(response.fechaFinal);
                        $("#u_hora_final_cita").val(response.horaFinal);
                        $("#u_descripcion_cita").val(response.desCita);
                        $('#btn-actualizar').attr('onclick',
                            `actualizar("${response.codigoCita}")`);
                        $("#" + idModalUpdateCita).modal('show');
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
            console.log(id)
            $.ajax({
                type: 'PUT',
                url: "citas/" + id,
                data: $('#' + idFormUpdateCita).serialize(),
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
                            title: 'Registro actualizado exitosamente',
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
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
                        url: "citas/" + id,
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
