<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createObjeto" title="Nuevo Objeto" theme="teal" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-objeto">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-objeto" id="c-nombre-objeto" aria-label="Nombre del objeto" aria-describedby="input-c-nombre-objeto" placeholder="Ingrese el nombre del objeto" required>
                </div><!-- nombre del objeto -->

                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-objeto">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-objeto" id="c-descripcion-objeto"
                    aria-label="Descripción del rol" aria-describedby="input-c-descripcion-objeto" placeholder="Descripción(Opcional)"></textarea>
                </div><!-- descripción del objeto -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
