<div class="modal fade" id="createEmpleado" tabindex="-1" aria-labelledby="crearEmpleado" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearEmpleado">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Empleado
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_empleado">
                    {!! csrf_field() !!}
                    <!-- identidad -->
                    <div class="input-group grid__item1">
                        <label class="input-group-text" for="c_identidad">Identidad<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_identidad" id="c_identidad"
                            aria-label="Indentidad del empleado" aria-describedby="input_c_identidad"
                            placeholder="Ingrese el DNI" value="0801111111111" required>
                    </div>
                    <!-- nacionalidad -->
                    <div class="input-group grid__item2">
                        <label class="input-group-text" for="c_nacionalidad">Nacionalidad<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_nacionalidad" id="c_nacionalidad"
                            aria-label="Nacionalidad del empleado" aria-describedby="input_c_nacionalidad"
                            placeholder="Ingrese la nacionalidad" value="Hondureñ0" required>
                    </div>
                    <!-- nombre y apellido -->
                    <div class="input-group grid__item3">
                        <label class="input-group-text">Nombre completo<span class="text-danger">*</span></label>
                        <!-- input nombres -->
                        <input type="text" class="form-control" name="c_nombre" id="c_nombre" aria-label="Nombre"
                            aria-describedby="input_c_nombre" placeholder="Ingrese el nombre" value="Médico" required>
                        <!-- input apellidos -->
                        <input type="text" class="form-control" name="c_apellido" id="c_apellido"
                            aria-label="Apellido" aria-describedby="input_c_apellido"
                            placeholder="Ingrese los apellidos" value="1" required>
                    </div>
                    <!-- sexo -->
                    <div class="input-group grid__item4">
                        <label class="input-group-text" for="c_sexo">Sexo<span class="text-danger">*</span></label>
                        <select class="form-select" name="c_sexo" id="c_sexo" aria-label="Sexo del empleado"
                            aria-describedby="input_c_sexo" required>
                            <option disabled value="">Seleccione...</option>
                            <option selected value="H">Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>
                    <!-- fecha de nacimiento -->
                    <div class="input-group grid__item5">
                        <label class="input-group-text" for="c_fecha_nacimiento">Fecha
                            nacimiento<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="c_fecha_nacimiento" id="c_fecha_nacimiento"
                            aria-label="Fecha de nacimiento del empleado" aria-describedby="input_c_fecha_nacimiento"
                            value="2000-05-05" required>
                    </div>
                    <!-- edad -->
                    <div class="input-group grid__item6">
                        <label class="input-group-text" for="c_edad">Edad<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="c_edad" id="c_edad"
                            aria-label="Edad del empleado" aria-describedby="input_c_edad" placeholder="Ingrese la edad"
                            value="50" required>
                    </div>
                    <!-- estado civil -->
                    <div class="input-group grid__item7">
                        <label class="input-group-text" for="c_estado_civil">Estado
                            civil<span class="text-danger">*</span></label>
                        <select class="form-select" name="c_estado_civil" id="c_estado_civil"
                            aria-label="Estado civil del empleado" aria-describedby="input_c_estado_civil" required>
                            <option disabled value="">Seleccione...</option>
                            <option value="S">Soltero/a</option>
                            <option selected value="C">Casado/a</option>
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
                            aria-describedby="input_c_numero_telefono_fijo" placeholder="0000 0000" value="33333333">
                        <!-- número de teléfono -->
                        <input type="text" class="form-control" name="c_descripcion_telefono_fijo"
                            id="c_descripcion_telefono_fijo" aria-label="Descripción del teléfono"
                            aria-describedby="input_c_descripcion_telefono_fijo" placeholder="Descripción(Opcional)"
                            value="---">
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
                            aria-describedby="input_c_numero_telefono_celular" placeholder="0000 0000" required
                            value="44444444">
                        <!-- número de teléfono -->
                        <input type="text" class="form-control" name="c_descripcion_telefono_celular"
                            id="c_descripcion_telefono_celular" aria-label="Descripción del teléfono"
                            aria-describedby="input_c_descripcion_telefono_celular" placeholder="Descripción(Opcional)"
                            value="---">
                        <!-- descripción teléfono -->
                    </div>
                    <!-- dirección, referencia -->
                    <div class="input-group grid__item10">
                        <label class="input-group-text">Dirección<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_direccion" id="c_direccion"
                            aria-label="Dirección del empleado" aria-describedby="input_c_direccion"
                            placeholder="Ingrese la dirección" required value="Dirección zzz">
                        <!-- dirección del empleado -->
                        <input type="text" class="form-control" name="c_referencia" id="c_referencia"
                            aria-label="Referencia de la dirección" aria-describedby="input_c_referencia"
                            placeholder="Referencia(Opcional)" value="---">
                        <!-- referencia del empleado -->
                    </div>
                    <!-- correo -->
                    <div class="input-group grid__item11">
                        <label class="input-group-text" for="c_correo_empleado">Correo</label>
                        <input type="email" class="form-control" name="c_correo" id="c_correo"
                            aria-label="Correo del empleado" aria-describedby="input_c_correo"
                            placeholder="example@example.com" required value="medico1@example.com">
                    </div>
                    <!-- fecha de contratacion -->
                    <div class="input-group grid__item12">
                        <label class="input-group-text" for="c_fecha_contratacion">Fecha contratación<span
                                class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="c_fecha_contratacion" id="c_fecha_contratacion"
                            aria-label="Fecha de contratacion del empleado"
                            aria-describedby="input_c_fecha_contratacion" required value="2022-01-01">
                    </div>
                    <!-- cargos -->
                    <div class="input-group grid__item13">
                        <label class="input-group-text" for="c_cargo">Cargo<span class="text-danger">*</span></label>
                        <select class="form-select" name="c_cargo" id="c_cargo" aria-label="cargo del empleado"
                            aria-describedby="input_c_cargo" required>
                            <option selected disabled value="">Seleccione...</option>
                            @foreach ($cargos as $row)
                                <option value="{{ $row->cargo }}">{{ $row->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- foto -->
                    {{-- <div class="input-group grid__item14">
                        <label class="input-group-text" for="c_foto">Foto<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="c_foto" id="c_foto">
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_empleado">Guardar</button>
                <button type="reset" class="btn btn-danger" form="crear_empleado"
                    data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
