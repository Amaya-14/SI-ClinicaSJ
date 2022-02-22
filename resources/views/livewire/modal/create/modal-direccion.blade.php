<div>
    <form action="" method="post">
        {!! csrf_field() !!}

        <x-adminlte-modal id="createDireccion" title="Nueva Dirección" theme="teal" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-label="Dirección"
                        aria-describedby="input-direccion" placeholder="Ingrese su dirección" required>
                </div><!-- dirección -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="referencia">Referencia</label>
                    <input type="text" class="form-control" name="referencia" id="referencia" aria-label="Referencia"
                        aria-describedby="input-referencia" placeholder="Referencia">
                </div><!-- referencia -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
