<div class="modal fade" id="updateMaterial" tabindex="-1" aria-labelledby="actualizarMaterial" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarMaterial">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Material
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updateMaterial', 'actualizar_material')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_material">
                    {!! csrf_field() !!}
                    <!-- nombre del material -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_nombre_material">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_material" id="u_nombre_material"
                            aria-label="Nombre del material" aria-describedby="input_u_nombre_material"
                            placeholder="Ingrese el nombre del material" required>
                    </div>
                    <!-- tipo de material -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_tipo_material">Tipo material<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_tipo_material" id="u_tipo_material"
                            aria-label="Tipo de material" aria-describedby="input_u_tipo_material" required>
                            <option selected disabled value="">Seleccione...</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->codigoTipo }}">{{ $tipo->tipoMaterial }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- descripcion del material -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_descripcion_material">Descripción</label>
                        <textarea class="form-control" name="u_descripcion_material" id="u_descripcion_material"
                            aria-label="Descripción del material" aria-describedby="input_u_descripcion_material"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('updateMaterial', 'actualizar_material')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
