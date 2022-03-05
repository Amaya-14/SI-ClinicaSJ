<div>
    @php
        $heads = ['#', 'Objeto', 'Descripción', ['label' => 'Acciones', 'no-export' => true, 'width' => 5]];
        
        $btnDelete = '<button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                    </button>';
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Details" 
                        data-toggle="modal" data-target="#updateObjeto">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                      </button>';
        
        $config = [
            'data' => [[1, 'Pacientes', 'Pantalla pacientes del módulo personas', '<nobr>' . $btnDelete . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="tablaObjetos" :heads="$heads" beautify hoverable striped>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>
