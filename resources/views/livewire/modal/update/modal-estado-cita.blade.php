<div>
    <form id="form-u-2" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateEstadoCita" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Estado de cita
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" id="inputs-u-2" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-estado-cita">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-estado-cita"
                                    id="u-nombre-estado-cita" aria-label="Nombre del estado-cita"
                                    aria-describedby="input-u-nombre-estado-cita"
                                    placeholder="Ingrese el nombre del estado de cita" required>
                            </div>
                            <!-- nombre de la presentación -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-estado-cita">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-estado-cita"
                                    id="u-descripcion-estado-cita" aria-label="Descripción del estado de cita"
                                    aria-describedby="input-u-descripcion-estado-cita"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción de la presentación -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-2" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-2" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-2" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
