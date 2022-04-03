<div class="modal fade" id="viewUsuario" tabindex="-1" aria-labelledby="verUsuario" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verUsuario">
                    <i class="fas fa-eye mr-2"></i>
                    Teléfono
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_usuario">
                    <fieldset class="grid--responsive" disabled>
                        <!-- empleado -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_empleado">Empleado<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_empleado" id="v_empleado">
                        </div>
                        <!-- nombre del usuario -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_name">Usuario<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_name" id="v_name"
                                placeholder="Ingrese el nombre del usuario">
                        </div>
                        <!-- rol -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_rol">Rol<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_rol" id="v_rol">
                        </div>
                        <!-- correo -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_email">Correo<span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="v_email" id="v_email"
                                placeholder="Ingrese el correo">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="ver_usuario">Cerrar</button>
            </div>
        </div>
    </div>
</div>
