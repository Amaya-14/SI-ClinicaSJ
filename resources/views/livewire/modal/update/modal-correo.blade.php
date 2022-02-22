<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updateCorreo" title="Actualizar Correo" theme="yellow" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="correo">Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo" aria-label="Correo"
                        aria-describedby="input-correo" placeholder="Ingrese su Correo" required>
                </div><!-- correo -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal><!-- -->
    </form>

</div>
