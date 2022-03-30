<div class="modal fade" id="createTelefono" tabindex="-1" aria-labelledby="crearTelefono" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearTelefono">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Télefono
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información','createTelefono', 'crear_telefono')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_telefono">
                    {!! csrf_field() !!}
                    <!-- persona -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_persona">Persona<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_persona" id="c_persona" aria-label="Personas"
                            aria-describedby="input_c_persona" required>
                            <option value="" selected disabled>Seleccione...</option>
                            @foreach ($personas as $persona)
                                <option value="{{ $persona['codigo'] }}">{{ $persona['nombrePersona'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- número de área -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_area_telefono_persona">Área<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_area_telefono_persona"
                            id="c_area_telefono_persona" aria-label="Área"
                            aria-describedby="input_c_area_telefono_persona" value="504" required>
                    </div>
                    <!-- número de télefono -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_numero_telefono_persona">Número<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_numero_telefono_persona"
                            id="c_numero_telefono_persona" aria-label="Número"
                            aria-describedby="input_c_numero_telefono_persona"
                            placeholder="Ingrese el número de télefono" required>
                    </div>
                    <!-- tipo de teléfono -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_tipo_telefono">Tipo teléfono<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_tipo_telefono" id="c_tipo_telefono"
                            aria-label="Tipo teléfono" aria-describedby="input_c_tipo_telefono" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="C">Celular</option>
                            <option value="F">Fijo</option>
                        </select>
                    </div>
                    <!-- descripcion del teléfono -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_descripcion_telefono">Descripción</label>
                        <textarea type="text" class="form-control" name="c_descripcion_telefono" id="c_descripcion_telefono"
                            aria-label="Descripción" aria-describedby="input_c_descripcion_telefono"
                            placeholder="Ingrese la descripción (Opcional)"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_telefono">Guardar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('La información','createTelefono', 'crear_telefono')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
