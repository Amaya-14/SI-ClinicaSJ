<div class="modal fade" id="viewPuesto" tabindex="-1" aria-labelledby="verPuesto" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verPuesto">
                    <i class="fas fa-eye mr-2"></i>
                    Puesto de Trabajo
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_puesto">
                    <fieldset class="grid--responsive" disabled>
                        <!-- nombre del puesto de trabajo -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_nombre_puesto_trabajo">Nombre<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_nombre_puesto_trabajo"
                                id="v_nombre_puesto_trabajo" aria-label="Nombre del puesto trabajo"
                                aria-describedby="input_v_nombre_puesto_trabajo"
                                placeholder="Ingrese el nombre del puesto detrabajo" required>
                        </div>
                        <!-- descripción del puesto de trabajo -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_descripcion_puesto_trabajo">Descripción</label>
                            <textarea class="form-control" name="v_descripcion_puesto_trabajo" id="v_descripcion_puesto_trabajo"
                                aria-label="Descripción del puesto trabajo"
                                aria-describedby="input_v_descripcion_puesto_trabajo"
                                placeholder="Ingrese la descripción (Opcional)"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" form="ver_puesto">Cerrar</button>
            </div>
        </div>
    </div>
</div>
