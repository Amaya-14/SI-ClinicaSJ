<div>
    <form action""" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createRegistroAlmacen" title="Nueva Presentación de Médicamento" theme="teal"
            icon="fas fa-user-circle" v-centered static-backdrop scrollable>
            <section>
                <section>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c-tipo-registro">Registro<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c-tipo-registro" id="c-tipo-registro"
                            aria-label="Estado del medicamento" aria-describedby="input-c-tipo-registro" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="1">Tipo 1</option>
                            <option value="2">Tipo 2</option>
                        </select>
                    </div><!-- tipo de registro -->

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="c-nombre-presentacion">Nombre<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="c-nombre-presentacion" id="c-nombre-presentacion"
                            aria-label="Nombre del presentacion" aria-describedby="input-c-nombre-presentacion"
                            placeholder="Ingrese el nombre del presentacion" required>
                    </div><!-- nombre de la presentación -->

                    <div class="input-group">
                        <label class="input-group-text" for="c-descripcion-presentacion">Descripción</label>
                        <textarea class="form-control" name="c-descripcion-presentacion"
                            id="c-descripcion-presentacion" aria-label="Descripción del presentacion"
                            aria-describedby="input-c-descripcion-presentacion"
                            placeholder="Descripción(Opcional)"></textarea>
                    </div><!-- descripción de la presentación -->
                </section>
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
