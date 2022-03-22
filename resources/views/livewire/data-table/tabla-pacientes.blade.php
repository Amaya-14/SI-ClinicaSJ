<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Identidad</th>
                <th scope="col">Sexo</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($pacientes))
                @foreach ($pacientes as $paciente)
                    <tr scope="row">
                        <td>{!! $paciente->nombres . ' ' . $paciente->apellidos !!}</td>
                        <td>{!! '0' . substr($paciente->dni, 0, 3) . '-' . substr($paciente->dni, 3, 4) . '-' . substr($paciente->dni, 7) !!}</td>
                        @if ($paciente->sexo == 'H')
                            <td>Hombre</td>
                        @else
                            <td>Mujer</td>
                        @endif
                        <td>{!! substr($paciente->fechaNacimiento, 0, 10) !!}</td>
                        <td>{!! $paciente->edad !!}</td>
                        <td>
                            <span class="d-inline-flex">
                                <button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Eliminar paciente">
                                    <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-xs btn-secondary text-white mx-1 shadow"
                                    title="Ver/Editar paciente"
                                    wire:click="buscarPaciente('{{ Crypt::encrypt($paciente->paciente) }}', '{{ Crypt::encrypt($paciente->persona) }}')">
                                    <i class="fas fa-lg fa-fw fa-eye"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
