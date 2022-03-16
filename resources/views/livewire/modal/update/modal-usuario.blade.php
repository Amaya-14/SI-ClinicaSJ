<div>
    <form id="form-u-1" action="">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateUsuario" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Usuario
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" id="inputs-u-1" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-empleado">Empleado<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-empleado" id="u-empleado" aria-label="Empleado"
                                    aria-describedby="input-u-empleado" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">Empleado 1</option>
                                    <option value="2">Empleado 2</option>
                                </select>
                            </div>
                            <!-- empleado -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-usuario">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-usuario" id="u-nombre-usuario"
                                    aria-label="Nombre del usuario" aria-describedby="input-u-nombre-usuario"
                                    placeholder="Ingrese el nombre del usuario" required>
                            </div>
                            <!-- nombre del usuario -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-rol">Rol<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-rol" id="u-rol" aria-label="Rol del usuario"
                                    aria-describedby="input-u-rol" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">Rol 1</option>
                                    <option value="2">Rol 2</option>
                                </select>
                            </div>
                            <!-- rol -->
                            <div class="input-group mb-1">
                                <label class="input-group-text" for="u-password-usuario">Contraseña<span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="u-password-usuario"
                                    id="u-password-usuario" aria-label="Contraseña del usuario"
                                    aria-describedby="input-u-password-usuario"
                                    placeholder="Ingrese la contraseña del usuario" required>
                            </div>
                            <!-- contraseña -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-1" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-1" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-1" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
