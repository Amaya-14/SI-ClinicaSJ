<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createInventarioMaterial" title="Nuevo inventario de material" theme="teal"
            icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-material">Material<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-material" id="c-material" aria-label="material"
                        aria-describedby="input-c-material" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">material 1</option>
                        <option value="2">material 2</option>
                    </select>
                </div>
                <!-- material -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-registro">Tipo registro<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-registro" id="c-tipo-registro"
                        aria-label="Tipo de registro" aria-describedby="input-c-tipo-registro" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="I">Entrada</option>
                        <option value="G">Salida</option>
                    </select>
                </div>
                <!-- tipo de registro -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-estado-material">Estado<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-estado-material" id="c-estado-material"
                        aria-label="Estado del material" aria-describedby="input-c-estado-material" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Estado 1</option>
                        <option value="2">Estado 2</option>
                    </select>
                </div>
                <!-- estado material -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-cantidad-material">Cantidad<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="c-cantidad-material" id="c-cantidad-material"
                        aria-label="Cantidad material" aria-describedby="input-c-cantidad-material" placeholder=""
                        required>
                </div>
                <!-- cantidad material -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-lote-material">Lote</label>
                    <input type="text" class="form-control" name="c-lote-material" id="c-lote-material"
                        aria-label="Lote material" aria-describedby="input-c-lote-material"
                        placeholder="Ingrese el lote (Opcional)">
                </div>
                <!-- lote material -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-fecha-vencimiento">Fecha vencimiento</label>
                    <input type="date" class="form-control" name="c-fecha-vencimiento" id="c-fecha-vencimiento"
                        aria-label="Fehca de vencimiento" aria-describedby="input-c-fecha-vencimiento">
                </div>
                <!-- fecha de vencimiento -->
                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-registro">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-registro" id="c-descripcion-registro"
                        aria-label="Descripción del registro" aria-describedby="input-c-descricpcion-registro"
                        placeholder="Descripción(Opcional)"></textarea>
                </div>
                <!-- descripción del registro -->
            </section>
            <!--  -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
            <!--  -->
        </x-adminlte-modal>
        <!--  -->
    </form>
    <!--  -->
</div>
