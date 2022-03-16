<div>
    @php
        $heads = ['#', 'Caja', 'Fecha', 'Acción', 'Cantidad', 'Descripción', ['label' => 'Opciones', 'no-export' => true, 'width' => 5]];
        
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro"
                        data-bs-toggle="modal" data-bs-target="#updateMovimiento">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                        </button>';
        
        $config = [
            'data' => [[1, 'Caja 1', '10/03/2022', 'ENTRADA', '500', 'Descripción', '<nobr>' . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <div class="card mb-2">
        <div class="card-header">
            <h3 class="card-title m-0"></h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <i class="fas fa-info-circle fs-5 btn__info" data-bs-toggle="modal" data-bs-target="#modalInstrucciones"
                    title="información"></i>
            </div>
            <!-- card-tools -->
        </div>
        <!-- card-header -->
        <div class="card-body">
            <div class="input-group mb-1 input-fix-width">
                <label class="input-group-text">Filtrar</label>
                <input type="date" class="form-control" name="c-s-fecha" id="c-s-fecha"
                    aria-label="Fecha de movimientos" aria-describedby="input-c-s-fecha">
            </div>
            <div class="d-flex justify-content-center">
                <h4 class="">Información</h4>
            </div>
            <div class="grid--responsive">
                <div class="input-group">
                    <label class="input-group-text" for="fecha">Fecha</label>
                    <input type="text" class="form-control" name="fecha" id="fecha" aria-label="Fecha"
                        aria-describedby="input-fecha" required readonly>
                </div>
                <div class="input-group">
                    <label class="input-group-text" for="apertura">Apertura</label>
                    <input type="text" class="form-control" name="apertura" id="apertura" aria-label="Apertura"
                        aria-describedby="input-apertura" required readonly>
                </div>
                <div class="input-group">
                    <label class="input-group-text" for="total">Total</label>
                    <input type="text" class="form-control" name="total" id="total" aria-label="Total"
                        aria-describedby="input-total" required readonly>
                </div>
            </div>
        </div>
        <!-- card-body -->
        <div class="card-footer d-flex justify-content-end">
        </div>
        <!-- card-footer -->
    </div>
    <!-- card -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title m-0">Movimientos</h3>
            <div class="card-tools m-0">
                <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                    title="información"></i>
            </div>
            <!-- card-tools -->
        </div>
        <!-- card-header -->
        <div class="card-body">
            <div class="d-flex justify-content-end align-items-center mb-3">
                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo registro" icon="fas fa-plus" data-toggle="modal"
                    data-target="#createMovimiento" />
                <x-adminlte-button class="btn-sm bg-primary ml-2" label="Cerrar Apertura" icon="" />
            </div>
            <div>
                <x-adminlte-datatable id="tablaMovimientos" :heads="$heads" beautify hoverable striped>
                    @foreach ($config['data'] as $row)
                        <tr>
                            @foreach ($row as $cell)
                                <td>{!! $cell !!}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </x-adminlte-datatable>
            </div>
        </div>
        <!-- card-body -->
        <div class="card-footer d-flex justify-content-end">
        </div>
        <!-- card-footer -->
    </div>
    <!-- card -->
</div>
