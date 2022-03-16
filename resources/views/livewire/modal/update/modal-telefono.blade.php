<div>
    <form id="form-u-2" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modals" id="updateTelefono" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Teléfono
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset id="inputs-u-2" disabled>
                            <!-- persona -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-persona">Persona<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-persona" id="u-persona" aria-label="Personas"
                                    aria-describedby="input-u-persona" required>
                                    <option value="1" selected>Persona</option>
                                </select>
                            </div>
                            <!-- número de área -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-area-telefono-persona">Área<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="u-area-telefono-persona"
                                    id="u-area-telefono-persona" aria-label="Área"
                                    aria-describedby="input-u-area-telefono-persona" value="504" required>
                            </div>
                            <!-- número de télefono -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-numero-telefono-persona">Número<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="u-numero-telefono-persona"
                                    id="u-numero-telefono-persona" aria-label="Número"
                                    aria-describedby="input-u-numero-telefono-persona" placeholder="Ingrese su número"
                                    required>
                            </div>
                            <!-- tipo de teléfono -->
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
                            <!-- descripción del teléfono -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-telefono">Descripción</label>
                                <textarea type="text" class="form-control" name="u-descripcion-telefono"
                                    id="u-descripcion-telefono" aria-label="Descripción"
                                    aria-describedby="input-descricpcion"
                                    placeholder="Ingrese la descripción (Opcional)" required></textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-2" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-2" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" theme="danger" label="Cancelar"
                            id="cancelar-2" />
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </form>
    <!--  -->
</div>
