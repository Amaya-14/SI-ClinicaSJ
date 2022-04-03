@extends('adminlte::page')

@section('title', 'Citas')

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

        .fc-event {
            cursor: pointer;
        }

    </style>
@stop

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0">Calendario de citas</h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                {{-- <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                    title="información"></i> --}}
            </div>
        </div>
        <div class="card-body">
            <section id="calendar-citas"></section>
        </div>
        <div class="card-footer d-flex justify-content-end">
        </div>
    </div>
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
        let idCalendario;
        let idModalCreateCita = 'createCita';
        let idFormCreateCita = 'crear_cita';
        let idModalUpdateCita = 'updateCita';
        let idFormUpdateCita = 'actualizar_cita';
        let idModalViewCita = 'viewCita';
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let calendarEl = document.getElementById('calendar-citas');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'es',
                navLinks: true,
                weekNumbers: true,
                navLinkWeekClick: true,
                selectable: true,
                selectMirror: true,
                nowIndicator: true,
                customButtons: {
                    nuevaCita: {
                        text: 'Nueva Cita',
                        click: function() {
                            $('#' + idModalCreateCita).modal('show'); // abrir
                        },
                    },
                },
                bootstrapFontAwesome: {
                    nuevaCita: 'fas fa-plus',
                },
                headerToolbar: {
                    left: 'prev,next today nuevaCita',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
                },
                themeSystem: 'bootstrap',
                editable: false,
                views: {
                    dayGridMonth: { // name of view
                        titleFormat: {
                            year: 'numeric',
                            month: 'long',
                        },
                        // other view-specific options here
                    },
                },
                eventSources: [{
                    url: 'citas/create',
                    method: 'GET',
                    failure: function() {
                        console.log('Error');
                    },
                }],
                dateClick: function(info) {
                    $("#c_fecha_inicio_cita").val(info.dateStr)
                    $("#c_fecha_final_cita").val(info.dateStr)
                    $("#" + idModalCreateCita).modal('show');
                },
                eventClick: function(info) {
                    $.ajax({
                        type: 'GET',
                        url: 'citas/' + info.event.extendedProps.codigo + '/edit',
                        success: function(response) {
                            console.log(response)
                            $("#v_doctor_cita").val(response.doctor);
                            $("#v_paciente_cita").val(response.paciente);
                            $("#v_estado_cita").val(response.estado);
                            $("#v_tipo_cita").val(response.tipo);
                            $("#v_fecha_inicio_cita").val(response.fechaInicio);
                            $("#v_hora_inicio_cita").val(response.horaInicio);
                            $("#v_fecha_final_cita").val(response.fechaFinal);
                            $("#v_hora_final_cita").val(response.horaFinal);
                            $("#v_descripcion_cita").val(response.desCita);
                            $('#habilitar-edicion').attr('onclick',
                                `editar("${response.codigoCita}")`);
                            $("#" + idModalViewCita).modal('show');
                        }
                    });
                },
                windowResizeDelay: 100,
            });

            calendar.render();

            setTimeout(() => {
                calendar.updateSize();
            }, 200);
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
                        $("#" + idModalViewCita).modal('hide');
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
