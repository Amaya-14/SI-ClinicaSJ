<div>
    @php
        $heads = ['#', 'Caja', 'Descripción', ['label' => 'Opciones', 'no-export' => true, 'width' => 5]];
        
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro"
                        data-bs-toggle="modal" data-bs-target="#updateCajaRegistradora">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                        </button>';
        
        $config = [
            'data' => [[1, 'Caja 1', 'Descripción', '<nobr>' . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="tablaCajaRegistradoras" :heads="$heads" beautify hoverable striped with-buttons>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>
