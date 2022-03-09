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
                </div>
                <!-- persona -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-direccion-persona">Dirección<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="u-direccion-persona" id="u-direccion-persona"
                        aria-label="Dirección de la persona" aria-describedby="input-u-direccion-persona"
                        placeholder="Ingrese la dirección" required>
                </div>
                <!-- dirección de la persona -->
                <div class="input-group">
                    <label class="input-group-text" for="u-referencia-persona">Referencia</label>
                    <textarea type="text" class="form-control" name="u-referencia-persona" id="u-referencia-persona"
                        aria-label="Referencia" aria-describedby="input-u-referencia-persona"
                        placeholder="Ingrese la referencia (Opcional)"></textarea>
                </div>
                <!-- referencia de la persona-->
            </section>
            <!--  -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
            <!--  -->
        </x-adminlte-modal>
        <!--  -->
    </form>
    <!--  -->
</div>
