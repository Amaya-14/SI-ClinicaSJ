<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updateCajaRegistradora" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Caja Registradora
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-caja-registradora">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-caja-registradora"
                                    id="u-nombre-caja-registradora" aria-label="Nombre de caja"
                                    aria-describedby="input-u-nombre-caja-registradora" placeholder="Nombre de la caja"
                                    required>
                            </div>
                            <!-- nombre de la caja -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-caja-registradora">Cantidad<span
                                        class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" name="u-descripcion-caja-registradora"
                                    id="u-descripcion-caja-registradora" aria-label="Descripción de la caja"
                                    aria-describedby="input-u-descripcion-caja-registradora"
                                    placeholder="Descripción (Opcional)"></textarea>
                            </div>
                            <!-- descripción de la caja -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-caja" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-caja" />
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
    </form>
    <!-- -->
</div>
