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

    </style>
@stop

@section('content_header')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de citas</h3>
            <div class="card-tools">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <section id="calendar-citas"></section>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

@stop

@section('content')
    <button class="d-none" id="btn-cita"data-toggle="modal" data-target="#createCita">Abrir</button>
    @livewire('modal.create.modal-cita')
    @livewire('modal.update.modal-cita')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>

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
                            document.getElementById('btn-cita').click();
                        },
                    },
                    actualizarCita: {
                        text: 'Actualizar Cita',
                        click: function() {
                            $('#updateCita').modal('show'); // abrir
                        },
                    },
                },
                bootstrapFontAwesome: {
                    nuevaCita: 'fas fa-plus',
                },
                headerToolbar: {
                    left: 'prev,next today nuevaCita actualizarCita',
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
                dateClick: function(info) {
                    document.getElementById('btn-cita').click();
                },
                windowResizeDelay: 100,
            });

            calendar.render();

            setTimeout(() => {
                calendar.updateSize();
            }, 200);
        });
    </script>
@stop
