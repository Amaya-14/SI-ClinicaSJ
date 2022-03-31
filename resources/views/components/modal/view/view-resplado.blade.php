<div class="modal fade" id="viewRespaldo" tabindex="-1" aria-labelledby="verRespaldo" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verRespaldo">
                    <i class="fas fa-eye mr-2"></i>
                    Cita
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_respaldo">
                    <fieldset class="grid--responsive" disabled>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_fecha_respaldo">Fecha respaldo</label>
                            <input type="date" class="form-control" name="v_fecha_respaldo" id="v_fecha_respaldo"
                                aria-label="Fehca de respaldo" aria-describedby="input_v_fecha_respaldo">
                        </div>
                        <!-- fecha de respaldo -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_usuario_respaldo">Usuario</label>
                            <input type="text" class="form-control" name="v_usuario_respaldo" id="v_usuario_respaldo"
                                aria-label="Usuario" aria-describedby="input_v_usuario_respaldo">
                        </div>
                        <!-- usuario -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_descripcion_reslado">Descripción</label>
                            <textarea class="form-control" name="v_descripcion_reslado" id="v_descripcion_reslado"
                                aria-label="Motivo del respaldo" aria-describedby="input_v_descripcion_reslado"
                                placeholder="Motivo del respaldo"></textarea>
                        </div>
                        <!-- descripción del respaldo -->
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="habilitar-edicion">Editar</button>
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="ver_respaldo">Cerrar</button>
            </div>
        </div>
    </div>
</div>
