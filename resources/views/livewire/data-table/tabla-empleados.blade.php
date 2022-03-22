<div class="table-responsive">
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Identidad</th>
                <th scope="col">Sexo</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @if (empty($empleados))
                @foreach ($empleados as $empleado)
                    <tr scope="row">
                        <td>#</td>
                        <td>{!! $empleado->nombres . ' ' . $empleado->apellidos !!}</td>
                        <td>{!! '0' . substr($empleado->identidad, 0, 3) . '-' . substr($empleado->identidad, 3, 4) . '-' . substr($empleado->identidad, 7) !!}</td>
                        <td>{!! $empleado->sexo !!}</td>
                        <td>{!! $empleado->fecha_nacimiento !!}</td>
                        <td>{!! $empleado->edad !!}</td>
                        <td>
                            <span class="d-inline-flex">
                                <button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Eliminar empleado">
                                    <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-xs btn-secondary text-white mx-1 shadow"
                                    title="Ver/Editar empleado"
                                    wire:click="buscarEmpleado('{{ Crypt::encrypt($empleado->codigo) }}', '{{ Crypt::encrypt($empleado->codigoP) }}')">
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
