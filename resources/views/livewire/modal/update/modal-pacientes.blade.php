<div>
    <div class="modal fade" id="updatePaciente" name="inputs-u-1" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h4 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-eye mr-2"></i>
                        Paciente
                    </h4>
                    <button type="button" class="btn-close" id="cerrar-modal-u" title="Cerrar"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- información -->
                    <div class="mb-5">
                        <form id="form-u-1" action="" method="post">
                            {!! csrf_field() !!}
                            @method('put')
                            <!-- botones de edición, submit y cancelar -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="m-0">Información</h4>
                                <div>
                                    <x-adminlte-button class="btn-editar btn-sm" type="button" theme="warning"
                                        label="Editar" id="editar-1" />
                                    <x-adminlte-button class="mr-1 btn-hidden d-none btn-sm" type="submit"
                                        theme="success" label="Guardar" id="actualizar-1" />
                                    <x-adminlte-button class="mr-1 btn-cancelar btn-hidden d-none btn-sm" theme="danger"
                                        label="Cancelar" id="cancelar-1" />
                                </div>
                            </div>
                            <hr class="m-0 mt-1 mb-2">
                            <fieldset class="grid--responsive mb-3" id="inputs-u-1" disabled>
                                <!-- identidad -->
                                <div class="input-group grid__item1">
                                    <label class="input-group-text" for="u-identidad-paciente">Identidad<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="u-identidad-paciente"
                                        id="u-identidad-paciente" aria-label="Indentidad del paciente"
                                        aria-describedby="input-u-identidad-paciente" placeholder="Ingrese el DNI"
                                        required>
                                </div>
                                <!-- nacionalidad -->
                                <div class="input-group grid__item2">
                                    <label class="input-group-text" for="u-nacionalidad-paciente">Nacionalidad<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="u-nacionalidad-paciente"
                                        id="u-nacionalidad-paciente" aria-label="Nacionalidad del paciente"
                                        aria-describedby="input-u-nacionalidad-paciente"
                                        placeholder="Ingrese la nacionalidad" required>
                                </div>
                                <!-- nombre y apellido -->
                                <div class="input-group grid__item3">
                                    <label class="input-group-text">Nombre completo<span
                                            class="text-danger">*</span></label>
                                    <!-- input nombres -->
                                    <input type="text" class="form-control" name="u-nombre-paciente"
                                        id="u-nombre-paciente" aria-label="Nombre"
                                        aria-describedby="input-u-nombre-paciente" placeholder="Ingrese el nombre"
                                        required>
                                    <!-- input apellidos -->
                                    <input type="text" class="form-control" name="u-apellido-paciente"
                                        id="u-apellido-paciente" aria-label="Apellido"
                                        aria-describedby="input-u-apellido-paciente" placeholder="Ingrese los apellidos"
                                        required>
                                </div>
                                <!-- sexo -->
                                <div class="input-group grid__item4">
                                    <label class="input-group-text" for="u-sexo-paciente">Sexo<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="u-sexo-paciente" id="u-sexo-paciente"
                                        aria-label="Sexo del paciente" aria-describedby="input-u-sexo-paciente"
                                        required>
                                        <option selected disabled value="">Seleccione...</option>
                                        <option value="H">Hombre</option>
                                        <option value="M">Mujer</option>
                                    </select>
                                </div>
                                <!-- fecha de nacimiento -->
                                <div class="input-group grid__item5">
                                    <label class="input-group-text" for="u-fecha-nacimiento-paciente">Fecha
                                        nacimiento<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="u-fecha-nacimiento-paciente"
                                        id="u-fecha-nacimiento-paciente" aria-label="Fecha de nacimiento del paciente"
                                        aria-describedby="input-u-fecha-nacimiento" required>
                                </div>
                                <!-- edad -->
                                <div class="input-group grid__item6">
                                    <label class="input-group-text" for="u-edad-paciente">Edad<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="u-edad-paciente"
                                        id="u-edad-paciente" aria-label="Edad del paciente"
                                        aria-describedby="input-u-edad-paciente" required>
                                </div>
                                <!-- estado civil -->
                                <div class="input-group grid__item7">
                                    <label class="input-group-text" for="u-estado-civil-paciente">Estado
                                        civil<span class="text-danger">*</span></label>
                                    <select class="form-select" name="u-estado-civil-paciente"
                                        id="u-estado-civil-paciente" aria-label="Estado civil del paciente"
                                        aria-describedby="input-u-estado-civil-paciente" required>
                                        <option selected disabled value="">Seleccione...</option>
                                        <option value="S">Soltero/a</option>
                                        <option value="C">Casado/a</option>
                                        <option value="D">Divorciado/a</option>
                                        <option value="V">Viudo/a</option>
                                    </select>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- teléfono -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="m-0">Teléfonos</h4>
                            <x-adminlte-button class="btn-sm bg-teal btn-sm" label="Nuevo télefono" icon="fas fa-plus"
                                data-bs-toggle="modal" data-bs-target="#createTelefono" />
                        </div>
                        <hr class="m-0 mt-1 mb-2">
                        <div class="table-responsive text-center">
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
                    </div>
                    <!-- correo -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="m-0">Correo</h4>
                            <x-adminlte-button class="btn-sm bg-teal" label="Nuevo correo" icon="fas fa-plus"
                                data-bs-toggle="modal" data-bs-target="#createCorreo" />
                        </div>
                        <hr class="m-0 mt-1 mb-2">
                        <div class="table-responsive text-center">
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
                    </div>
                    <!-- dirección -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="m-0">Direcciones</h4>
                            <x-adminlte-button class="btn-sm bg-teal" label="Nueva dirección" icon="fas fa-plus"
                                data-bs-toggle="modal" data-bs-target="#createDireccion" />
                        </div>
                        <hr class="m-0 mt-1 mb-2">
                        <div class="table-responsive text-center">
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
                        </div>
                    </div>
                </div>
                <!-- boton del modal -->
                <div class="modal-footer">
                    <x-adminlte-button theme="danger" label="Cerrar" id="cerrar-modal-u" title="Cerrar"
                        aria-label="Cerrar" />
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
