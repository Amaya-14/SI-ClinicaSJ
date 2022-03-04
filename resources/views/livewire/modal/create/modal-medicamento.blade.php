<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createMedicamento" title="Nuevo Medicamento" theme="teal" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-medicamento">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-medicamento" id="c-nombre-medicamento" aria-label="Nombre del medicamento" aria-describedby="input-c-nombre-medicamento" placeholder="Nombre del medicamento" required>
                </div><!-- nombre del medicamento -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-presentacion-medicamento">Presentación<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-presentacion-medicamento" id="c-tipo-presentacion-medicamento" aria-label="Presentación del medicamento" aria-describedby="input-c-tipo-presentacion-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Presentación 1</option>
                        <option value="2">Presentación 2</option>
                    </select>
                </div><!-- presentación del medicamento-->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-medicamento">Tipo medicamento<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-medicamento" id="c-tipo-medicamento" aria-label="Tipo de medicamento" aria-describedby="input-c-tipo-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                    </select>
                </div><!-- tipo de medicamento -->

                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-medicamento">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-medicamento" id="c-descripcion-medicamento"
                    aria-label="Descripción del medicamento" aria-describedby="input-c-descricpcion-medicamento" placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del medicamento -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
