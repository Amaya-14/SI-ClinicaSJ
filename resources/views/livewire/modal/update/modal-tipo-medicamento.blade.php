<div>
    <form action"" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateTipoMedicamento" title="Tipo de Médicamento" theme="purple"
            icon="fas fa-eye" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-tipo-medicamento">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-tipo-medicamento"
                        id="u-nombre-tipo-medicamento" aria-label="Nombre del tipo de medicamento"
                        aria-describedby="input-u-nombre-tipo-medicamento"
                        placeholder="Ingrese el nombre del tipo de medicamento" required>
                </div><!-- nombre del tipo de médicamento -->

                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-tipo-medicamento">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-tipo-medicamento"
                        id="u-descripcion-tipo-medicamento" aria-label="Descripción del tipo medicamento"
                        aria-describedby="input-u-descripcion-presentacion"
                        placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del tipo de médicamento -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
