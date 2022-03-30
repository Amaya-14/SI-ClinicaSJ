<div class="modal fade" id="updatePuesto" tabindex="-1" aria-labelledby="actualizarPuesto" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarPuesto">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Puesto de Trabajo
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('Los cambios','updatePuesto','actualizar_puesto','btn-actualizar-puesto')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_puesto">
                    {!! csrf_field() !!}
                    <!-- nombre del puesto de trabajo -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_nombre_puesto_trabajo">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_puesto_trabajo"
                            id="u_nombre_puesto_trabajo" aria-label="Nombre del puesto trabajo"
                            aria-describedby="input_u_nombre_puesto_trabajo"
                            placeholder="Ingrese el nombre del puesto detrabajo" required>
                    </div>
                    <!-- descripción del puesto de trabajo -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_descripcion_puesto_trabajo">Descripción</label>
                        <textarea class="form-control" name="u_descripcion_puesto_trabajo" id="u_descripcion_puesto_trabajo"
                            aria-label="Descripción del puesto trabajo"
                            aria-describedby="input_u_descripcion_puesto_trabajo"
                            placeholder="Ingrese la descripción (Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar-puesto">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios','updatePuesto','actualizar_puesto','btn-actualizar-puesto')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
