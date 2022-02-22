<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')

        <x-adminlte-modal id="updateTelefono" title="Actualizar Teléfono" theme="yellow" icon="fas fa-plus" v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="area">Área</label>
                    <input type="number" class="form-control" name="area" id="area" aria-label="Área"
                        aria-describedby="input-area" value="504" required>
                </div><!-- numero area -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="numero">Número</label>
                    <input type="number" class="form-control" name="numero" id="numero" aria-label="Número"
                        aria-describedby="input-numero" placeholder="Ingrese su número" required>
                </div><!-- télefono -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="tipo-telefono">Tipo teléfono</label>
                    <select class="form-select" name="tipo-telefono" id="tipo-telefono" aria-label="Tipo teléfono"
                        aria-describedby="input-tipo-telefono" required>
                        <option selected disabled value="">Tipo teléfono...</option>
                        <option value="C">Celular</option>
                        <option value="F">Fijo</option>
                    </select>
                </div><!-- tipo teléfono -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="descripcion">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                        aria-label="Descripción" aria-describedby="input-descricpcion"
                        placeholder="Descripción(Opcional)">
                </div><!-- descripcion -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
