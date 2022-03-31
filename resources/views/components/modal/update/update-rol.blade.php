<div class="modal fade" id="updateRol" tabindex="-1" aria-labelledby="actualizarRol" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarRol">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Rol
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updateRol','actualizar_rol')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_rol">
                    {!! csrf_field() !!}
                    <!-- nombre del rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_nombre_rol">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_rol" id="u_nombre_rol"
                            aria-label="Nombre del rol" aria-describedby="input_u_nombre_rol"
                            placeholder="Ingrese el nombre del rol" required>
                    </div>
                    <!-- estado del rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_estado_rol">Estado</label>
                        <select class="form-select" name="u_estado_rol" id="u_estado_rol" aria-label="Estado del rol"
                            aria-describedby="input_u_estado_rol" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="A">ACTIVO</option>
                            <option value="I">INACTIVO</option>
                        </select>
                    </div>
                    <!-- descripción del rol -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_descripcion_rol">Descripción</label>
                        <textarea class="form-control" name="u_descripcion_rol" id="u_descripcion_rol" aria-label="Descripción del rol"
                            aria-describedby="input_u_descripcion_rol" placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger" onclick="cerrarModal('updateRol','actualizar_rol')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
