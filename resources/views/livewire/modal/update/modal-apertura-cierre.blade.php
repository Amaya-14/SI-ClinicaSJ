<div>
    <form id="form-u-1" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateAperturaCierre" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Apertura
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset id="inputs-u-1" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-fecha-registro">Fecha<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="u-fecha-registro" id="u-fecha-registro"
                                    aria-label="Fecha de registro" aria-describedby="input-u-fecha-registro" required>
                            </div>
                            <!-- fecha de registro -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-tipo-registro">Tipo registro<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-tipo-registro" id="u-tipo-registro"
                                    aria-label="Tipo de registro" aria-describedby="input-u-tipo-registro" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">ENTRADA</option>
                                    <option value="2">SALIDA</option>
                                </select>
                            </div>
                            <!-- tipo de registro -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-usuario-registro">Usuario<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-usuario-registro" id="u-usuario-registro"
                                    aria-label="Uusario de registro" aria-describedby="input-u-usuario-registro"
                                    required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1" selected>Usuario 1</option>
                                    <option value="2">Usuario 2</option>
                                </select>
                            </div>
                            <!-- usuario -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-caja-registro">Caja<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-caja-registro" id="u-caja-registro"
                                    aria-label="caja de registro" aria-describedby="input-u-caja-registro" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="1">Caja 1</option>
                                    <option value="2">Caja 2</option>
                                </select>
                            </div>
                            <!-- caja de registro -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-cantidad-registro">Cantidad<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="u-cantidad-registro"
                                    id="u-cantidad-registro" aria-label="Cantidad de registro"
                                    aria-describedby="input-u-cantidad-registro" required>
                            </div>
                            <!-- cantidad de registro -->
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
        <!-- -->
    </form>
    <!-- -->
</div>
