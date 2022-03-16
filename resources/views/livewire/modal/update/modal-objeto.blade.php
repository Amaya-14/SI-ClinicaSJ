<div>
    <form id="form-u-3" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateObjeto" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Objeto
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" id="inputs-u-3" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-objeto">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-objeto" id="u-nombre-objeto"
                                    aria-label="Nombre del objeto" aria-describedby="input-u-nombre-objeto"
                                    placeholder="Ingrese el nombre del objeto" required>
                            </div>
                            <!-- nombre del objeto -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-objeto">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-objeto" id="u-descripcion-objeto"
                                    aria-label="Descripción del rol" aria-describedby="input-u-descripcion-objeto"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción del objeto -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-3" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-3" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-3" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
