<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateCorreo" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Correo
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="c-persona">Persona<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="c-persona" id="c-persona" aria-label="Personas"
                                    aria-describedby="input-c-persona" required>
                                    <option value="1" selected>Persona</option>
                                </select>
                            </div>
                            <!-- persona -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-correo-persona">Correo<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="u-correo-persona" id="u-correo-persona"
                                    aria-label="Correo de la persona" aria-describedby="input-u-correo-persona"
                                    placeholder="example@example.com" required>
                            </div>
                            <!-- correo de la persona -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-correo" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-correo" />
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </form>
    <!-- -->
</div>
