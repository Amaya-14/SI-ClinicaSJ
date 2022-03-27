<div class="modal fade" id="createPaciente" tabindex="-1" aria-labelledby="crearPaciente" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearPaciente">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Paciente
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_paciente">
                    {!! csrf_field() !!}
                    <!-- identidad -->
                    <div class="input-group grid__item1">
                        <label class="input-group-text" for="c_identidad">Identidad<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_identidad" id="c_identidad"
                            aria-label="Indentidad del paciente" aria-describedby="input_c_identidad"
                            placeholder="Ingrese el DNI" required>
                    </div>
                    <!-- nacionalidad -->
                    <div class="input-group grid__item2">
                        <label class="input-group-text" for="c_nacionalidad">Nacionalidad<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nacionalidad" id="c_nacionalidad"
                            aria-label="Nacionalidad del paciente" aria-describedby="input_c_nacionalidad"
                            placeholder="Ingrese la nacionalidad" value="Hondureño" required>
                    </div>
                    <!-- nombre y apellido -->
                    <div class="input-group grid__item3">
                        <label class="input-group-text">Nombre completo<span class="text-danger">*</span></label>
                        <!-- input nombres -->
                        <input type="text" class="form-control" name="c_nombre" id="c_nombre" aria-label="Nombre"
                            aria-describedby="input_c_nombre" placeholder="Ingrese el nombre" required>
                        <!-- input apellidos -->
                        <input type="text" class="form-control" name="c_apellido" id="c_apellido"
                            aria-label="Apellido" aria-describedby="input_c_apellido"
                            placeholder="Ingrese los apellidos" required>
                    </div>
                    <!-- sexo -->
                    <div class="input-group grid__item4">
                        <label class="input-group-text" for="c_sexo">Sexo<span class="text-danger">*</span></label>
                        <select class="form-select" name="c_sexo" id="c_sexo" aria-label="Sexo del paciente"
                            aria-describedby="input_c_sexo" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="H">Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="input-group grid__item5">
                        <label class="input-group-text" for="c_fecha_nacimiento">Fecha
                            nacimiento<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="c_fecha_nacimiento" id="c_fecha_nacimiento"
                            aria-label="Fecha de nacimiento del paciente" aria-describedby="input_c_fecha_nacimiento"
                            required>
                    </div>
                    <!-- edad -->
                    <div class="input-group grid__item6">
                        <label class="input-group-text" for="c_edad">Edad<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_edad" id="c_edad"
                            aria-label="Edad del paciente" aria-describedby="input_c_edad" placeholder="Ingrese la edad"
                            required>
                    </div>
                    <!-- estado civil -->
                    <div class="input-group grid__item7">
                        <label class="input-group-text" for="c_estado_civil">Estado
                            civil<span class="text-danger">*</span></label>
                        <select class="form-select" name="c_estado_civil" id="c_estado_civil"
                            aria-label="Estado civil del paciente" aria-describedby="input_c_estado_civil" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="S">Soltero/a</option>
                            <option value="C">Casado/a</option>
                            <option value="D">Divorciado/a</option>
                            <option value="V">Viudo/a</option>
                        </select>
                    </div>
                    <!-- numero area, télefono, tipo teléfono, descripcion -->
                    <div class="input-group grid__item8">
                        <label class="input-group-text">Teléfono Fijo</label>
                        <input type="number" class="form-control" name="c_area_telefono_fijo"
                            id="c_area_telefono_fijo" aria-label="Area del telefono"
                            aria-describedby="input_c_area_telefono_fijo" value="504">
                        <!-- número de area -->
                        <input type="number" class="form-control" name="c_numero_telefono_fijo"
                            id="c_numero_telefono_fijo" aria-label="Número del teléfono"
                            aria-describedby="input_c_numero_telefono_fijo" placeholder="0000 0000">
                        <!-- número de teléfono -->
                        <input type="text" class="form-control" name="c_descripcion_telefono_fijo"
                            id="c_descripcion_telefono_fijo" aria-label="Descripción del teléfono"
                            aria-describedby="input_c_descripcion_telefono_fijo" placeholder="Descripción(Opcional)">
                        <!-- descripción teléfono -->
                    </div>
                    <!-- numero area, télefono, tipo teléfono, descripcion -->
                    <div class="input-group grid__item9">
                        <label class="input-group-text">Teléfono Celular<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_area_telefono_celular"
                            id="c_area_telefono_celular" aria-label="Area del telefono"
                            aria-describedby="input_c_area_telefono_celular" value="504" required>
                        <!-- número de area -->
                        <input type="number" class="form-control" name="c_numero_telefono_celular"
                            id="c_numero_telefono_celular" aria-label="Número del teléfono"
                            aria-describedby="input_c_numero_telefono_celular" placeholder="0000 0000" required>
                        <!-- número de teléfono -->
                        <input type="text" class="form-control" name="c_descripcion_telefono_celular"
                            id="c_descripcion_telefono_celular" aria-label="Descripción del teléfono"
                            aria-describedby="input_c_descripcion_telefono_celular" placeholder="Descripción(Opcional)">
                        <!-- descripción teléfono -->
                    </div>
                    <!-- dirección, referencia -->
                    <div class="input-group grid__item10">
                        <label class="input-group-text">Dirección<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_direccion" id="c_direccion"
                            aria-label="Dirección del paciente" aria-describedby="input_c_direccion"
                            placeholder="Ingrese la dirección" required>
                        <!-- dirección del paciente -->
                        <input type="text" class="form-control" name="c_referencia" id="c_referencia"
                            aria-label="Referencia de la dirección" aria-describedby="input_c_referencia"
                            placeholder="Referencia(Opcional)">
                        <!-- referencia del paciente -->
                    </div>
                    <!-- correo -->
                    <div class="input-group grid__item11">
                        <label class="input-group-text" for="c_correo_paciente">Correo</label>
                        <input type="email" class="form-control" name="c_correo" id="c_correo"
                            aria-label="Correo del paciente" aria-describedby="input_c_correo"
                            placeholder="example@example.com">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_paciente">Guardar</button>
                <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
