<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createMaterial" title="Nuevo Material" theme="teal" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-material">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-material" id="c-nombre-material" aria-label="Nombre del material" aria-describedby="input-c-nombre-material" placeholder="Ingrese el nombre del material" required>
                </div><!-- nombre del material -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-material">Tipo material<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-material" id="c-tipo-material" aria-label="Tipo de material"
                        aria-describedby="input-c-tipo-material" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                    </select>
                </div><!-- tipo de material -->

                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-material">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-material" id="c-descripcion-material"
                    aria-label="Descripción del material" aria-describedby="input-c-descricpcion-material"
                    placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripcion del material -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
