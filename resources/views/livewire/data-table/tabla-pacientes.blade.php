<div>
    {{-- Setup data for datatables --}}
    @php
        $heads = ['#', 'Nombre', 'Identidad', 'Sexo', 'Fecha Nacimiento', 'Edad', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
        
        $btnEdit = '<button class="btn btn-xs btn-warning text-white mx-1 shadow" title="Edit" 
                    data-toggle="modal" data-target="#updatePaciente">
                        <i class="fa fa-lg fa-fw fa-pencil-alt"></i>
                    </button>';
        $btnDelete = '<button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                    </button>';
        $btnDetails = '<button class="btn btn-xs btn-success text-white mx-1 shadow" title="Details" 
                        data-toggle="modal" data-target="#updatePaciente">
                        <i class="far fa-lg fa-fw fa-address-card"></i>
                      </button>';
        
        $config = [
            'data' => [[1, 'Daniel André Amaya López', '0000-0000-00000', 'Hombre', '14/10/1998', 23, '<nobr>' . $btnDelete . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads" beautify hoverable striped with-buttons>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>