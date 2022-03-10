<div>
    <div class="modal fade modal-update" id="selectBitacora" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h4 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-eye mr-2"></i>
                        Bitácora
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <fieldset disabled>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="s-fecha">Fecha</label>
                            <input type="date" class="form-control" name="s-fecha" id="s-fecha" aria-label="Fecha"
                                aria-describedby="input-s-fecha">
                        </div>
                        <!-- fecha -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="s-usuario">Usuario</label>
                            <input type="text" class="form-control" name="s-usuario" id="s-usuario"
                                aria-label="Usuario" aria-describedby="input-s-usuario">
                        </div>
                        <!-- usuario -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="s-objeto">Objeto</label>
                            <input type="text" class="form-control" name="s-objeto" id="s-objeto" aria-label="Objeto"
                                aria-describedby="input-s-objeto">
                        </div>
                        <!-- objeto -->
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="s-accion">Acción</label>
                            <input type="text" class="form-control" name="s-accion" id="s-accion" aria-label="Acción"
                                aria-describedby="input-s-accion">
                        </div>
                        <!-- acción -->
                        <div class="input-group">
                            <label class="input-group-text" for="s-descripcion">Descripción</label>
                            <textarea class="form-control" name="s-descripcion" id="s-descripcion"
                                aria-label="Descripción"></textarea>
                        </div>
                        <!-- descripción de la presentación -->
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <x-adminlte-button class="ml-1" type="reset" theme="danger" label="Cerrar"
                        data-bs-dismiss="modal" />
                </div>
            </div>
        </div>
    </div>
</div>
