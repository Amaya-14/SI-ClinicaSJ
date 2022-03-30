<div class="modal fade" id="createPuesto" tabindex="-1" aria-labelledby="crearPuesto" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearPuesto">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Puesto de Trabajo
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información', 'createPuesto', 'crear_puesto')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_puesto">
                    {!! csrf_field() !!}
                    <!-- nombre del puesto de trabajo -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_nombre_puesto_trabajo">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nombre_puesto_trabajo"
                            id="c_nombre_puesto_trabajo" aria-label="Nombre del puesto trabajo"
                            aria-describedby="input_c_nombre_puesto_trabajo"
                            placeholder="Ingrese el nombre del puesto detrabajo" required>
                    </div>
                    <!-- descripción del puesto de trabajo -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_puesto_trabajo">Descripción</label>
                        <textarea class="form-control" name="c_descripcion_puesto_trabajo" id="c_descripcion_puesto_trabajo"
                            aria-label="Descripción del puesto trabajo"
                            aria-describedby="input_c_descripcion_puesto_trabajo"
                            placeholder="Ingrese la descripción (Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_puesto">Guardar</button>
                <button class="btn btn-danger" onclick="cerrarModal('La información', 'createPuesto', 'crear_puesto')"">Cancelar</button>
            </div>
        </div>
    </div>
</div>
