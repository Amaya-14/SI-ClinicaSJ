<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateMedicamento" title="Actualizar Medicamento" theme="purple" icon="fas fa-eye" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-medicamento">Nombre</label>
                    <input type="text" class="form-control" name="u-nombre-medicamento" id="u-nombre-medicamento" aria-label="Nombre del medicamento" aria-describedby="input-u-nombre-medicamento" placeholder="Nombre del medicamento" required>
                </div><!-- nombre del medicamento -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-tipo-presentacion-medicamento">Presentación</label>
                    <select class="form-select" name="u-tipo-presentacion-medicamento" id="u-tipo-presentacion-medicamento" aria-label="Presentación del medicamento" aria-describedby="input-u-tipo-presentacion-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Presentación 1</option>
                        <option value="2">Presentación 2</option>
                    </select>
                </div><!-- presentación del medicamento-->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-tipo-medicamento">Tipo medicamento</label>
                    <select class="form-select" name="u-tipo-medicamento" id="u-tipo-medicamento" aria-label="Tipo de medicamento" aria-describedby="input-u-tipo-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                    </select>
                </div><!-- tipo de medicamento -->

                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-medicamento">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-medicamento" id="u-descripcion-medicamento"
                    aria-label="Descripción del medicamento" aria-describedby="input-u-descricpcion-medicamento" placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del medicamento -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
