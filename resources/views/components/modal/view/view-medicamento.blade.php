<div class="modal fade" id="viewMedicamento" tabindex="-1" aria-labelledby="verMedicamento" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verMedicamento">
                    <i class="fas fa-eye mr-2"></i>
                    Medicamento
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_medicamento">
                    <fieldset class="grid--responsive" disabled>
                        <!-- nombre del medicamento -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_nombre_medicamento">Nombre</label>
                            <input type="text" class="form-control" name="v_nombre_medicamento"
                                id="v_nombre_medicamento" aria-label="Nombre del medicamento"
                                aria-describedby="input_c_nombre_medicamento" placeholder="Nombre del medicamento"
                                required>
                        </div>
                        <!-- presentación del medicamento-->
                        <div class="input-group">
                            <label class="input-group-text" for="v_presentacion_medicamento">Presentación</label>
                            <input type="text" class="form-control" name="v_presentacion_medicamento"
                                id="v_presentacion_medicamento" aria-label="Presentación del medicamento"
                                aria-describedby="input_c_presentacion_medicamento" required>
                        </div>
                        <!-- tipo de medicamento -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_tipo_medicamento">Tipo medicamento</label>
                            <input type="text" class="form-control" name="v_tipo_medicamento" id="v_tipo_medicamento"
                                aria-label="Tipo de medicamento" aria-describedby="input_c_tipo_medicamento" required>
                        </div>
                        <!-- descripción del medicamento -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_descripcion_medicamento">Descripción</label>
                            <textarea class="form-control" name="v_descripcion_medicamento" id="v_descripcion_medicamento"
                                aria-label="Descripción del medicamento"
                                aria-describedby="input_c_descripcion_medicamento"
                                placeholder="Descripción(Opcional)"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="ver_medicamento">Cerrar</button>
            </div>
        </div>
    </div>
</div>
