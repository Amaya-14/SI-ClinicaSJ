<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateEstadoCita" title="Estado de cita" theme="purple" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-estado-cita">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-estado-cita" id="u-nombre-estado-cita"
                        aria-label="Nombre del estado-cita" aria-describedby="input-u-nombre-estado-cita"
                        placeholder="Ingrese el nombre del estado de cita" required>
                </div><!-- nombre de la presentación -->

                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-estado-cita">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-estado-cita" id="u-descripcion-estado-cita"
                        aria-label="Descripción del estado de cita" aria-describedby="input-u-descripcion-estado-cita"
                        placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción de la presentación -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
