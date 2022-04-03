<div class="modal fade" id="updateUsuario" tabindex="-1" aria-labelledby="actualizarUsuario" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarUsuario">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Usuario
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('Los cambios','updateUsuario','actualizar_usuario')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_usuario">
                    {!! csrf_field() !!}
                    <!-- empleado -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_empleado">Empleado<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_empleado" id="u_empleado" readonly>
                    </div>
                    <!-- nombre del usuario -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_name">Usuario<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_name" id="u_name"
                            placeholder="Ingrese el nombre del usuario" required>
                    </div>
                    <!-- rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_rol">Rol<span class="text-danger">*</span></label>
                        <select class="form-select" name="u_rol" id="u_rol" required>
                            <option selected disabled value="">Seleccione ...</option>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->codigo }}">{{ $rol->rol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- correo -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_email">Correo<span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="u_email" id="u_email"
                            placeholder="Ingrese el correo" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios','updateUsuario','actualizar_usuario')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
