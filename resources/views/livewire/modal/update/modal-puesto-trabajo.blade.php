<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updatePuestoTrabajo" title="Puesto de trabajo" theme="purple" icon="fas fa-eye"
            v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-nombre-puesto-trabajo">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-nombre-puesto-trabajo"
                        id="u-nombre-puesto-trabajo" aria-label="Nombre del puesto trabajo"
                        aria-describedby="input-u-nombre-puesto-trabajo"
                        placeholder="Ingrese el nombre del puesto detrabajo" required>
                </div><!-- nombre del puesto de trabajo -->

                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-puesto-trabajo">Descripción</label>
                    <textarea class="form-control" name="u-descripcion-puesto-trabajo"
                        id="u-descripcion-puesto-trabajo" aria-label="Descripción del puesto trabajo"
                        aria-describedby="input-u-descripcion-puesto-trabajo"
                        placeholder="Ingrese la descripción (Opcional)"></textarea>
                </div><!-- descripción del puesto de trabajo -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
