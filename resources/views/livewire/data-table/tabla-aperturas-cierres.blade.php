<div>
    @php
        $heads = ['#', 'Apertura', 'Fecha', 'Cierre', 'Fecha', 'Total', ['label' => 'Opciones', 'no-export' => true, 'width' => 5]];
        
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro"
                        data-bs-toggle="modal" data-bs-target="#updateAperturaCierre">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                        </button>';
        
        $config = [
            'data' => [[1, '1000', '10/03/2022', '500', '10/03/2022', '500', '<nobr>' . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="tablaAperturaCierre" :heads="$heads" beautify hoverable striped with-buttons>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>
