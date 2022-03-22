<div>
    <div class="modal fade" id="updateEmpleado" name="inputs-u-1" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h4 class="modal-title" id="staticBackdropLabel">
                        <i class="fas fa-eye mr-2"></i>
                        Empleado
                    </h4>
                    <button type="button" class="btn-close" id="cerrar-modal-u" title="Cerrar"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- información -->
                    <div>
                        <form id="form-u-1" action="#" method="post">
                            {!! csrf_field() !!}
                            @method('put')
                            <!-- botones de edición, submit y cancelar -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="m-0">Información</h4>
                                <div>
                                    <x-adminlte-button class="btn-editar btn-sm" type="button" theme="warning"
                                        label="Editar" id="editar-1" />
                                    <x-adminlte-button class="mr-1 btn-hidden d-none btn-sm" type="submit"
                                        theme="success" label="Guardar" id="actualizar-1" />
                                    <x-adminlte-button class="mr-1 btn-cancelar btn-hidden d-none btn-sm" theme="danger"
                                        label="Cancelar" id="cancelar-1" />
                                </div>
                            </div>
                            <hr class="m-0 mt-1 mb-2">
                            <fieldset class="grid--responsive mb-3" id="inputs-u-1" disabled>
                                <!-- identidad -->
                                <div class="input-group grid__item1">
                                    <label class="input-group-text" for="u-identidad-empleado">Identidad<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="u-identidad-empleado"
                                        id="u-identidad-empleado" aria-label="Indentidad del empleado"
                                        aria-describedby="input-u-identidad-empleado" placeholder="Ingrese el DNI"
                                        wire:model.defer="identidad" required>
                                </div>
                                <!-- nacionalidad -->
                                <div class="input-group grid__item2">
                                    <label class="input-group-text" for="u-nacionalidad-empleado">Nacionalidad<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="u-nacionalidad-empleado"
                                        id="u-nacionalidad-empleado" aria-label="Nacionalidad del empleado"
                                        aria-describedby="input-u-nacionalidad-empleado"
                                        placeholder="Ingrese la nacionalidad" wire:model.defer="nacionalidad" required>
                                </div>
                                <!-- nombre y apellido -->
                                <div class="input-group grid__item3">
                                    <label class="input-group-text">Nombre completo<span
                                            class="text-danger">*</span></label>
                                    <!-- input nombres -->
                                    <input type="text" class="form-control" name="u-nombre-empleado"
                                        id="u-nombre-empleado" aria-label="Nombre"
                                        aria-describedby="input-u-nombre-empleado" placeholder="Ingrese el nombre"
                                        wire:model.defer="nombres" required>
                                    <!-- input apellidos -->
                                    <input type="text" class="form-control" name="u-apellido-empleado"
                                        id="u-apellido-empleado" aria-label="Apellido"
                                        aria-describedby="input-u-apellido-empleado" placeholder="Ingrese los apellidos"
                                        wire:model.defer="apellidos" required>
                                </div>
                                <!-- sexo -->
                                <div class="input-group grid__item4">
                                    <label class="input-group-text" for="u-sexo-empleado">Sexo<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="u-sexo-empleado" id="u-sexo-empleado"
                                        aria-label="Sexo del empleado" aria-describedby="input-u-sexo-empleado"
                                        wire:model.defer="sexo" required>
                                        <option disabled value="">Seleccione...</option>
                                        <option value="H" Selected>Hombre</option>
                                        <option value="M">Mujer</option>
                                    </select>
                                </div>
                                <!-- fecha de nacimiento -->
                                <div class="input-group grid__item5">
                                    <label class="input-group-text" for="u-fecha-nacimiento-empleado">Fecha
                                        nacimiento<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="u-fecha-nacimiento-empleado"
                                        id="u-fecha-nacimiento-empleado" aria-label="Fecha de nacimiento del empleado"
                                        aria-describedby="input-u-fecha-nacimiento" wire:model.defer="fecha_nacimiento"
                                        required>
                                </div>
                                <!-- edad -->
                                <div class="input-group grid__item6">
                                    <label class="input-group-text" for="u-edad-empleado">Edad<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="u-edad-empleado"
                                        id="u-edad-empleado" aria-label="Edad del empleado"
                                        aria-describedby="input-u-edad-empleado" wire:model.defer="edad" required>
                                </div>
                                <!-- estado civil -->
                                <div class="input-group grid__item7">
                                    <label class="input-group-text" for="u-estado-civil-empleado">Estado
                                        civil<span class="text-danger">*</span></label>
                                    <select class="form-select" name="u-estado-civil-empleado"
                                        id="u-estado-civil-empleado" aria-label="Estado civil del empleado"
                                        aria-describedby="input-u-estado-civil-empleado" wire:model.defer="estado_civil"
                                        required>
                                        <option disabled value="">Seleccione...</option>
                                        <option value="S">Soltero/a</option>
                                        <option value="C">Casado/a</option>
                                        <option value="D">Divorciado/a</option>
                                        <option value="V">Viudo/a</option>
                                    </select>
                                </div>
                            </fieldset>
                        </form>
                        <!-- botones de edición, submit y cancelar -->
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="m-0">Contacto</h4>
                            <div>
                                <a href="#" class="btn btn-primary btn-sm">Gestionar Contacto</a>
                            </div>
                        </div>
                        <hr class="m-0 mt-1 mb-2">
                        <div>
                            @if (!empty($telefonos))
                                @foreach ($telefonos as $telefono)
                                    <div class="input-group mb-2">
                                        <label class="input-group-text">Teléfono</label>
                                        <!-- número de teléfono -->
                                        <input type="text" class="form-control" aria-label="Número de teléfono"
                                            aria-describedby="número de teléfono" value="{!! '+' . $telefono->area . ' ' . $telefono->telefono !!}"
                                            readonly>
                                        <!-- tipo de teléfono -->
                                        <input type="text" class="form-control" aria-label="Tipo de teléfono"
                                            aria-describedby="tipo de teléfono" value="{!! $telefono->tipo !!}"
                                            readonly>
                                        <!-- descripción teléfono -->
                                        <input type="text" class="form-control" aria-label="Descripción de teléfono"
                                            aria-describedby="descripción de teléfono" value="{!! $telefono->descripcion !!}"
                                            readonly>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            @if (!empty($correos))
                                @foreach ($correos as $correo)
                                    <div class="input-group mb-2">
                                        <label class="input-group-text">Correo</label>
                                        <input type="email" class="form-control" aria-label="Correo"
                                            aria-describedby="correo" value="{!! $correo->correo !!}" readonly>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div>
                            @if (!empty($direcciones))
                                @foreach ($direcciones as $direccion)
                                    <div class="input-group mb-2">
                                        <label class="input-group-text">Dirección</label>
                                        <!-- dirección -->
                                        <input type="text" class="form-control" aria-label="Dirección"
                                            aria-describedby="dirección" value="{!! $direccion->direccion !!}" readonly>
                                        <!-- referencia -->
                                        <input type="text" class="form-control" aria-label="Referencia"
                                            aria-describedby="referencia" value="{!! $direccion->descripcion !!}" readonly>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- boton del modal -->
                <div class="modal-footer">
                    <x-adminlte-button theme="danger" label="Cerrar" id="cerrar-modal-u" title="Cerrar"
                        aria-label="Cerrar" />
                </div>
            </div>
        </div>
    </div>
</div>
