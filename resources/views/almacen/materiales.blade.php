@extends('adminlte::page')

@section('title', 'Medicamentos')

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
        @slot('titulo', 'Lista de materiales')
        @slot('idModalInstruccion', 'modalInstrucciones')
        @slot('idBoton', 'createMaterial')
        @slot('tabla')
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-materiales" style="width: 100%">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Material</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-card>
@stop

@section('content')
    <x-modal.create.create-material />
    <x-modal.update.update-material />
    <x-modal.view.view-material />

    <x-moda-instruccion>
        @slot('id', 'modalInstrucciones')
        @slot('titulo', 'Instrucciones')
    </x-moda-instruccion>
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let idTabla = 'tabla-materiales';
        let idModalCreateMaterial = 'createMaterial';
        let idFormCrearMaterial = 'crear_material';
        let idModalUpdateMaterial = 'updateMaterial';
        let idFormUpdateMaterial = 'actualizar_material';
        let idModalViewMaterial = 'viewMaterial';
    </script>

    <script>
        $('#' + idTabla).DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('materiales.index') !!}',
            columns: [{
                    data: 'material'
                },
                {
                    data: 'tipo'
                },
                {
                    data: 'descripcion'
                },
                {
                    data: 'Opciones',
                    orderable: false,
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
        $('#' + idFormCrearMaterial).submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'materiales',
                data: $('#' + idFormCrearMaterial).serialize(),
                success: function(response) {
                    console.log(response)
                    if (response.statusCode == 201) {
                        $('#' + idTabla).DataTable().ajax.reload();
                        $("#" + idModalCreateMaterial).modal("hide");
                        $('#' + idFormCrearMaterial).trigger("reset");
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
        })
    </script>

    <script>
        function ver(id) {
            $.ajax({
                type: 'GET',
                url: "materiales/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#v_nombre_material').val(response.material);
                        $('#v_tipo_material').val(response.material);
                        $('#v_descripcion_material').val(response.descripcion);
                        $("#" + idModalViewMaterial).modal("show");
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
        function editar(id) {
            $.ajax({
                type: 'GET',
                url: "materiales/" + id + "/edit",
                success: function(response) {
                    console.log(response)
                    if (response) {
                        $('#u_nombre_material').val(response.material);
                        $(`#u_tipo_material option:contains('${response.tipo}')`).prop("selected", true);
                        $('#u_descripcion_material').val(response.descripcion);
                        $('#btn-actualizar').attr('onclick', `actualizar("${response.codigoMaterial}")`);
                        $("#" + idModalUpdateMaterial).modal("show");
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

        function actualizar(id) {
            $.ajax({
                type: 'PUT',
                url: "materiales/" + id,
                data: $('#' + idFormUpdateMaterial).serialize(),
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
                        $("#" + idFormUpdateMedicamento).modal("hide");
                        $('#' + idTabla).DataTable().ajax.reload();
                        //editar(idPersona);
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
                        url: "materiales/" + id,
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
                    $("#btn-actualizar").removeAttr("onclick");
                }
            })
        }
    </script>
@stop
