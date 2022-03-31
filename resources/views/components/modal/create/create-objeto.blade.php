<div class="modal fade" id="createObjeto" tabindex="-1" aria-labelledby="crearObjeto" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearObjeto">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Objeto (Pantalla)
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información', 'createObjeto', 'crear_objeto')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_objeto">
                    {!! csrf_field() !!}
                    <!-- nombre del objeto -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_nombre_objeto">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nombre_objeto" id="c_nombre_objeto"
                            aria-label="Nombre del objeto" aria-describedby="input_c_nombre_objeto"
                            placeholder="Ingrese el nombre del objeto" required>
                    </div>
                    <!-- descripción del objeto -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_objeto">Descripción</label>
                        <textarea class="form-control" name="c_descripcion_objeto" id="c_descripcion_objeto" aria-label="Descripción del rol"
                            aria-describedby="input_c_descripcion_objeto"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_objeto">Guardar</button>
                <button class="btn btn-danger" onclick="cerrarModal('La información', 'createObjeto', 'crear_objeto')"">Cancelar</button>
            </div>
        </div>
    </div>
</div>
