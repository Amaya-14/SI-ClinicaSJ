<div class="modal fade" id="createMaterial" tabindex="-1" aria-labelledby="crearMaterial" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearMaterial">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Material
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('createMaterial', 'crear_material')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_material">
                    {!! csrf_field() !!}
                    <!-- nombre del material -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_nombre_material">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nombre_material" id="c_nombre_material"
                            aria-label="Nombre del material" aria-describedby="input_c_nombre_material"
                            placeholder="Ingrese el nombre del material" required>
                    </div>
                    <!-- tipo de material -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_tipo_material">Tipo material<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_tipo_material" id="c_tipo_material"
                            aria-label="Tipo de material" aria-describedby="input_c_tipo_material" required>
                            <option selected disabled value="">Seleccione...</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->codigoTipo }}">{{ $tipo->tipoMaterial }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- descripcion del material -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_material">Descripción</label>
                        <textarea class="form-control" name="c_descripcion_material" id="c_descripcion_material"
                            aria-label="Descripción del material" aria-describedby="input_c_descripcion_material"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_material">Guardar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('createMaterial', 'crear_material')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
