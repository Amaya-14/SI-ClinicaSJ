<div class="modal fade" id="createRegistroAlmacen" tabindex="-1" aria-labelledby="crearRegistroAlmacen"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearRegistroAlmacen">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Registro
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información', 'createRegistroAlmacen', 'crear_registro_almacen')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_registro_almacen">
                    {!! csrf_field() !!}
                    <!-- tipo de registro -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_tipo_registro">Registro<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_tipo_registro" id="c_tipo_registro"
                            aria-label="Estado del medicamento" aria-describedby="input_c_tipo_registro" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="Tmed">Tipo de medicamento</option>
                            <option value="UniPres">Unidades de presentación (Médicamento)</option>
                            <option value="Tmat">Tipo de material</option>
                        </select>
                    </div>
                    <!-- nombre del registro -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_nombre_registro">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nombre_registro" id="c_nombre_registro"
                            aria-label="Nombre del registro" aria-describedby="input_c_nombre_registro"
                            placeholder="Ingrese el nombre del registro" required>
                    </div>
                    <!-- descripción del registro -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_registro">Descripción</label>
                        <textarea class="form-control" name="c_descripcion_registro" id="c_descripcion_registro"
                            aria-label="Descripción del registro" aria-describedby="input_c_descripcion_registro"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_registro_almacen">Guardar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('La información', 'createRegistroAlmacen', 'crear_registro_almacen')"">Cancelar</button>
            </div>
        </div>
    </div>
</div>
