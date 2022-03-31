<div class="modal fade" id="createCaja" tabindex="-1" aria-labelledby="crearCaja" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearCaja">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Caja Registradora
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información', 'createCaja', 'crear_caja')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_caja">
                    {!! csrf_field() !!}
                    <!-- nombre de la caja -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_nombre_caja_registradora">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nombre_caja_registradora"
                            id="c_nombre_caja_registradora" aria-label="Nombre de caja"
                            aria-describedby="input_c_nombre_caja_registradora" placeholder="Nombre de la caja"
                            required>
                    </div>
                    <!-- descripción de la caja -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_caja_registradora">Descripción</label>
                        <textarea type="text" class="form-control" name="c_descripcion_caja_registradora" id="c_descripcion_caja_registradora"
                            aria-label="Descripción de la caja" aria-describedby="input_c_descripcion_caja_registradora"
                            placeholder="Descripción (Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_caja">Guardar</button>
                <button class="btn btn-danger" onclick="cerrarModal('La información', 'createCaja', 'crear_caja')"">Cancelar</button>
            </div>
        </div>
    </div>
</div>
