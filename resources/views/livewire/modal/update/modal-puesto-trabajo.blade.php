<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade modal-update" id="updatePuestoTrabajo" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Puesto de trabajo
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="input-request" disabled>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="u-nombre-puesto-trabajo">Nombre<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="u-nombre-puesto-trabajo"
                                    id="u-nombre-puesto-trabajo" aria-label="Nombre del puesto trabajo"
                                    aria-describedby="input-u-nombre-puesto-trabajo"
                                    placeholder="Ingrese el nombre del puesto detrabajo" required>
                            </div>
                            <!-- nombre del puesto de trabajo -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-descripcion-puesto-trabajo">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-puesto-trabajo"
                                    id="u-descripcion-puesto-trabajo" aria-label="Descripción del puesto trabajo"
                                    aria-describedby="input-u-descripcion-puesto-trabajo"
                                    placeholder="Ingrese la descripción (Opcional)"></textarea>
                            </div>
                            <!-- descripción del puesto de trabajo -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-puesto" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success"
                            label="Guardar" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-puesto" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
