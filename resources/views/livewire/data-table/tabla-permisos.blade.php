<div>
    @php
        $heads = ['Pantalla', 'Visualizar', 'Consultar', 'Insertar', 'Actualizar', 'Eliminar', ['label' => 'Acciones', 'no-export' => true, 'width' => 5]];
        
        $btnDelete = '<button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                    </button>';
        $btnDetails = '<button class="btn btn-xs btn-secondary text-white mx-1 shadow" title="Details" 
                        data-toggle="modal" data-target="#updatePermiso">
                        <i class="fas fa-lg fa-fw fa-eye"></i>
                      </button>';
        
        $config = [
            'data' => [['Pacientes', 'SI', 'SI', 'SI', 'SI', 'SI', '<nobr>' . $btnDelete . $btnDetails . '</nobr>']],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <div class="input-group mb-4">
        <label class="input-group-text" for="s-rol">Rol</label>
        <select class="form-select" name="s-rol" id="s-rol" aria-label="Lista de roles"
            aria-describedby="input-s-rol" required>
            <option selected disabled value="">Seleccione un rol...</option>
            <option value="1">Rol 1</option>
            <option value="2">Rol 2</option>
        </select>
    </div><!-- lista de roles -->

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="tablaPermisos" :heads="$heads" beautify hoverable striped>
        @foreach ($config['data'] as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
</div>
