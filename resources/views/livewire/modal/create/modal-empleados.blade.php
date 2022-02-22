<div>
    <form action="#" method="post">
        <x-adminlte-modal id="createEmpleado" title="Nuevo Empleado" size="lg" theme="teal" icon="fas fa-user-circle"
            v-centered static-backdrop scrollable>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Información</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Información Empleado</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <br>
                    <form action="" method="post">
                        {!! csrf_field() !!}
                        @method('put')
                        <section class="grid--responsive">
                            <div class="input-group grid__item1">
                                <label class="input-group-text" for="identidad">Identidad</label>
                                <input type="number" class="form-control" name="identidad" id="identidad"
                                    aria-label="Identidad" aria-describedby="input-identidad" placeholder="Ingrese su DNI"
                                    required>
                            </div><!-- identidad -->
    
                            <div class="input-group grid__item2">
                                <label class="input-group-text" for="nacionalidad">Nacionalidad</label>
                                <input type="text" class="form-control" name="nacionalidad" id="nacionalidad"
                                    aria-label="Nacionalidad" aria-describedby="input-nacionalidad"
                                    placeholder="Ingrese su nacionalidad" required>
                            </div><!-- nacionalidad -->
    
                            <div class="input-group grid__item3">
                                <label class="input-group-text" for="nombre-completo">Nombre / Apellido</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" aria-label="Nombre"
                                    aria-describedby="input-nombre" placeholder="Ingrese su nombre" required>
                                <input type="text" class="form-control" name="apellido" id="apellido"
                                    aria-label="Apellido" aria-describedby="input-apellido"
                                    placeholder="Ingrese su apellidos" required>
                            </div><!-- nombre y apellido -->
    
                            <div class="input-group grid__item4">
                                <label class="input-group-text" for="sexo">Sexo</label>
                                <select class="form-select" name="sexo" id="sexo" aria-label="Sexo"
                                    aria-describedby="input-sexo" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="H">Hombre</option>
                                    <option value="M">Mujer</option>
                                </select>
                            </div><!-- sexo -->
    
                            <div class="input-group grid__item5">
                                <label class="input-group-text" for="fecha-nacimiento">Fecha nacimiento</label>
                                <input type="date" class="form-control" name="nacionalidad" id="nacionalidad"
                                    aria-label="Fehca Nacimiento" aria-describedby="input-fecha-nacimiento" required>
                            </div><!-- fecha de nacimiento -->
    
                            <div class="input-group grid__item6">
                                <label class="input-group-text" for="edad">Edad</label>
                                <input type="number" class="form-control" name="edad" id="edad" aria-label="Edad"
                                    aria-describedby="input-edad" required>
                            </div><!-- edad -->
    
                            <div class="input-group grid__item7">
                                <label class="input-group-text" for="estado-civil">Estado civil</label>
                                <select class="form-select" name="estado-civil" id="estado-civil"
                                    aria-label="Estado civil" aria-describedby="input-estado-civil" required>
                                    <option selected disabled value="">Seleccione...</option>
                                    <option value="S">Soltero/a</option>
                                    <option value="C">Casado/a</option>
                                    <option value="D">Divorciado/a</option>
                                    <option value="V">Viudo/a</option>
                                </select>
                            </div><!-- estado civil -->
    
                            <div class="input-group grid__item8">
                                <label class="input-group-text" for="telefono">Teléfono</label>
                                <input type="number" class="form-control" name="area" id="area" aria-label="Area"
                                    aria-describedby="input-area" value="504" placeholder="Ingrese su area" required>
                                <input type="number" class="form-control" name="numero" id="numero" aria-label="Número"
                                    aria-describedby="input-numero" placeholder="Ingrese su número" required>
                                <select class="form-select" name="tipo-telefono" id="tipo-telefono"
                                    aria-label="Tipo teléfono" aria-describedby="input-tipo-telefono" required>
                                    <option selected disabled value="">Tipo teléfono...</option>
                                    <option value="C">Celular</option>
                                    <option value="F">Fijo</option>
                                </select>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    aria-label="Descripción" aria-describedby="input-descricpcion"
                                    placeholder="Descripción(Opcional)">
                            </div><!-- numero area, télefono, tipo teléfono, descripcion -->
    
                            <div class="input-group grid__item9">
                                <label class="input-group-text" for="direccion">Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="direccion"
                                    aria-label="Dirección" aria-describedby="input-direccion"
                                    placeholder="Ingrese su dirección" required>
                                <input type="text" class="form-control" name="referencia" id="referencia"
                                    aria-label="Referencia" aria-describedby="input-referencia"
                                    placeholder="Referencia(Opcional)">
                            </div><!-- dirección, referencia -->
    
                            <div class="input-group grid__item10">
                                <label class="input-group-text" for="correo">Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo" aria-label="Correo"
                                    aria-describedby="input-correo" placeholder="Ingrese su Correo" required>
                            </div><!-- correo -->
    
                        </section>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
            </div>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
