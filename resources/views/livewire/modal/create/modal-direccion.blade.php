<div>
    <form action="" method="post">
        {!! csrf_field() !!}

        <x-adminlte-modal id="createDireccion" title="Nueva Dirección" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-persona">Persona<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-persona" id="c-persona" aria-label="Personas"
                        aria-describedby="input-c-persona" required>
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
                    <textarea type="text" class="form-control" name="referencia" id="referencia"
                        aria-label="Referencia" aria-describedby="input-referencia"
                        placeholder="Ingrese la referencia (Opcional)"></textarea>
                </div><!-- referencia -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
