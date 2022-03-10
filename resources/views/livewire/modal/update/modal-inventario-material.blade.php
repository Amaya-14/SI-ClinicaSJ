<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateInventarioMaterial" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Inventario de material
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-material">Material<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-material" id="u-material" aria-label="material"
                                    aria-describedby="input-u-material" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">material 1</option>
                                    <option value="2">material 2</option>
                                </select>
                            </div>
                            <!-- material -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-tipo-registro">Tipo registro<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-tipo-registro" id="u-tipo-registro"
                                    aria-label="Tipo de registro" aria-describedby="input-u-tipo-registro" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="I">Entrada</option>
                                    <option value="G">Salida</option>
                                </select>
                            </div>
                            <!-- tipo de registro -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-estado-material">Estado<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-estado-material" id="u-estado-material"
                                    aria-label="Estado del material" aria-describedby="input-u-estado-material"
                                    required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">Estado 1</option>
                                    <option value="2">Estado 2</option>
                                </select>
                            </div>
                            <!-- estado material -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-cantidad-material">Cantidad<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="u-cantidad-material"
                                    id="u-cantidad-material" aria-label="Cantidad material"
                                    aria-describedby="input-u-cantidad-material" placeholder="" required>
                            </div>
                            <!-- cantidad material -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-lote-material">Lote</label>
                                <input type="text" class="form-control" name="u-lote-material" id="u-lote-material"
                                    aria-label="Lote material" aria-describedby="input-u-lote-material"
                                    placeholder="Ingrese el lote" required>
                            </div>
                            <!-- lote material -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-fecha-vencimiento">Fecha vencimiento</label>
                                <input type="date" class="form-control" name="u-fecha-vencimiento"
                                    id="u-fecha-vencimiento" aria-label="Fehca de vencimiento"
                                    aria-describedby="input-u-fecha-vencimiento" required>
                            </div>
                            <!-- fecha de vencimiento -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-registro">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-registro"
                                    id="u-descripcion-registro" aria-label="Descripción del registro"
                                    aria-describedby="input-u-descricpcion-registro"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción del registro -->
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
