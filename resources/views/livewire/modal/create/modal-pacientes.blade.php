<div>
    <div class="modal fade" id="crearPaciente" name="inputs-c-1" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-teal">
                    <h4 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-plus mr-2"></i>
                        Nuevo Paciente
                    </h4>
                    <button type="button" class="btn-close" id="cerrar-modal-c" title="Cerrar"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form id="form-paciente" action="post">
                        {!! csrf_field() !!}
                        <fieldset class="grid--responsive data" id="inputs-c-1">
                            <div class="input-group grid__item1">
                                <label class="input-group-text" for="c-identidad-paciente">Identidad<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="c-identidad-paciente"
                                    id="c-identidad-paciente" aria-label="Indentidad del paciente"
                                    aria-describedby="input-c-identidad-paciente" placeholder="Ingrese el DNI" required>
                            </div>
                            <!-- identidad -->
                            <div class="input-group grid__item2">
                                <label class="input-group-text" for="c-nacionalidad-paciente">Nacionalidad<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="c-nacionalidad-paciente"
                                    id="c-nacionalidad-paciente" aria-label="Nacionalidad del paciente"
                                    aria-describedby="input-c-nacionalidad-paciente"
                                    placeholder="Ingrese la nacionalidad" required>
                            </div>
                            <!-- nacionalidad -->
                            <div class="input-group grid__item3">
                                <label class="input-group-text">Nombre completo<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="c-nombre-paciente"
                                    id="c-nombre-paciente" aria-label="Nombre"
                                    aria-describedby="input-c-nombre-paciente" placeholder="Ingrese el nombre" required>
                                <!-- input nombres -->
                                <input type="text" class="form-control" name="c-apellido-paciente"
                                    id="c-apellido-paciente" aria-label="Apellido"
                                    aria-describedby="input-c-apellido-paciente" placeholder="Ingrese los apellidos"
                                    required>
                                <!-- input apellidos -->
                            </div>
                            <!-- nombre y apellido -->
                            <div class="input-group grid__item4">
                                <label class="input-group-text" for="c-sexo-paciente">Sexo<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="c-sexo-paciente" id="c-sexo-paciente"
                                    aria-label="Sexo del paciente" aria-describedby="input-c-sexo-paciente" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="H">Hombre</option>
                                    <option value="M">Mujer</option>
                                </select>
                            </div>
                            <!-- sexo -->
                            <div class="input-group grid__item5">
                                <label class="input-group-text" for="c-fecha-nacimiento-paciente">Fecha
                                    nacimiento<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="c-fecha-nacimiento-paciente"
                                    id="c-fecha-nacimiento-paciente" aria-label="Fecha de nacimiento del paciente"
                                    aria-describedby="input-c-fecha-nacimiento" required>
                            </div>
                            <!-- fecha de nacimiento -->
                            <div class="input-group grid__item6">
                                <label class="input-group-text" for="c-edad-paciente">Edad<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="c-edad-paciente" id="c-edad-paciente"
                                    aria-label="Edad del paciente" aria-describedby="input-c-edad-paciente" required>
                            </div>
                            <!-- edad -->
                            <div class="input-group grid__item7">
                                <label class="input-group-text" for="c-estado-civil-paciente">Estado
                                    civil<span class="text-danger">*</span></label>
                                <select class="form-select" name="c-estado-civil-paciente"
                                    id="c-estado-civil-paciente" aria-label="Estado civil del paciente"
                                    aria-describedby="input-c-estado-civil-paciente" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="S">Soltero/a</option>
                                    <option value="C">Casado/a</option>
                                    <option value="D">Divorciado/a</option>
                                    <option value="V">Viudo/a</option>
                                </select>
                            </div>
                            <!-- estado civil -->
                            <div class="input-group grid__item8">
                                <label class="input-group-text">Teléfono<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="c-area-telefono" id="c-area-telefono"
                                    aria-label="Area del telefono" aria-describedby="input-c-area-telefono" value="504"
                                    required>
                                <!-- número de area -->
                                <input type="number" class="form-control" name="c-numero-telefono"
                                    id="c-numero-telefono" aria-label="Número del teléfono"
                                    aria-describedby="input-c-numero-telefono" placeholder="0000 0000" required>
                                <!-- número de teléfono -->
                                <select class="form-select" name="c-tipo-telefono" id="c-tipo-telefono"
                                    aria-label="Tipo de teléfono" aria-describedby="input-c-tipo-telefono" required>
                                    <option selected disabled value="">Tipo teléfono...</option>
                                    <option value="F">Fijo</option>
                                    <option value="M">Móvil</option>
                                </select>
                                <!-- tipo de teléfono -->
                                <input type="text" class="form-control" name="c-descripcion-telefono"
                                    id="c-descripcion-telefono" aria-label="Descripción del teléfono"
                                    aria-describedby="input-c-descricpcion-telefono"
                                    placeholder="Descripción(Opcional)">
                                <!-- descripción teléfono -->
                            </div>
                            <!-- numero area, télefono, tipo teléfono, descripcion -->
                            <div class="input-group grid__item9">
                                <label class="input-group-text">Dirección<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="c-direccion" id="c-direccion"
                                    aria-label="Dirección del paciente" aria-describedby="input-c-direccion"
                                    placeholder="Ingrese la dirección" required>
                                <!-- dirección del paciente -->
                                <input type="text" class="form-control" name="c-referencia" id="c-referencia"
                                    aria-label="Referencia de la dirección" aria-describedby="input-c-referencia"
                                    placeholder="Referencia(Opcional)">
                                <!-- referencia del paciente -->
                            </div>
                            <!-- dirección, referencia -->
                            <div class="input-group grid__item10">
                                <label class="input-group-text" for="c-correo-paciente">Correo</label>
                                <input type="email" class="form-control" name="c-correo-paciente"
                                    id="c-correo-paciente" aria-label="Correo del paciente"
                                    aria-describedby="input-c-correo-paciente" placeholder="example@example.com"
                                    required>
                            </div>
                            <!-- correo -->
                        </fieldset>
                    </form>
                    <!-- -->
                </div>
                <div class="modal-footer">
                    <x-adminlte-button type="submit" theme="success" form="form-paciente" label="Guardar" />
                    <x-adminlte-button theme="danger" label="Cancelar" id="cerrar-modal-c" title="Cerrar"
                        aria-label="Cerrar" />
                </div>
            </div>
        </div>
    </div>
</div>
