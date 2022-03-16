<div>
    <form id="form-u-1" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateTipoCita" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Tipo de cita
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" id="inputs-u-1" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-cita">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-cita" id="u-nombre-cita"
                                    aria-label="Nombre del cita" aria-describedby="input-u-nombre-cita"
                                    placeholder="Ingrese el nombre del tipo de cita" required>
                            </div>
                            <!-- nombre de la presentación -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-cita">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-cita" id="u-descripcion-cita"
                                    aria-label="Descripción del tipo de cita"
                                    aria-describedby="input-u-descripcion-cita"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción de la presentación -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-1" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-1" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-1" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
