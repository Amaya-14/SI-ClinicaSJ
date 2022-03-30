<div class="modal fade" id="viewTelefono" tabindex="-1" aria-labelledby="verTelefono" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verTelefono">
                    <i class="fas fa-eye mr-2"></i>
                    Teléfono
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_telefono">
                    <fieldset class="grid--responsive" disabled>
                        <!-- persona -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_persona">Persona<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_persona" id="v_persona"
                                aria-label="Personas" aria-describedby="input_v_persona" required>
                        </div>
                        <!-- número de área -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_area_telefono_persona">Área<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="v_area_telefono_persona"
                                id="v_area_telefono_persona" aria-label="Área"
                                aria-describedby="input_v_area_telefono_persona" value="504" required>
                        </div>
                        <!-- número de télefono -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_numero_telefono_persona">Número<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="v_numero_telefono_persona"
                                id="v_numero_telefono_persona" aria-label="Número"
                                aria-describedby="input_v_numero_telefono_persona"
                                placeholder="Ingrese el número de télefono" required>
                        </div>
                        <!-- tipo de teléfono -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_tipo_telefono">Tipo teléfono<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="v_tipo_telefono" id="v_tipo_telefono"
                                aria-label="Tipo teléfono" aria-describedby="input_v_tipo_telefono" required>
                        </div>
                        <!-- descripcion del teléfono -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_descripcion_telefono">Descripción</label>
                            <textarea type="text" class="form-control" name="v_descripcion_telefono" id="v_descripcion_telefono"
                                aria-label="Descripción" aria-describedby="input_v_descripcion_telefono"
                                placeholder="Ingrese la descripción (Opcional)"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="ver_telefono">Cerrar</button>
            </div>
        </div>
    </div>
</div>
