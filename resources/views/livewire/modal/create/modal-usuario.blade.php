<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createUsuario" title="Nuevo Usuario" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-empleado">Empleado<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-empleado" id="c-empleado" aria-label="Empleado"
                        aria-describedby="input-c-empleado" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Empleado 1</option>
                        <option value="2">Empleado 2</option>
                    </select>
                </div>
                <!-- empleado -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-usuario">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-usuario" id="c-nombre-usuario"
                        aria-label="Nombre del usuario" aria-describedby="input-c-nombre-usuario"
                        placeholder="Ingrese el nombre del usuario" required>
                </div>
                <!-- nombre del usuario -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-rol">Rol<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-rol" id="c-rol" aria-label="Rol del usuario"
                        aria-describedby="input-c-rol" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Rol 1</option>
                        <option value="2">Rol 2</option>
                    </select>
                </div>
                <!-- rol -->
                <div class="input-group mb-1">
                    <label class="input-group-text" for="c-password-usuario">Contraseña<span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="c-password-usuario" id="c-password-usuario"
                        aria-label="Contraseña del usuario" aria-describedby="input-c-password-usuario"
                        placeholder="Ingrese la contraseña del usuario" required>
                </div>
                <!-- contraseña -->
                <div class="mb-3">
                    <button class="btn btn-primary">Generar contraseña temporal</button>
                </div>
                <!-- boton generar contraseña -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
