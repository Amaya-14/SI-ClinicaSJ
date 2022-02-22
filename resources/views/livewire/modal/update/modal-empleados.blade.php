<div>
    <x-adminlte-modal id="updateEmpleado" title="Actualizar Empleado" size="lg" theme="purple" icon="fas fa-user-circle"
        v-centered static-backdrop scrollable>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info"
                    type="button" role="tab" aria-controls="nav-info" aria-selected="true">Información</button>

                <button class="nav-link" id="nav-telefono-tab" data-bs-toggle="tab" data-bs-target="#nav-telefono"
                    type="button" role="tab" aria-controls="nav-telefono" aria-selected="false">Teléfonos</button>

                <button class="nav-link" id="nav-correo-tab" data-bs-toggle="tab" data-bs-target="#nav-correo"
                    type="button" role="tab" aria-controls="nav-correo" aria-selected="false">Correos</button>

                <button class="nav-link" id="nav-direccion-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-direccion" type="button" role="tab" aria-controls="nav-direccion"
                    aria-selected="false">Direcciones</button>
            </div>
        </nav>
        <div class="tab-content mt-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                <form action="" method="post">
                    {!! csrf_field() !!}
                    @method('put')
                    <section class="grid--responsive">
                        <div class="input-group grid__item1">
                            <label class="input-group-text" for="identidad">Identidad</label>
                            <input type="number" class="form-control" name="identidad" id="identidad"
                                aria-label="Identidad" aria-describedby="input-identidad" placeholder="Ingrese su DNI"
                                required>
                        </div><!-- identidad -->
    
                        <div class="input-group grid__item2">
                            <label class="input-group-text" for="nacionalidad">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad"
                                aria-label="Nacionalidad" aria-describedby="input-nacionalidad"
                                placeholder="Ingrese su nacionalidad" required>
                        </div><!-- nacionalidad -->
    
                        <div class="input-group grid__item3">
                            <label class="input-group-text" for="nombre-completo">Nombre / Apellido</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" aria-label="Nombre"
                                aria-describedby="input-nombre" placeholder="Ingrese su nombre" required>
                            <input type="text" class="form-control" name="apellido" id="apellido" aria-label="Apellido"
                                aria-describedby="input-apellido" placeholder="Ingrese su apellidos" required>
                        </div><!-- nombre y apellido -->
    
                        <div class="input-group grid__item4">
                            <label class="input-group-text" for="sexo">Sexo</label>
                            <select class="form-select" name="sexo" id="sexo" aria-label="Sexo"
                                aria-describedby="input-sexo" required>
                                <option selected disabled value="">Seleccione...</option>
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </div><!-- sexo -->
    
                        <div class="input-group grid__item5">
                            <label class="input-group-text" for="fecha-nacimiento">Fecha nacimiento</label>
                            <input type="date" class="form-control" name="nacionalidad" id="nacionalidad"
                                aria-label="Fehca Nacimiento" aria-describedby="input-fecha-nacimiento" required>
                        </div><!-- fecha de nacimiento -->
    
                        <div class="input-group grid__item6">
                            <label class="input-group-text" for="edad">Edad</label>
                            <input type="number" class="form-control" name="edad" id="edad" aria-label="Edad"
                                aria-describedby="input-edad" required>
                        </div><!-- edad -->
    
                        <div class="input-group grid__item7">
                            <label class="input-group-text" for="estado-civil">Estado civil</label>
                            <select class="form-select" name="estado-civil" id="estado-civil" aria-label="Estado civil"
                                aria-describedby="input-estado-civil" required>
                                <option selected disabled value="">Seleccione...</option>
                                <option value="S">Soltero/a</option>
                                <option value="C">Casado/a</option>
                                <option value="D">Divorciado/a</option>
                                <option value="V">Viudo/a</option>
                            </select>
                        </div><!-- estado civil -->
                        <div class="grid__item8 d-flex justify-content-end g-1">
                            <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                            <x-adminlte-button type="submit" theme="success" label="Guardar" />
                        </div>
                    </section><!-- -->
                </form><!-- -->
            </div><!-- -->

            <div class="tab-pane fade" id="nav-telefono" role="tabpanel" aria-labelledby="nav-telefono-tab">
                <div class="d-flex justify-content-end mb-2">
                    <button class="btn btn-xs btn-success text-white mx-1 shadow" title="Details" data-toggle="modal" data-target="#createTelefono">
                        <i class="fa fa-lg fa-fw fa-plus"></i>
                    </button>
                </div>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Area</th>
                            <th scope="col">Número</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>504</td>
                            <td>00000000</td>
                            <td>Celular</td>
                            <td>Personal</td>
                            <td>
                                <button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-xs btn-info text-white mx-1 shadow" title="Details" data-toggle="modal" data-target="#updateTelefono">
                                    <i class="far fa-lg fa-fw fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table><!-- -->
            </div><!-- -->

            <div class="tab-pane fade" id="nav-correo" role="tabpanel" aria-labelledby="nav-correo-tab">
                <div class="d-flex justify-content-end mb-2">
                    <button class="btn btn-xs btn-success text-white mx-1 shadow" title="Details" data-toggle="modal" data-target="#createCorreo">
                        <i class="fa fa-lg fa-fw fa-plus"></i>
                    </button>
                </div>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>daniel@example.com</td>
                            <td>
                                <button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-xs btn-info text-white mx-1 shadow" title="Details" data-toggle="modal" data-target="#updateCorreo">
                                    <i class="far fa-lg fa-fw fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table><!-- -->
            </div><!-- -->

            <div class="tab-pane fade" id="nav-direccion" role="tabpanel" aria-labelledby="nav-direccion-tab">
                <div class="d-flex justify-content-end mb-2">
                    <button class="btn btn-xs btn-success text-white mx-1 shadow" title="Details" data-toggle="modal" data-target="#createDireccion">
                        <i class="fa fa-lg fa-fw fa-plus"></i>
                    </button>
                </div>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Referencia</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Col. xxx</td>
                            <td> ------ </td>
                            <td>
                                <button class="btn btn-xs btn-danger text-white mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-xs btn-info text-white mx-1 shadow" title="Details" data-toggle="modal" data-target="#updateDireccion">
                                    <i class="far fa-lg fa-fw fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table><!-- -->
            </div><!-- -->
        </div>
        <x-slot name="footerSlot">
            <x-adminlte-button theme="danger" label="Cerrar" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>

    @livewire('modal.create.modal-telefono')
    @livewire('modal.create.modal-correo')
    @livewire('modal.create.modal-direccion')

    @livewire('modal.update.modal-telefono')
    @livewire('modal.update.modal-correo')
    @livewire('modal.update.modal-direccion')
</div>
