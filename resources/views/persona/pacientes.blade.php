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
        .grid__item10 {
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
    @component('components.card')
        @slot('titulo', 'Lista de pacientes')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('idBoton', 'crearPaciente')
        @slot('tabla')
            @livewire('data-table.tabla-pacientes')
        @endslot
    @endcomponent
@stop

@section('content')
    @livewire('modal.create.modal-pacientes')
    @livewire('modal.update.modal-pacientes')

    @component('components.moda-instruccion')
        @slot('id', 'modalInstrucciones')
        @slot('titulo', 'Instrucciones')
    @endcomponent
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
