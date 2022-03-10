<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateMedicamento" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Médicamento
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-medicamento">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-medicamento"
                                    id="u-nombre-medicamento" aria-label="Nombre del medicamento"
                                    aria-describedby="input-u-nombre-medicamento" placeholder="Nombre del medicamento"
                                    required>
                            </div>
                            <!-- nombre del medicamento -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-tipo-presentacion-medicamento">Presentación<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-tipo-presentacion-medicamento"
                                    id="u-tipo-presentacion-medicamento" aria-label="Presentación del medicamento"
                                    aria-describedby="input-u-tipo-presentacion-medicamento" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">Presentación 1</option>
                                    <option value="2">Presentación 2</option>
                                </select>
                            </div>
                            <!-- presentación del medicamento-->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-tipo-medicamento">Tipo medicamento<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-tipo-medicamento" id="u-tipo-medicamento"
                                    aria-label="Tipo de medicamento" aria-describedby="input-u-tipo-medicamento"
                                    required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">Tipo 1</option>
                                    <option value="2">Tipo 2</option>
                                </select>
                            </div>
                            <!-- tipo de medicamento -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-medicamento">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-medicamento"
                                    id="u-descripcion-medicamento" aria-label="Descripción del medicamento"
                                    aria-describedby="input-u-descricpcion-medicamento"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción del medicamento -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-1" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-1" />
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </form>
    <!--  -->
</div>
