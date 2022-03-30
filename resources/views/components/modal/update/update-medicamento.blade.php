<div class="modal fade" id="updateMedicamento" tabindex="-1" aria-labelledby="actualizarMedicamento"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarMedicamento">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Medicamento
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updateMedicamento','actualizar_medicamento')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_medicamento">
                    {!! csrf_field() !!}
                    <!-- nombre del medicamento -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_nombre_medicamento">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nombre_medicamento" id="u_nombre_medicamento"
                            aria-label="Nombre del medicamento" aria-describedby="input_c_nombre_medicamento"
                            placeholder="Nombre del medicamento" required>
                    </div>
                    <!-- presentación del medicamento-->
                    <div class="input-group">
                        <label class="input-group-text" for="u_presentacion_medicamento">Presentación<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_presentacion_medicamento" id="u_presentacion_medicamento"
                            aria-label="Presentación del medicamento"
                            aria-describedby="input_c_presentacion_medicamento" required>
                            <option selected disabled value="">Seleccione...</option>
                            @foreach ($presentaciones as $presentacion)
                                <option value="{{ $presentacion->codigoPresentacion }}">
                                    {{ $presentacion->presentacion }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- tipo de medicamento -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_tipo_medicamento">Tipo medicamento<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_tipo_medicamento" id="u_tipo_medicamento"
                            aria-label="Tipo de medicamento" aria-describedby="input_c_tipo_medicamento" required>
                            <option selected disabled value="">Seleccione...</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->codigoTipo }}">{{ $tipo->tipoMedicamento }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- descripción del medicamento -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_descripcion_medicamento">Descripción</label>
                        <textarea class="form-control" name="u_descripcion_medicamento" id="u_descripcion_medicamento"
                            aria-label="Descripción del medicamento" aria-describedby="input_c_descripcion_medicamento"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('updateMedicamento','actualizar_medicamento')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
