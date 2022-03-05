<div>
    <form action="">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateRol" title="Actualizar Rol" theme="purple" icon="fas fa-eye" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-rol">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-rol" id="u-nombre-rol" aria-label="Nombre del rol" aria-describedby="input-u-nombre-rol" placeholder="Ingrese el nombre del rol" required>
                </div><!-- nombre del rol -->
    
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-estado-rol">Estado<span class="text-danger">*</span></label>
                    <select class="form-select" name="u-estado-rol" id="u-estado-rol" aria-label="Estado del rol"
                        aria-describedby="input-u-estado-rol" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="A">ACTIVO</option>
                        <option value="I">INACTIVO</option>
                    </select>
                </div><!-- estado del rol -->
    
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-rol">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-rol" id="u-descripcion-rol"
                    aria-label="Descripción del rol" aria-describedby="input-u-descripcion-rol" placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del rol -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
