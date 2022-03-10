<div>
    @php
        $heads = ['#', 'Nombre', 'Descripción', ['label' => 'Opciones', 'no-export' => true, 'width' => 5]];
        
        $btnEdit = '<button class="btn btn-xs btn-warning text-white mx-1 shadow" title="Edit"
                    data-toggle="modal" data-target="#updatePaciente">
                        <i class="fa fa-lg fa-fw fa-pencil-alt"></i>
                    </button>';
        $btnDelete = '<button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Eliminar registro">
                        <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                      </button>';
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Ver/Editar registro"
                        data-bs-toggle="modal" data-bs-target="#updateTipoCita">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                        </button>';
        
        $config = [
            'data' => [[1, 'Tipo', 'Descipción', '<nobr>' . $btnDelete . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <x-adminlte-datatable id="tablaTipoCitas" :heads="$heads" beautify hoverable striped with-buttons>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>
