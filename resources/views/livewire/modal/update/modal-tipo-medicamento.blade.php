<div>
    <form id="form-u-1" action"" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateTipoMedicamento" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Tipo de médicamento
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" id="inputs-u-1" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-tipo-medicamento">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-tipo-medicamento"
                                    id="u-nombre-tipo-medicamento" aria-label="Nombre del tipo de medicamento"
                                    aria-describedby="input-u-nombre-tipo-medicamento"
                                    placeholder="Ingrese el nombre del tipo de medicamento" required>
                            </div>
                            <!-- nombre del tipo de médicamento -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-tipo-medicamento">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-tipo-medicamento"
                                    id="u-descripcion-tipo-medicamento" aria-label="Descripción del tipo medicamento"
                                    aria-describedby="input-u-descripcion-presentacion"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción del tipo de médicamento -->
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
