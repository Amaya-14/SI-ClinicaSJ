<div>
    <form action"" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updatePresentacionMedicamento" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Presentación de médicamento
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-presentacion">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-presentacion"
                                    id="u-nombre-presentacion" aria-label="Nombre del presentacion"
                                    aria-describedby="input-u-nombre-presentacion"
                                    placeholder="Ingrese el nombre del presentacion" required>
                            </div>
                            <!-- nombre de la presentación -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-presentacion">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-presentacion"
                                    id="u-descripcion-presentacion" aria-label="Descripción del presentacion"
                                    aria-describedby="input-u-descripcion-presentacion"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción de la presentación -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-2" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-2" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
