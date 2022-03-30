<div class="modal fade" id="updateTelefono" tabindex="-1" aria-labelledby="actualizarTelefono" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarTelefono">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Télefono
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('Los cambios','updateTelefono','actualizar_telefono')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_telefono">
                    {!! csrf_field() !!}
                    <!-- persona -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_persona">Persona<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_persona" id="u_persona" aria-label="Personas"
                            aria-describedby="input_u_persona" readonly>
                    </div>
                    <!-- número de área -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_area_telefono_persona">Área<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="u_area_telefono_persona"
                            id="u_area_telefono_persona" aria-label="Área"
                            aria-describedby="input_u_area_telefono_persona" value="504" required>
                    </div>
                    <!-- número de télefono -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_numero_telefono_persona">Número<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="u_numero_telefono_persona"
                            id="u_numero_telefono_persona" aria-label="Número"
                            aria-describedby="input_u_numero_telefono_persona"
                            placeholder="Ingrese el número de télefono" required>
                    </div>
                    <!-- tipo de teléfono -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_tipo_telefono">Tipo teléfono<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_tipo_telefono" id="u_tipo_telefono"
                            aria-label="Tipo teléfono" aria-describedby="input_u_tipo_telefono" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="C">Celular</option>
                            <option value="F">Fijo</option>
                        </select>
                    </div>
                    <!-- descripcion del teléfono -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_descripcion_telefono">Descripción</label>
                        <textarea type="text" class="form-control" name="u_descripcion_telefono" id="u_descripcion_telefono"
                            aria-label="Descripción" aria-describedby="input_u_descripcion_telefono"
                            placeholder="Ingrese la descripción (Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar-telefono">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios','updateTelefono','actualizar_telefono')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
