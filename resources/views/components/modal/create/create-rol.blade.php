<div class="modal fade" id="createRol" tabindex="-1" aria-labelledby="crearRol" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearRol">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Rol
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información', 'createRol', 'crear_rol')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_rol">
                    {!! csrf_field() !!}
                    <!-- nombre del rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_nombre_rol">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nombre_rol" id="c_nombre_rol"
                            aria-label="Nombre del rol" aria-describedby="input_c_nombre_rol"
                            placeholder="Ingrese el nombre del rol" required>
                    </div>
                    <!-- estado del rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_estado_rol">Estado</label>
                        <select class="form-select" name="c_estado_rol" id="c_estado_rol" aria-label="Estado del rol"
                            aria-describedby="input_c_estado_rol" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="A">ACTIVO</option>
                            <option value="I">INACTIVO</option>
                        </select>
                    </div>
                    <!-- descripción del rol -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_rol">Descripción</label>
                        <textarea class="form-control" name="c_descripcion_rol" id="c_descripcion_rol" aria-label="Descripción del rol"
                            aria-describedby="input_c_descripcion_rol" placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_rol">Guardar</button>
                <button class="btn btn-danger" onclick="cerrarModal('La información', 'createRol', 'crear_rol')"">Cancelar</button>
            </div>
        </div>
    </div>
</div>
