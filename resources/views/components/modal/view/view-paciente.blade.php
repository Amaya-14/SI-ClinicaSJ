<div class="modal fade" id="viewPaciente" tabindex="-1" aria-labelledby="verPaciente" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verPaciente">
                    <i class="fas fa-eye mr-2"></i>
                    Paciente
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="view_paciente">
                    <fieldset class="grid--responsive" disabled>
                        <!-- identidad -->
                        <div class="input-group grid__item1">
                            <label class="input-group-text" for="v_identidad">Identidad</label>
                            <input type="number" class="form-control" name="v_identidad" id="v_identidad"
                                aria-label="Indentidad del paciente" aria-describedby="input_v_identidad"
                                placeholder="Ingrese el DNI" required>
                        </div>
                        <!-- nacionalidad -->
                        <div class="input-group grid__item2">
                            <label class="input-group-text" for="v_nacionalidad">Nacionalidad</label>
                            <input type="text" class="form-control" name="v_nacionalidad" id="v_nacionalidad"
                                aria-label="Nacionalidad del paciente" aria-describedby="input_v_nacionalidad"
                                placeholder="Ingrese la nacionalidad" required>
                        </div>
                        <!-- nombre y apellido -->
                        <div class="input-group grid__item3">
                            <label class="input-group-text">Nombre completo</label>
                            <!-- input nombres -->
                            <input type="text" class="form-control" name="v_nombre" id="v_nombre" aria-label="Nombre"
                                aria-describedby="input_v_nombre" placeholder="Ingrese el nombre" required>
                            <!-- input apellidos -->
                            <input type="text" class="form-control" name="v_apellido" id="v_apellido"
                                aria-label="Apellido" aria-describedby="input_v_apellido"
                                placeholder="Ingrese los apellidos" required>
                        </div>
                        <!-- sexo -->
                        <div class="input-group grid__item4">
                            <label class="input-group-text" for="v_sexo">Sexo</label>
                            <select class="form-select" name="v_sexo" id="v_sexo" aria-label="Sexo del paciente"
                                aria-describedby="input_v_sexo" required>
                                <option disabled value="">Seleccione...</option>
                                <option value="H" Selected>Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </div>
                        <!-- fecha de nacimiento -->
                        <div class="input-group grid__item5">
                            <label class="input-group-text" for="v_fecha_nacimiento">Fecha
                                nacimiento</label>
                            <input type="date" class="form-control" name="v_fecha_nacimiento" id="v_fecha_nacimiento"
                                aria-label="Fecha de nacimiento del paciente"
                                aria-describedby="input_v_fecha_nacimiento" required>
                        </div>
                        <!-- edad -->
                        <div class="input-group grid__item6">
                            <label class="input-group-text" for="v_edad">Edad</label>
                            <input type="number" class="form-control" name="v_edad" id="v_edad"
                                aria-label="Edad del paciente" aria-describedby="input_v_edad" required>
                        </div>
                        <!-- estado civil -->
                        <div class="input-group grid__item7">
                            <label class="input-group-text" for="v_estado_civil">Estado
                                civil</label>
                            <select class="form-select" name="v_estado_civil" id="v_estado_civil"
                                aria-label="Estado civil del paciente" aria-describedby="input_v_estado_civil" required>
                                <option disabled value="">Seleccione...</option>
                                <option value="S">Soltero/a</option>
                                <option value="C">Casado/a</option>
                                <option value="D">Divorciado/a</option>
                                <option value="V">Viudo/a</option>
                            </select>
                        </div>
                        <!-- numero area, télefono, tipo teléfono, descripcion -->
                        <div class="input-group grid__item8">
                            <label class="input-group-text">Teléfono<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="v_area_telefono_fijo"
                                id="v_area_telefono_fijo" aria-label="Area del telefono"
                                aria-describedby="input_v_area_telefono_fijo" value="504">
                            <!-- número de area -->
                            <input type="number" class="form-control" name="v_numero_telefono_fijo"
                                id="v_numero_telefono_fijo" aria-label="Número del teléfono"
                                aria-describedby="input_v_numero_telefono_fijo" placeholder="0000 0000">
                            <!-- número de teléfono -->
                            <select class="form-select" name="v_tipo_telefono_fijo" id="v_tipo_telefono_fijo"
                                aria-label="Tipo de teléfono" aria-describedby="input_v_tipo_telefono_fijo" required>
                                <option selected disabled value="">Tipo teléfono...</option>
                                <option value="F">Fijo</option>
                                <option value="C">Celular</option>
                            </select>
                            <!-- tipo de teléfono -->
                            <input type="text" class="form-control" name="v_descripcion_telefono_fijo"
                                id="v_descripcion_telefono_fijo" aria-label="Descripción del teléfono"
                                aria-describedby="input_v_descripcion_telefono_fijo"
                                placeholder="Descripción(Opcional)">
                            <!-- descripción teléfono -->
                        </div>
                        <!-- numero area, télefono, tipo teléfono, descripcion -->
                        <div class="input-group grid__item9">
                            <label class="input-group-text">Teléfono<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="v_area_telefono_celular"
                                id="v_area_telefono_celular" aria-label="Area del telefono"
                                aria-describedby="input_v_area_telefono_celular" value="504" required>
                            <!-- número de area -->
                            <input type="number" class="form-control" name="v_numero_telefono_celular"
                                id="v_numero_telefono_celular" aria-label="Número del teléfono"
                                aria-describedby="input_v_numero_telefono_celular" placeholder="0000 0000" required>
                            <!-- número de teléfono -->
                            <select class="form-select" name="v_tipo_telefono_celular" id="v_tipo_telefono_celular"
                                aria-label="Tipo de teléfono" aria-describedby="input_v_tipo_telefono_celular" required>
                                <option selected disabled value="">Tipo teléfono...</option>
                                <option value="F">Fijo</option>
                                <option value="C">Celular</option>
                            </select>
                            <!-- tipo de teléfono -->
                            <input type="text" class="form-control" name="v_descripcion_telefono_celular"
                                id="v_descripcion_telefono_celular" aria-label="Descripción del teléfono"
                                aria-describedby="input_v_descripcion_telefono_celular"
                                placeholder="Descripción(Opcional)">
                            <!-- descripción teléfono -->
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"
                    form="view_paciente">Cerrar</button>
            </div>
        </div>
    </div>
</div>
