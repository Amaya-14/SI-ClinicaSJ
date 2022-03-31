<div class="modal fade" id="updateCaja" tabindex="-1" aria-labelledby="actualizarCaja" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarCaja">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Caja
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updateCaja','actualizar_caja')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_caja">
                    {!! csrf_field() !!}
                    <!-- nombre de la caja -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_nombre_caja_registradora">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_caja_registradora"
                            id="u_nombre_caja_registradora" aria-label="Nombre de caja"
                            aria-describedby="input_u_nombre_caja_registradora" placeholder="Nombre de la caja"
                            required>
                    </div>
                    <!-- descripción de la caja -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_descripcion_caja_registradora">Descripción<span
                                class="text-danger">*</span></label>
                        <textarea type="text" class="form-control" name="u_descripcion_caja_registradora" id="u_descripcion_caja_registradora"
                            aria-label="Descripción de la caja" aria-describedby="input_u_descripcion_caja_registradora"
                            placeholder="Descripción (Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger" onclick="cerrarModal('updateCaja','actualizar_caja')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
