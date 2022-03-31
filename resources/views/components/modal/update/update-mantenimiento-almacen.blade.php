<div class="modal fade" id="updateRegistroAlmacen" tabindex="-1" aria-labelledby="actualizarRegistro"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarRegistro">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Registro
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updateRegistroAlmacen','update_registro_almacen','btn-actualizar')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="update_registro_almacen">
                    {!! csrf_field() !!}
                    <!-- tipo de registro -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_tipo_registro">Registro<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_tipo_registro" id="u_tipo_registro"
                            aria-label="Estado del medicamento" aria-describedby="input_u_tipo_registro" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="Tmed">Tipo de médicamento</option>
                            <option value="UniPres">Unidades de presentación (Médicamento)</option>
                            <option value="Tmat">Tipo de material</option>
                        </select>
                    </div>
                    <!-- nombre del registro -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_nombre_registro">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_registro" id="u_nombre_registro"
                            aria-label="Nombre del registro" aria-describedby="input_u_nombre_registro"
                            placeholder="Ingrese el nombre del registro" required>
                    </div>
                    <!-- descripción del registro -->
                    <div class="input-group" id="input-descripcion">
                        <label class="input-group-text" for="u_descripcion_registro">Descripción</label>
                        <textarea class="form-control" name="u_descripcion_registro" id="u_descripcion_registro"
                            aria-label="Descripción del registro" aria-describedby="input_u_descripcion_registro"
                            placeholder="Descripción(Opcional)" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios','updateRegistroAlmacen','update_registro_almacen','btn-actualizar')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
