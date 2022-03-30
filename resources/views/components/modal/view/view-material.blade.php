<div class="modal fade" id="viewMaterial" tabindex="-1" aria-labelledby="verMaterial" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verMaterial">
                    <i class="fas fa-eye mr-2"></i>
                    Material
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="view_material">
                    <fieldset class="grid--responsive" disabled>
                        <!-- nombre del material -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_nombre_material">Nombre<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_nombre_material" id="v_nombre_material"
                                aria-label="Nombre del material" aria-describedby="input_v_nombre_material"
                                placeholder="Ingrese el nombre del material" required>
                        </div>
                        <!-- tipo de material -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_tipo_material">Tipo material<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_tipo_material" id="v_tipo_material"
                                aria-label="Tipo de material" aria-describedby="input_v_tipo_material" required>
                        </div>
                        <!-- descripcion del material -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_descripcion_material">Descripción</label>
                            <textarea class="form-control" name="v_descripcion_material" id="v_descripcion_material"
                                aria-label="Descripción del material" aria-describedby="input_v_descripcion_material"
                                placeholder="Descripción(Opcional)"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="view_empleado">Cerrar</button>
            </div>
        </div>
    </div>
</div>
