<div>
    <div class="modal fade modals" id="updateEmpleado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h4 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-eye mr-2"></i>
                        Empleado
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- navegación -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-info-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info"
                                aria-selected="true">Información</button>

                            <button class="nav-link" id="nav-telefono-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-telefono" type="button" role="tab" aria-controls="nav-telefono"
                                aria-selected="false">Teléfonos</button>

                            <button class="nav-link" id="nav-correo-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-correo" type="button" role="tab" aria-controls="nav-correo"
                                aria-selected="false">Correos</button>

                            <button class="nav-link" id="nav-direccion-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-direccion" type="button" role="tab" aria-controls="nav-direccion"
                                aria-selected="false">Direcciones</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-3" id="nav-tabContent">
                        <!-- información del empleado -->
                        <div class="tab-pane fade show active" id="nav-info" role="tabpanel"
                            aria-labelledby="nav-info-tab">
                            <!-- formulario empleado -->
                            <form class="formulario" action="" method="post">
                                {!! csrf_field() !!}
                                @method('put')
                                <fieldset class="input-request grid--responsive mb-3" disabled>
                                    <!-- identidad -->
                                    <div class="input-group grid__item1">
                                        <label class="input-group-text" for="u-identidad-empleado">Identidad<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="u-identidad-empleado"
                                            id="u-identidad-empleado" aria-label="Indentidad del empleado"
                                            aria-describedby="input-u-identidad-empleado" placeholder="Ingrese el DNI"
                                            required>
                                    </div>
                                    <!-- nacionalidad -->
                                    <div class="input-group grid__item2">
                                        <label class="input-group-text" for="u-nacionalidad-empleado">Nacionalidad<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="u-nacionalidad-empleado"
                                            id="u-nacionalidad-empleado" aria-label="Nacionalidad del empleado"
                                            aria-describedby="input-u-nacionalidad-empleado"
                                            placeholder="Ingrese la nacionalidad" required>
                                    </div>
                                    <!-- nombre y apellido -->
                                    <div class="input-group grid__item3">
                                        <label class="input-group-text">Nombre completo<span
                                                class="text-danger">*</span></label>
                                        <!-- input nombres -->
                                        <input type="text" class="form-control" name="u-nombre-empleado"
                                            id="u-nombre-empleado" aria-label="Nombre"
                                            aria-describedby="input-u-nombre-empleado" placeholder="Ingrese el nombre"
                                            required>
                                        <!-- input apellidos -->
                                        <input type="text" class="form-control" name="u-apellido-empleado"
                                            id="u-apellido-empleado" aria-label="Apellido"
                                            aria-describedby="input-u-apellido-empleado"
                                            placeholder="Ingrese los apellidos" required>
                                    </div>
                                    <!-- sexo -->
                                    <div class="input-group grid__item4">
                                        <label class="input-group-text" for="u-sexo-empleado">Sexo<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" name="u-sexo-empleado" id="u-sexo-empleado"
                                            aria-label="Sexo del empleado" aria-describedby="input-u-sexo-empleado"
                                            required>
                                            <option selected disabled value="">Seleccione...</option>
                                            <option value="H">Hombre</option>
                                            <option value="M">Mujer</option>
                                        </select>
                                    </div>
                                    <!-- fecha de nacimiento -->
                                    <div class="input-group grid__item5">
                                        <label class="input-group-text" for="u-fecha-nacimiento-empleado">Fecha
                                            nacimiento<span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="u-fecha-nacimiento-empleado"
                                            id="u-fecha-nacimiento-empleado"
                                            aria-label="Fecha de nacimiento del empleado"
                                            aria-describedby="input-u-fecha-nacimiento" required>
                                    </div>
                                    <!-- edad -->
                                    <div class="input-group grid__item6">
                                        <label class="input-group-text" for="u-edad-empleado">Edad<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="u-edad-empleado"
                                            id="u-edad-empleado" aria-label="Edad del empleado"
                                            aria-describedby="input-u-edad-empleado" required>
                                    </div>
                                    <!-- estado civil -->
                                    <div class="input-group grid__item7">
                                        <label class="input-group-text" for="u-estado-civil-empleado">Estado
                                            civil<span class="text-danger">*</span></label>
                                        <select class="form-select" name="u-estado-civil-empleado"
                                            id="u-estado-civil-empleado" aria-label="Estado civil del empleado"
                                            aria-describedby="input-u-estado-civil-empleado" required>
                                            <option selected disabled value="">Seleccione...</option>
                                            <option value="S">Soltero/a</option>
                                            <option value="C">Casado/a</option>
                                            <option value="D">Divorciado/a</option>
                                            <option value="V">Viudo/a</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <!-- botones de edición, submit y cancelar -->
                                <div class="d-flex justify-content-start">
                                    <x-adminlte-button class="btn-editar" type="button" theme="warning"
                                        label="Editar" id="editar-persona" />
                                    <x-adminlte-button class="mr-1 btn-hidden d-none" type="submit" theme="success"
                                        label="Guardar" />
                                    <x-adminlte-button class="mr-1 btn-cancelar btn-hidden d-none" theme="danger"
                                        label="Cancelar" id="cancelar-persona" />
                                </div>
                            </form>
                        </div>
                        <!-- teléfonos del empleado -->
                        <div class="tab-pane fade" id="nav-telefono" role="tabpanel"
                            aria-labelledby="nav-telefono-tab">
                            <!-- boton nuevo télefono -->
                            <div class="d-flex justify-content-end mb-2">
                                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo télefono" icon="fas fa-plus"
                                    data-bs-toggle="modal" data-bs-target="#createTelefono" />
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
                                            <button class="btn btn-xs btn-danger text-white mx-1 shadow"
                                                title="Eliminar registro">
                                                <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                            </button>
                                            <button class="btn btn-xs btn-secondary text-white mx-1 shadow"
                                                title="Ver/Editar registro" data-bs-toggle="modal"
                                                data-bs-target="#updateTelefono">
                                                <i class="fas fa-lg fa-fw fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- correos del empleado -->
                        <div class="tab-pane fade" id="nav-correo" role="tabpanel" aria-labelledby="nav-correo-tab">
                            <div class="d-flex justify-content-end mb-2">
                                <!-- boton nuevo correo -->
                                <x-adminlte-button class="btn-sm bg-teal" label="Nuevo correo" icon="fas fa-plus"
                                    data-bs-toggle="modal" data-bs-target="#createCorreo" />
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
                                            <button class="btn btn-xs btn-danger text-white mx-1 shadow"
                                                title="Eliminar registro">
                                                <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                            </button>
                                            <button class="btn btn-xs btn-secondary text-white mx-1 shadow"
                                                title="Ver/Editar registro" data-bs-toggle="modal"
                                                data-bs-target="#updateCorreo">
                                                <i class="fas fa-lg fa-fw fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- dirección del empleado -->
                        <div class="tab-pane fade" id="nav-direccion" role="tabpanel"
                            aria-labelledby="nav-direccion-tab">
                            <!-- boton nueva dirección -->
                            <div class="d-flex justify-content-end mb-2">
                                <x-adminlte-button class="btn-sm bg-teal" label="Nueva dirección" icon="fas fa-plus"
                                    data-bs-toggle="modal" data-bs-target="#createDireccion" />
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
                                            <button class="btn btn-xs btn-danger text-white mx-1 shadow"
                                                title="Eliminar registro">
                                                <i class="fa fa-lg fa-fw fa-trash-alt"></i>
                                            </button>
                                            <button class="btn btn-xs btn-secondary text-white mx-1 shadow"
                                                title="Ver/Editar registro" data-bs-toggle="modal"
                                                data-bs-target="#updateDireccion">
                                                <i class="fas fa-lg fa-fw fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- -->
                        </div>
                    </div>
                </div>
                <!-- boton del modal -->
                <div class="modal-footer">
                    <x-adminlte-button theme="danger" label="Cerrar" data-bs-dismiss="modal" />
                </div>
            </div>
        </div>
    </div>

    @livewire('modal.create.modal-telefono')
    @livewire('modal.create.modal-correo')
    @livewire('modal.create.modal-direccion')
    @livewire('modal.update.modal-telefono')
    @livewire('modal.update.modal-correo')
    @livewire('modal.update.modal-direccion')
</div>
