<div>
    @php
        $heads = [['label' => 'Fecha', 'width' => 4], ['label' => 'Usuario', 'width' => 4], ['label' => 'Opciones', 'no-export' => true, 'width' => 4]];
        
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Ver registro"
                        data-bs-toggle="modal" data-bs-target="#selectRespaldo">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                        </button>';
        
        $config = [
            'data' => [['00/00/00', 'Admin', '<span>' . $btnDetails . '</span>']],
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
