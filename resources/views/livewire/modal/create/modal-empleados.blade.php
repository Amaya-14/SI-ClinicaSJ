<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <div class="modal fade" id="createEmpleado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-teal">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-plus mr-2"></i>
                            Nuevo Empleado
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Información</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Información Empleado</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <br>
                                <form action="" method="post">
                                    {!! csrf_field() !!}
                                    @method('put')
                                    <section class="grid--responsive">
                                        <div class="input-group grid__item1">
                                            <label class="input-group-text" for="c-identidad-empleado">Identidad<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="c-identidad-empleado"
                                                id="c-identidad-empleado" aria-label="Indentidad del empleado"
                                                aria-describedby="input-c-identidad-empleado"
                                                placeholder="Ingrese el DNI" required>
                                        </div>
                                        <!-- identidad del empleado -->
                                        <div class="input-group grid__item2">
                                            <label class="input-group-text"
                                                for="c-nacionalidad-empleado">Nacionalidad<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="c-nacionalidad-empleado"
                                                id="c-nacionalidad-empleado" aria-label="Nacionalidad del empleado"
                                                aria-describedby="input-c-nacionalidad-empleado"
                                                placeholder="Ingrese la nacionalidad" required>
                                        </div>
                                        <!-- nacionalidad del empleado -->
                                        <div class="input-group grid__item3">
                                            <label class="input-group-text">Nombre completo<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="c-nombre-empleado"
                                                id="c-nombre-empleado" aria-label="Nombre"
                                                aria-describedby="input-c-nombre-empleado"
                                                placeholder="Ingrese el nombre" required>
                                            <!-- input nombres -->
                                            <input type="text" class="form-control" name="c-apellido-empleado"
                                                id="c-apellido-empleado" aria-label="Apellido"
                                                aria-describedby="input-c-apellido-empleado"
                                                placeholder="Ingrese los apellidos" required>
                                            <!-- input apellidos -->
                                        </div>
                                        <!-- nombre y apellido del empleado -->
                                        <div class="input-group grid__item4">
                                            <label class="input-group-text" for="c-sexo-empleado">Sexo<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" name="c-sexo-empleado" id="c-sexo-empleado"
                                                aria-label="Sexo del empleado" aria-describedby="input-c-sexo-empleado"
                                                required>
                                                <option selected disabled value="">Seleccione...</option>
                                                <option value="H">Hombre</option>
                                                <option value="M">Mujer</option>
                                            </select>
                                        </div>
                                        <!-- sexo del empleado -->
                                        <div class="input-group grid__item5">
                                            <label class="input-group-text" for="c-fecha-nacimiento-empleado">Fecha
                                                nacimiento<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="c-fecha-nacimiento-empleado"
                                                id="c-fecha-nacimiento-empleado"
                                                aria-label="Fecha de nacimiento del empleado"
                                                aria-describedby="input-c-fecha-nacimiento" required>
                                        </div>
                                        <!-- fecha de nacimiento del empleado -->
                                        <div class="input-group grid__item6">
                                            <label class="input-group-text" for="c-edad-empleado">Edad<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="c-edad-empleado"
                                                id="c-edad-empleado" aria-label="Edad del empleado"
                                                aria-describedby="input-c-edad-empleado" required>
                                        </div>
                                        <!-- edad del empleado -->
                                        <div class="input-group grid__item7">
                                            <label class="input-group-text" for="c-estado-civil-empleado">Estado
                                                civil<span class="text-danger">*</span></label>
                                            <select class="form-select" name="c-estado-civil-empleado"
                                                id="c-estado-civil-empleado" aria-label="Estado civil del empleado"
                                                aria-describedby="input-c-estado-civil-empleado" required>
                                                <option selected disabled value="">Seleccione...</option>
                                                <option value="S">Soltero/a</option>
                                                <option value="C">Casado/a</option>
                                                <option value="D">Divorciado/a</option>
                                                <option value="V">Viudo/a</option>
                                            </select>
                                        </div>
                                        <!-- estado civil del empleado  -->
                                        <div class="input-group grid__item8">
                                            <label class="input-group-text">Teléfono<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="c-area-telefono"
                                                id="c-area-telefono" aria-label="Area del telefono"
                                                aria-describedby="input-c-area-telefono" value="504" required>
                                            <!-- número de area -->
                                            <input type="number" class="form-control" name="c-numero-telefono"
                                                id="c-numero-telefono" aria-label="Número del teléfono"
                                                aria-describedby="input-c-numero-telefono" placeholder="0000 0000"
                                                required>
                                            <!-- número de teléfono -->
                                            <select class="form-select" name="c-tipo-telefono" id="c-tipo-telefono"
                                                aria-label="Tipo de teléfono" aria-describedby="input-c-tipo-telefono"
                                                required>
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
                                        <!-- numero area, télefono, tipo teléfono, descripcion del empleado -->
                                        <div class="input-group grid__item9">
                                            <label class="input-group-text">Dirección<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="c-direccion"
                                                id="c-direccion" aria-label="Dirección del empleado"
                                                aria-describedby="input-c-direccion" placeholder="Ingrese la dirección"
                                                required>
                                            <!-- dirección del empleado -->
                                            <input type="text" class="form-control" name="c-referencia"
                                                id="c-referencia" aria-label="Referencia de la dirección"
                                                aria-describedby="input-c-referencia"
                                                placeholder="Referencia(Opcional)">
                                            <!-- referencia del empleado -->
                                        </div>
                                        <!-- dirección, referencia del empleado -->
                                        <div class="input-group grid__item10">
                                            <label class="input-group-text" for="c-correo-empleado">Correo</label>
                                            <input type="email" class="form-control" name="c-correo-empleado"
                                                id="c-correo-empleado" aria-label="Correo del empleado"
                                                aria-describedby="input-c-correo-empleado"
                                                placeholder="example@example.com" required>
                                        </div>
                                        <!-- correo del empleado -->
                                    </section>
                                    <!-- -->
                                </form>
                                <!-- -->
                            </div>
                            <!-- -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">...</div>
                            <!-- -->
                        </div>
                        <!-- -->
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button type="submit" theme="success" label="Guardar" />
                        <x-adminlte-button theme="danger" label="Cancelar" data-bs-dismiss="modal" />
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- -->
</div>
