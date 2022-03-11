@extends('adminlte::page')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg, #4099ff, #73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, #2ed8b6, #59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg, #FFB64D, #ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg, #FF5370, #ff869a);
        }

        .custom-card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .custom-card .card-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

        .custom-a {
            color: white;
            text-decoration: none;
        }

        .custom-a:hover {
            color: white;
            text-decoration: underline;
        }
    </style>
@stop

@section('content_header')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0">Mantenimiento</h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                    title="información"></i>
            </div>
            <!-- card-tools -->
        </div>
        <!-- card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-xl-4">
                    <div class="custom-card bg-c-blue order-card" id="personas">
                        <div class="card-block">
                            <h6 class="m-b-20">Módulo</h6>
                            <h2 class="text-left">
                                <i class="fas fa-fw fa-male f-right"></i>
                                <span>
                                    <a class="custom-a" href="{{ url('mantenimiento/personas') }}">Personas</a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-4 col-xl-4">
                    <div class="custom-card bg-c-green order-card" id="jornada-laboral">
                        <div class="card-block">
                            <h6 class="m-b-20">Módulo</h6>
                            <h2 class="text-left">
                                <i class="fas fa-fw fa-user-clock f-right"></i>
                                <span>
                                    <a class="custom-a" href="{{ url('mantenimiento/cita') }}">Jornada Laboral</a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-4 col-xl-4">
                    <div class="custom-card bg-c-yellow order-card" id="citas">
                        <div class="card-block">
                            <h6 class="m-b-20">Módulo</h6>
                            <h2 class="text-left">
                                <i class="fas fa-fw fa-calendar-alt f-right"></i>
                                <span>
                                    <a class="custom-a" href="{{ url('mantenimiento/cita') }}">Citas</a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-4 col-xl-4">
                    <div class="custom-card bg-c-pink order-card" id="almacen">
                        <div class="card-block">
                            <h6 class="m-b-20">Módulo</h6>
                            <h2 class="text-left">
                                <i class="fas fa-fw fa-warehouse f-right"></i>
                                <span>
                                    <a class="custom-a" href="{{ url('mantenimiento/almacen') }}">Almacén</a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-4 col-xl-4">
                    <div class="custom-card bg-c-blue order-card" id="caja">
                        <div class="card-block">
                            <h6 class="m-b-20">Módulo</h6>
                            <h2 class="text-left">
                                <i class="fas fa-fw fa-coins f-right"></i>
                                <span>
                                    <a class="custom-a" href="{{ url('mantenimiento/cita') }}">Caja Chica</a>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card-body -->
    </div>
    <!-- card -->
@stop

@section('content')

@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop
