<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateTipoCita" title="Tipo de cita" theme="purple" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-cita">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-cita" id="u-nombre-cita"
                        aria-label="Nombre del cita" aria-describedby="input-u-nombre-cita"
                        placeholder="Ingrese el nombre del tipo de cita" required>
                </div><!-- nombre de la presentación -->

                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-cita">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-cita" id="u-descripcion-cita"
                        aria-label="Descripción del tipo de cita" aria-describedby="input-u-descripcion-cita"
                        placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción de la presentación -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
