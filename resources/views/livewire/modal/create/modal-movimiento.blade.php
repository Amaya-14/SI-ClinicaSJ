<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createMovimiento" title="Nuevo movimiento" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-fecha-movimiento">Fecha<span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="c-fecha-movimiento" id="c-fecha-movimiento"
                        aria-label="Fecha de movimiento" aria-describedby="input-c-fecha-movimiento" required>
                </div>
                <!-- fecha de movimiento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-movimiento">Tipo movimiento<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-movimiento" id="c-tipo-movimiento"
                        aria-label="Tipo de movimiento" aria-describedby="input-c-tipo-movimiento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">ENTRADA</option>
                        <option value="2">SALIDA</option>
                    </select>
                </div>
                <!-- tipo de movimiento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-usuario-movimiento">Usuario<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-usuario-movimiento" id="c-usuario-movimiento"
                        aria-label="Uusario de movimiento" aria-describedby="input-c-usuario-movimiento" required>
                        <option value="1" selected>Usuario 1</option>
                        <option value="2">Usuario 2</option>
                    </select>
                </div>
                <!-- usuario movimiento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-caja-movimiento">Caja<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-caja-movimiento" id="c-caja-movimiento"
                        aria-label="caja de movimiento" aria-describedby="input-c-caja-movimiento" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Caja 1</option>
                        <option value="2">Caja 2</option>
                    </select>
                </div>
                <!-- caja de movimiento -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-cantidad-movimiento">Cantidad<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="c-cantidad-movimiento" id="c-cantidad-movimiento"
                        aria-label="Cantidad de movimiento" aria-describedby="input-c-cantidad-movimiento"
                        placeholder="Ingrese la cantidad" required>
                </div>
                <!-- cantidad de movimiento -->
                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-movimiento">Descripción<span
                            class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="c-descripcion-movimiento"
                        id="c-descripcion-movimiento" aria-label="Descripción del movimiento"
                        aria-describedby="input-c-descripcion-movimiento" placeholder="Ingrese una descripción"
                        required></textarea>
                </div>
                <!-- descripción de la caja -->
            </section>
            <!--  -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
        <!-- -->
    </form>
    <!-- -->
</div>
