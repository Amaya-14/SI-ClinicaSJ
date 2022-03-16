<div>
    <form id="form-u-4" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modals" id="updateDireccion" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Dirección
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset id="inputs-u-4" disabled>
                            <!-- persona -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-persona">Persona<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-persona" id="u-persona" aria-label="Personas"
                                    aria-describedby="input-u-persona" required>
                                    <option value="1" selected>Persona</option>
                                </select>
                            </div>
                            <!-- dirección de la persona -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-direccion-persona">Dirección<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-direccion-persona"
                                    id="u-direccion-persona" aria-label="Dirección de la persona"
                                    aria-describedby="input-u-direccion-persona" placeholder="Ingrese la dirección"
                                    required>
                            </div>
                            <!-- referencia de la persona-->
                            <div class="input-group">
                                <label class="input-group-text" for="u-referencia-persona">Referencia</label>
                                <textarea type="text" class="form-control" name="u-referencia-persona"
                                    id="u-referencia-persona" aria-label="Referencia"
                                    aria-describedby="input-u-referencia-persona"
                                    placeholder="Ingrese la referencia (Opcional)" required></textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-4" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-4" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" theme="danger" label="Cancelar"
                            id="cancelar-4" />
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </form>
    <!--  -->
</div>
