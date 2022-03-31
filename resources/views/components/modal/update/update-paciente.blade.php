<div class="modal fade" id="updatePaciente" tabindex="-1" aria-labelledby="actualizarPaciente" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarPaciente">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Paciente
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updatePaciente','actualizar_paciente')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_paciente">
                    {!! csrf_field() !!}
                    @method('put')
                    <!-- identidad -->
                    <div class="input-group grid__item1">
                        <label class="input-group-text" for="u_identidad">Identidad<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="u_identidad" id="u_identidad"
                            aria-label="Indentidad del paciente" aria-describedby="input_u_identidad"
                            placeholder="Ingrese el DNI" required>
                    </div>
                    <!-- nacionalidad -->
                    <div class="input-group grid__item2">
                        <label class="input-group-text" for="u_nacionalidad">Nacionalidad<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_nacionalidad" id="u_nacionalidad"
                            aria-label="Nacionalidad del paciente" aria-describedby="input_u_nacionalidad"
                            placeholder="Ingrese la nacionalidad" required>
                    </div>
                    <!-- nombre y apellido -->
                    <div class="input-group grid__item3">
                        <label class="input-group-text">Nombre completo<span class="text-danger">*</span></label>
                        <!-- input nombres -->
                        <input type="text" class="form-control" name="u_nombre" id="u_nombre" aria-label="Nombre"
                            aria-describedby="input_u_nombre" placeholder="Ingrese el nombre" required>
                        <!-- input apellidos -->
                        <input type="text" class="form-control" name="u_apellido" id="u_apellido"
                            aria-label="Apellido" aria-describedby="input_u_apellido"
                            placeholder="Ingrese los apellidos" required>
                    </div>
                    <!-- sexo -->
                    <div class="input-group grid__item4">
                        <label class="input-group-text" for="u_sexo">Sexo<span class="text-danger">*</span></label>
                        <select class="form-select" name="u_sexo" id="u_sexo" aria-label="Sexo del paciente"
                            aria-describedby="input_u_sexo" required>
                            <option disabled value="">Seleccione...</option>
                            <option value="H" Selected>Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="input-group grid__item5">
                        <label class="input-group-text" for="u_fecha_nacimiento">Fecha
                            nacimiento<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="u_fecha_nacimiento" id="u_fecha_nacimiento"
                            aria-label="Fecha de nacimiento del paciente" aria-describedby="input_u_fecha_nacimiento"
                            required>
                    </div>
                    <!-- edad -->
                    <div class="input-group grid__item6">
                        <label class="input-group-text" for="u_edad">Edad<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="u_edad" id="u_edad"
                            aria-label="Edad del paciente" aria-describedby="input_u_edad" required>
                    </div>
                    <!-- estado civil -->
                    <div class="input-group grid__item7">
                        <label class="input-group-text" for="u_estado_civil">Estado
                            civil<span class="text-danger">*</span></label>
                        <select class="form-select" name="u_estado_civil" id="u_estado_civil"
                            aria-label="Estado civil del paciente" aria-describedby="input_u_estado_civil" required>
                            <option disabled value="">Seleccione...</option>
                            <option value="S">Soltero/a</option>
                            <option value="C">Casado/a</option>
                            <option value="D">Divorciado/a</option>
                            <option value="V">Viudo/a</option>
                        </select>
                    </div>
                    <!-- numero area, télefono, tipo teléfono, descripcion -->
                    <div class="input-group grid__item8">
                        <input type="hidden" name="cod_telefono_fijo" id="cod_telefono_fijo">
                        <label class="input-group-text">Teléfono<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="u_area_telefono_fijo"
                            id="u_area_telefono_fijo" aria-label="Area del telefono"
                            aria-describedby="input_u_area_telefono_fijo">
                        <!-- número de area -->
                        <input type="number" class="form-control" name="u_numero_telefono_fijo"
                            id="u_numero_telefono_fijo" aria-label="Número del teléfono"
                            aria-describedby="input_u_numero_telefono_fijo" placeholder="0000 0000">
                        <!-- número de teléfono -->
                        <select class="form-select" name="u_tipo_telefono_fijo" id="u_tipo_telefono_fijo"
                            aria-label="Tipo de teléfono" aria-describedby="input_u_tipo_telefono_fijo">
                            <option selected disabled value="">Tipo teléfono...</option>
                            <option value="F">Fijo</option>
                            <option value="C">Celular</option>
                        </select>
                        <!-- tipo de teléfono -->
                        <input type="text" class="form-control" name="u_descripcion_telefono_fijo"
                            id="u_descripcion_telefono_fijo" aria-label="Descripción del teléfono"
                            aria-describedby="input_u_descripcion_telefono_fijo" placeholder="Descripción(Opcional)">
                        <!-- descripción teléfono -->
                    </div>
                    <!-- numero area, télefono, tipo teléfono, descripcion -->
                    <div class="input-group grid__item9">
                        <input type="hidden" name="cod_telefono_celular" id="cod_telefono_celular">
                        <label class="input-group-text">Teléfono<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="u_area_telefono_celular"
                            id="u_area_telefono_celular" aria-label="Area del telefono"
                            aria-describedby="input_u_area_telefono_celular" value="504" required>
                        <!-- número de area -->
                        <input type="number" class="form-control" name="u_numero_telefono_celular"
                            id="u_numero_telefono_celular" aria-label="Número del teléfono"
                            aria-describedby="input_u_numero_telefono_celular" placeholder="0000 0000" required>
                        <!-- número de teléfono -->
                        <select class="form-select" name="u_tipo_telefono_celular" id="u_tipo_telefono_celular"
                            aria-label="Tipo de teléfono" aria-describedby="input_u_tipo_telefono_celular" required>
                            <option selected disabled value="">Tipo teléfono...</option>
                            <option value="F">Fijo</option>
                            <option value="C">Celular</option>
                        </select>
                        <!-- tipo de teléfono -->
                        <input type="text" class="form-control" name="u_descripcion_telefono_celular"
                            id="u_descripcion_telefono_celular" aria-label="Descripción del teléfono"
                            aria-describedby="input_u_descripcion_telefono_celular" placeholder="Descripción(Opcional)">
                        <!-- descripción teléfono -->
                    </div>
                    <!-- dirección, referencia -->
                    <div class="input-group grid__item10">
                        <input type="hidden" name="cod_direccion" id="cod_direccion">
                        <label class="input-group-text">Dirección<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_direccion" id="u_direccion"
                            aria-label="Dirección del paciente" aria-describedby="input_u_direccion"
                            placeholder="Ingrese la dirección" required>
                        <!-- dirección del paciente -->
                        <input type="text" class="form-control" name="u_referencia" id="u_referencia"
                            aria-label="Referencia de la dirección" aria-describedby="input_u_referencia"
                            placeholder="Referencia(Opcional)">
                        <!-- referencia del paciente -->
                    </div>
                    <!-- correo -->
                    <div class="input-group grid__item11">
                        <input type="hidden" name="cod_correo" id="cod_correo">
                        <label class="input-group-text" for="u_correo">Correo</label>
                        <input type="email" class="form-control" name="u_correo" id="u_correo"
                            aria-label="Correo del paciente" aria-describedby="input_u_correo"
                            placeholder="example@example.com">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar" onclick="actualizar()">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('updatePaciente','actualizar_paciente')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
