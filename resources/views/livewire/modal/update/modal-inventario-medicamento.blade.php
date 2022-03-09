<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateInventarioMedicamento" title="Inventario de médicamento" theme="purple" icon="fas fa-eye"
            v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-medicamento">Medicamento<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="u-medicamento" id="u-medicamento" aria-label="Medicamento"
                        aria-describedby="input-u-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Medicamento 1</option>
                        <option value="2">Medicamento 2</option>
                    </select>
                </div>
                <!-- medicamento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-tipo-registro">Tipo registro<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="u-tipo-registro" id="u-tipo-registro"
                        aria-label="Tipo de registro" aria-describedby="input-u-tipo-registro" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="I">Entrada</option>
                        <option value="G">Salida</option>
                    </select>
                </div>
                <!-- tipo de registro -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-estado-medicamento">Estado<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="u-estado-medicamento" id="u-estado-medicamento"
                        aria-label="Estado del medicamento" aria-describedby="input-u-estado-medicamento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Estado 1</option>
                        <option value="2">Estado 2</option>
                    </select>
                </div>
                <!-- estado medicamento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-cantidad-medicamento">Cantidad<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="u-cantidad-medicamento"
                        id="u-cantidad-medicamento" aria-label="Cantidad medicamento"
                        aria-describedby="input-u-cantidad-medicamento" placeholder="" required>
                </div>
                <!-- cantidad medicamento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-lote-medicamento">Lote</label>
                    <input type="text" class="form-control" name="u-lote-medicamento" id="u-lote-medicamento"
                        aria-label="Lote medicamento" aria-describedby="input-u-lote-medicamento"
                        placeholder="Ingrese el lote" required>
                </div>
                <!-- lote medicamento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-fecha-vencimiento">Fecha vencimiento<span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="u-fecha-vencimiento" id="u-fecha-vencimiento"
                        aria-label="Fehca de vencimiento" aria-describedby="input-u-fecha-vencimiento" required>
                </div>
                <!-- fecha de vencimiento -->
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-registro">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-registro" id="u-descripcion-registro"
                        aria-label="Descripción del registro" aria-describedby="input-u-descricpcion-registro"
                        placeholder="Descripción(Opcional)"></textarea>
                </div>
                <!-- descripción del registro -->
                </sction>
                <!--  -->
                <x-slot name="footerSlot">
                    <x-adminlte-button type="button" theme="warning" label="Editar" />
                    <x-adminlte-button type="submit" theme="success" label="Guardar" />
                    <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
                </x-slot>
                <!--  -->
        </x-adminlte-modal>
        <!--  -->
    </form>
    <!--  -->
</div>
