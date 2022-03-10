<div>
    <form action="">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateRol" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Rol
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-rol">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-rol" id="u-nombre-rol"
                                    aria-label="Nombre del rol" aria-describedby="input-u-nombre-rol"
                                    placeholder="Ingrese el nombre del rol" required>
                            </div>
                            <!-- nombre del rol -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-estado-rol">Estado<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-estado-rol" id="u-estado-rol"
                                    aria-label="Estado del rol" aria-describedby="input-u-estado-rol" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="A">ACTIVO</option>
                                    <option value="I">INACTIVO</option>
                                </select>
                            </div>
                            <!-- estado del rol -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-rol">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-rol" id="u-descripcion-rol"
                                    aria-label="Descripción del rol" aria-describedby="input-u-descripcion-rol"
                                    placeholder="Descripción(Opcional)"></textarea>
                            </div>
                            <!-- descripción del rol -->
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
    </form>
</div>
