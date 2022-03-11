<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createAperturaCierre" title="Nuevo Registro" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-fecha-registro">Fecha<span
                            class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="c-fecha-registro" id="c-fecha-registro"
                        aria-label="Fecha de registro" aria-describedby="input-c-fecha-registro" required>
                </div>
                <!-- fecha de registro -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-registro">Tipo registro<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-registro" id="c-tipo-registro"
                        aria-label="Tipo de registro" aria-describedby="input-c-tipo-registro" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">APERTURA</option>
                        <option value="2">CIERRE</option>
                    </select>
                </div>
                <!-- tipo de registro -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-usuario-registro">Usuario<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-usuario-registro" id="c-usuario-registro"
                        aria-label="Uusario de registro" aria-describedby="input-c-usuario-registro" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1" selected>Usuario 1</option>
                        <option value="2">Usuario 2</option>
                    </select>
                </div>
                <!-- usuario -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-caja-registro">Caja<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-caja-registro" id="c-caja-registro"
                        aria-label="caja de registro" aria-describedby="input-c-caja-registro" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Caja 1</option>
                        <option value="2">Caja 2</option>
                    </select>
                </div>
                <!-- caja de registro -->
                <div class="input-group">
                    <label class="input-group-text" for="c-cantidad-registro">Cantidad<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="c-cantidad-registro" id="c-cantidad-registro"
                        aria-label="Cantidad de registro" aria-describedby="input-c-cantidad-registro" required>
                </div>
                <!-- cantidad de registro -->
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
