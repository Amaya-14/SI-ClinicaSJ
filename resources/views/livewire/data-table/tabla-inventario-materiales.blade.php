<div>
    @php
        $heads = ['#', 'Material', 'Tipo', 'Cantidad', 'Lote', 'Vencimiento', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
        
        $btnEdit = '<button class="btn btn-xs btn-warning text-white mx-1 shadow" title="Edit" 
                    data-toggle="modal" data-target="#updatePaciente">
                        <i class="fa fa-lg fa-fw fa-pencil-alt"></i>
                    </button>';
        $btnDelete = '<button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Eliminar">
                        <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                    </button>';
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Detalles/Editar" 
                        data-toggle="modal" data-target="#updateInventarioMaterial">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                      </button>';
        
        $config = [
            'data' => [[1, 'Material', 'Ingreso', '100', 'Lote 1', '03/03/2022','<nobr>' . $btnDelete . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="tablaInventarioMateriales" :heads="$heads" beautify hoverable striped with-buttons>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>