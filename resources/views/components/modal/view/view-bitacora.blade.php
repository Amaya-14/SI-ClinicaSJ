<div class="modal fade" id="viewBitacora" tabindex="-1" aria-labelledby="verBitacora" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verBitacora">
                    <i class="fas fa-eye mr-2"></i>
                    Bitácora
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_bitacora">
                    <fieldset class="grid--responsive" disabled>
                        <!-- fecha -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_fecha_bitacora">Fecha</label>
                            <input type="date" class="form-control" name="v_fecha_bitacora" id="v_fecha_bitacora"
                                aria-label="Fecha" aria-describedby="input_v_fecha_bitacora">
                        </div>
                        <!-- usuario -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_usuario_bitacora">Usuario</label>
                            <input type="text" class="form-control" name="v_usuario_bitacora" id="v_usuario_bitacora"
                                aria-label="Usuario" aria-describedby="input_v_usuario_bitacora">
                        </div>
                        <!-- objeto -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_objeto_bitacora">Objeto</label>
                            <input type="text" class="form-control" name="v_objeto_bitacora" id="v_objeto_bitacora"
                                aria-label="Objeto" aria-describedby="input_v_objeto_bitacora">
                        </div>
                        <!-- acción -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="v_accion_bitacora">Acción</label>
                            <input type="text" class="form-control" name="v_accion_bitacora" id="v_accion_bitacora"
                                aria-label="Acción" aria-describedby="input_v_accion_bitacora">
                        </div>
                        <!-- descripción de la presentación -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_descripcion_bitacora">Descripción</label>
                            <textarea class="form-control" name="v_descripcion_bitacora" id="v_descripcion_bitacora"
                                aria-label="Descripción"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="habilitar-edicion">Editar</button>
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="ver_bitacora">Cerrar</button>
            </div>
        </div>
    </div>
</div>
