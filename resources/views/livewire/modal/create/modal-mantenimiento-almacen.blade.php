<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createRegistroAlmacen" title="Nuevo registro" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <section>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c-tipo-registro">Registro<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c-tipo-registro" id="c-tipo-registro"
                            aria-label="Estado del medicamento" aria-describedby="input-c-tipo-registro" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="1">Tipo de médicamento</option>
                            <option value="2">Unidades de presentación (Médicamento)</option>
                            <option value="3">Tipo de material</option>
                        </select>
                    </div>
                    <!-- tipo de registro -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c-nombre-registro">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c-nombre-registro" id="c-nombre-registro"
                            aria-label="Nombre del registro" aria-describedby="input-c-nombre-registro"
                            placeholder="Ingrese el nombre del registro" required>
                    </div>
                    <!-- nombre del registro -->
                    <div class="input-group">
                        <label class="input-group-text" for="c-descripcion-registro">Descripción</label>
                        <textarea class="form-control" name="c-descripcion-registro" id="c-descripcion-registro"
                            aria-label="Descripción del registro" aria-describedby="input-c-descripcion-registro"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div>
                    <!-- descripción del registro -->
                </section>
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
