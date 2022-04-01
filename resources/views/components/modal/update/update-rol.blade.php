<div class="modal fade" id="updateRol" tabindex="-1" aria-labelledby="actualizarRol" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarRol">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Rol
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('Los cambios', 'updateRol','actualizar_rol', 'btn-actualizar-rol')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_rol">
                    {!! csrf_field() !!}
                    <!-- nombre del rol -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_nombre_rol">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_rol" id="u_nombre_rol"
                            aria-label="Nombre del rol" aria-describedby="input_u_nombre_rol"
                            placeholder="Ingrese el nombre del rol" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar-rol">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios', 'updateRol','actualizar_rol', 'btn-actualizar-rol')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
