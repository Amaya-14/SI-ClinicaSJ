<div class="modal fade" id="createUsuario" tabindex="-1" aria-labelledby="crearUsuario" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearUsuario">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo Usuario
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('La información', 'createUsuario', 'crear_usuario')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_usuario">
                    {!! csrf_field() !!}
                    <!-- empleado -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_empleado">Empleado<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_empleado" id="c_empleado" aria-label="Empleado"
                            aria-describedby="input_c_empleado" required>
                            <option selected disabled value="">Seleccione...</option>
                            @foreach ($empleados as $empleado)
                                <option value="{{ $empleado['codigo'] }}">{{ $empleado['nombre'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- nombre del usuario -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_name">Usuario<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c_name" id="c_name"
                            placeholder="Ingrese el nombre del usuario" required>
                    </div>
                    <!-- rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_rol">Rol<span class="text-danger">*</span></label>
                        <select class="form-select" name="c_rol" id="c_rol" required>
                            <option selected disabled value="">Seleccione ...</option>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->codigo }}">{{ $rol->rol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- correo -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_email">Correo<span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="c_email" id="c_email"
                            placeholder="Ingrese el correo" required>
                    </div>
                    <!-- contraseña -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c_password">Contraseña<span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="c_password" id="c_password"
                            placeholder="Ingrese la contraseña" required>
                    </div>
                    <!-- contraseña -->
                    <div class="input-group mb-2">
                        <label class="input-group-text" for="c_password_confirmation">Confirmar Contraseña<span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="c_password_confirmation"
                            id="c_password_confirmation" placeholder="Repita la contraseña" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_usuario">Guardar</button>
                <button class="btn btn-danger" onclick="cerrarModal('La información', 'createUsuario', 'crear_usuario')"">Cancelar</button>
            </div>
        </div>
    </div>
</div>
