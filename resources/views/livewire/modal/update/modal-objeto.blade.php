<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateObjeto" title="Objeto" theme="purple" icon="fas fa-eye" v-centered static-backdrop
            scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-objeto">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-objeto" id="u-nombre-objeto"
                        aria-label="Nombre del objeto" aria-describedby="input-u-nombre-objeto"
                        placeholder="Ingrese el nombre del objeto" required>
                </div>
                <!-- nombre del objeto -->
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-objeto">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-objeto" id="u-descripcion-objeto"
                        aria-label="Descripción del rol" aria-describedby="input-u-descripcion-objeto"
                        placeholder="Descripción(Opcional)"></textarea>
                </div>
                <!-- descripción del objeto -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
