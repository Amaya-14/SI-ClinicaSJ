<div>
    @php
        $heads = ['#', 'Fecha', 'Usuario', 'Objeto', 'Acción', 'Descripción', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];

        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Details" 
                        data-toggle="modal" data-target="#viewBitacora">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                      </button>';
        
        $config = [
            'data' => [[1, '00/00/00', 'Admin', 'Personas', 'Insert', 'Creo un nuevo registro', '<nobr>' . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="tablaBitacora" :heads="$heads" beautify hoverable striped with-buttons>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>
