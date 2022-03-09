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

    </style>
@stop

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0">Calendario de citas</h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                    title="información"></i>
            </div>
            <!-- card-tools -->
        </div>
        <!-- card-header -->
        <div class="card-body">
            <section id="calendar-citas"></section>
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
    
    <button class="d-none" id="btn-cita" data-toggle="modal" data-target="#createCita">Abrir</button>
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
