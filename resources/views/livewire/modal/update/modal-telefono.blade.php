<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateTelefono" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Teléfono
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
                                <label class="input-group-text" for="u-area-telefono-persona">Área<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="u-area-telefono-persona"
                                    id="u-area-telefono-persona" aria-label="Área"
                                    aria-describedby="input-u-area-telefono-persona" value="504" required>
                            </div>
                            <!-- número de área -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-numero-telefono-persona">Número<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="u-numero-telefono-persona"
                                    id="u-numero-telefono-persona" aria-label="Número"
                                    aria-describedby="input-u-numero-telefono-persona" placeholder="Ingrese su número"
                                    required>
                            </div>
                            <!-- número de télefono -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-tipo-telefono">Tipo teléfono<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-tipo-telefono" id="u-tipo-telefono"
                                    aria-label="Tipo teléfono" aria-describedby="input-u-tipo-telefono" required>
                                    <option selected disabled value="">Tipo teléfono...</option>
                                    <option value="C">Celular</option>
                                    <option value="F">Fijo</option>
                                </select>
                            </div>
                            <!-- tipo de teléfono -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-telefono">Descripción</label>
                                <textarea type="text" class="form-control" name="u-descripcion-telefono"
                                    id="u-descripcion-telefono" aria-label="Descripción"
                                    aria-describedby="input-descricpcion"
                                    placeholder="Ingrese la descripción (Opcional)"></textarea>
                            </div>
                            <!-- descripcion del teléfono -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-telefono" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-telefono" />
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </form>
    <!--  -->
</div>
