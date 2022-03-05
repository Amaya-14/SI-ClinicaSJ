<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createRol" title="Nuevo Rol" theme="teal" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-rol">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-rol" id="c-nombre-rol" aria-label="Nombre del rol" aria-describedby="input-c-nombre-rol" placeholder="Ingrese el nombre del rol" required>
                </div><!-- nombre del rol -->
                
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-estado-rol">Estado</label>
                    <select class="form-select" name="c-estado-rol" id="c-estado-rol" aria-label="Estado del rol"
                        aria-describedby="input-c-estado-rol" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="A">ACTIVO</option>
                        <option value="I">INACTIVO</option>
                    </select>
                </div><!-- estado del rol -->

                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-rol">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-rol" id="c-descripcion-rol"
                    aria-label="Descripción del rol" aria-describedby="input-c-descripcion-rol" placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del rol -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
