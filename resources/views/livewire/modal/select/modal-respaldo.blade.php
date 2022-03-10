<div>
    <div class="modal fade modal-update" id="selectRespaldo" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h4 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-eye mr-2"></i>
                        Respaldo
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <fieldset disabled>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="s-fecha-respaldo">Fecha respaldo</label>
                            <input type="date" class="form-control" name="s-fecha-respaldo" id="s-fecha-respaldo"
                                aria-label="Fehca de respaldo" aria-describedby="input-s-fecha-respaldo">
                        </div>
                        <!-- fecha de respaldo -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="s-usuario-respaldo">Usuario</label>
                            <input type="text" class="form-control" name="s-usuario-respaldo" id="s-usuario-respaldo"
                                aria-label="Usuario" aria-describedby="input-s-usuario-respaldo">
                        </div>
                        <!-- usuario -->
                        <div class="input-group">
                            <label class="input-group-text" for="s-descripcion-respaldo">Descripción</label>
                            <textarea class="form-control" name="s-descripcion-respaldo" id="s-descripcion-respaldo"
                                aria-label="Motivo del respaldo" aria-describedby="input-s-descripcion-respaldo"
                                placeholder="Motivo del respaldo"></textarea>
                        </div>
                        <!-- descripción del respaldo -->
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <x-adminlte-button type="button" theme="danger" label="Cerrar" data-bs-dismiss="modal" />
                </div>
            </div>
        </div>
    </div>
</div>
