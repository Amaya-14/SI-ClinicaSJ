<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateDireccion" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Dirección
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-persona">Persona<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-persona" id="u-persona" aria-label="Personas"
                                    aria-describedby="input-u-persona" required>
                                    <option value="1" selected>Persona</option>
                                </select>
                            </div>
                            <!-- persona -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-direccion-persona">Dirección<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-direccion-persona"
                                    id="u-direccion-persona" aria-label="Dirección de la persona"
                                    aria-describedby="input-u-direccion-persona" placeholder="Ingrese la dirección"
                                    required>
                            </div>
                            <!-- dirección de la persona -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-referencia-persona">Referencia</label>
                                <textarea type="text" class="form-control" name="u-referencia-persona"
                                    id="u-referencia-persona" aria-label="Referencia"
                                    aria-describedby="input-u-referencia-persona"
                                    placeholder="Ingrese la referencia (Opcional)"></textarea>
                            </div>
                            <!-- referencia de la persona-->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-direccion" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-direccion" />
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </form>
    <!--  -->
</div>
