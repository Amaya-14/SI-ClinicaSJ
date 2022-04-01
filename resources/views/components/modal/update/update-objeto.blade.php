<div class="modal fade" id="updateObjeto" tabindex="-1" aria-labelledby="actualizarObjeto" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarObjeto">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Objeto
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('Los cambios','updateObjeto','actualizar_objeto', 'btn-actualizar-objeto')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_objeto">
                    {!! csrf_field() !!}
                    <!-- nombre del objeto -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_nombre_objeto">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_objeto" id="u_nombre_objeto"
                            aria-label="Nombre del objeto" aria-describedby="input_u_nombre_objeto"
                            placeholder="Ingrese el nombre del objeto" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar-objeto">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios','updateObjeto','actualizar_objeto', 'btn-actualizar-objeto')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
