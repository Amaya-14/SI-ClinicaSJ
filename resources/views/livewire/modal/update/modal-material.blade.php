<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateMaterial" title="Material" theme="purple" icon="fas fa-eye" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-material">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-material" id="u-nombre-material"
                        aria-label="Nombre del material" aria-describedby="input-u-nombre-material"
                        placeholder="Ingrese el nombre del material" required>
                </div>
                <!-- nombre del material -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-tipo-material">Tipo material<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="u-tipo-material" id="u-tipo-material"
                        aria-label="Tipo de material" aria-describedby="input-u-tipo-material" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                    </select>
                </div>
                <!-- tipo de material -->
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-material">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-material" id="u-descripcion-material"
                        aria-label="Descripción del material" aria-describedby="input-u-descricpcion-material"
                        placeholder="Descripción(Opcional)"></textarea>
                </div>
                <!-- descripcion del material -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
