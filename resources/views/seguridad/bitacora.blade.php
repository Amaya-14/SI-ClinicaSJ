@extends('adminlte::page')

@section('title', 'Bitacora')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0 mt-1">Bitacora del sistema</h3>
            <div class="card-tools">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @livewire('data-table.tabla-bitacora')
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('content')
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
