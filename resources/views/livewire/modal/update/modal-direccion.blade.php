<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')

        <x-adminlte-modal id="updateDireccion" title="Dirección" theme="purple" icon="fas fa-eye" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-persona">Persona<span class="text-danger">*</span></label>
                    <select class="form-select" name="u-persona" id="u-persona" aria-label="Personas"
                        aria-describedby="input-u-persona" required>
                        <option value="1" selected>Persona</option>
                    </select>
                </div><!-- persona -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="direccion">Dirección<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-label="Dirección"
                        aria-describedby="input-direccion" placeholder="Ingrese su dirección" required>
                </div><!-- dirección -->

                <div class="input-group">
                    <label class="input-group-text" for="referencia">Referencia</label>
                    <input type="text" class="form-control" name="referencia" id="referencia" aria-label="Referencia"
                        aria-describedby="input-referencia" placeholder="Ingrese la referencia (Opcional)">
                </div><!-- referencia -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button class="mr-1" type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
