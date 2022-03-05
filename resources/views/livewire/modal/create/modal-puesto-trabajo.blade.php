<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createPuestoTrabajo" title="Nuevo puesto de trabajo" theme="teal" icon="fas fa-plus"
            v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-puesto-trabajo">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-puesto-trabajo"
                        id="c-nombre-puesto-trabajo" aria-label="Nombre del puesto trabajo"
                        aria-describedby="input-c-nombre-puesto-trabajo"
                        placeholder="Ingrese el nombre del puesto detrabajo" required>
                </div><!-- nombre del puesto de trabajo -->

                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-puesto-trabajo">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-puesto-trabajo"
                        id="c-descripcion-puesto-trabajo" aria-label="Descripción del puesto trabajo"
                        aria-describedby="input-c-descripcion-puesto-trabajo"
                        placeholder="Ingrese la descripción (Opcional)"></textarea>
                </div><!-- descripción del puesto de trabajo -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
