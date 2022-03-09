<div>
    <form action"" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updatePresentacionMedicamento" title="Presentación de médicamento" theme="purple"
            icon="fas fa-eye" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-presentacion">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-presentacion" id="u-nombre-presentacion"
                        aria-label="Nombre del presentacion" aria-describedby="input-u-nombre-presentacion"
                        placeholder="Ingrese el nombre del presentacion" required>
                </div>
                <!-- nombre de la presentación -->
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-presentacion">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-presentacion" id="u-descripcion-presentacion"
                        aria-label="Descripción del presentacion" aria-describedby="input-u-descripcion-presentacion"
                        placeholder="Descripción(Opcional)"></textarea>
                </div>
                <!-- descripción de la presentación -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
