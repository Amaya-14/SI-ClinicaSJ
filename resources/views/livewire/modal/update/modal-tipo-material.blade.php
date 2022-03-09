<div>
    <form action"" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateTipoMaterial" title="Tipo de material" theme="purple" icon="fas fa-eye" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-tipo-material">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-tipo-material" id="u-nombre-tipo-material"
                        aria-label="Nombre del tipo de material" aria-describedby="input-u-nombre-tipo-material"
                        placeholder="Ingrese el nombre del tipo de material" required>
                </div>
                <!-- nombre del tipo de médicamento -->
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-tipo-material">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-tipo-material" id="u-descripcion-tipo-material"
                        aria-label="Descripción del tipo material" aria-describedby="input-u-descripcion-presentacion"
                        placeholder="Descripción(Opcional)"></textarea>
                </div>
                <!-- descripción del tipo de médicamento -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
