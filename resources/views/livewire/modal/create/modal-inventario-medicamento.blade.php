<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createInventarioMedicamento" title="Nuevo registro (Medicamento)" theme="teal" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-registro">Tipo registro<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-registro" id="c-tipo-registro" aria-label="Tipo de registro"
                        aria-describedby="input-c-tipo-registro" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="I">Entrada</option>
                        <option value="G">Salida</option>
                    </select>
                </div><!-- tipo de registro -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-estado-medicamento">Estado<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-estado-medicamento" id="c-estado-medicamento" aria-label="Estado del medicamento" aria-describedby="input-c-estado-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Estado 1</option>
                        <option value="2">Estado 2</option>
                    </select>
                </div><!-- estado medicamento -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-medicamento">Medicamento<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-medicamento" id="c-medicamento" aria-label="Medicamento"
                        aria-describedby="input-c-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Medicamento 1</option>
                        <option value="2">Medicamento 2</option>
                    </select>
                </div><!-- medicamento -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-cantidad-medicamento">Cantidad<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="c-cantidad-medicamento" id="c-cantidad-medicamento" aria-label="Cantidad medicamento" aria-describedby="input-c-cantidad-medicamento" placeholder="" required>
                </div><!-- cantidad medicamento -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-lote-medicamento">Lote</label>
                    <input type="text" class="form-control" name="c-lote-medicamento" id="c-lote-medicamento" aria-label="Lote medicamento" aria-describedby="input-c-lote-medicamento" placeholder="Ingrese el lote" required>
                </div><!-- lote medicamento -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-fecha-vencimiento">Fecha vencimiento<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="c-fecha-vencimiento" id="c-fecha-vencimiento"
                        aria-label="Fehca de vencimiento" aria-describedby="input-c-fecha-vencimiento" required>
                </div><!-- fecha de vencimiento -->

                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-registro">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-registro" id="c-descripcion-registro"
                    aria-label="Descripción del registro" aria-describedby="input-c-descricpcion-registro" placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del registro -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
