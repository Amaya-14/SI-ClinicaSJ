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
                </div>
                <!-- persona -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-direccion-persona">Dirección<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-direccion-persona" id="c-direccion-persona"
                        aria-label="Dirección de la persona" aria-describedby="input-c-direccion-persona"
                        placeholder="Ingrese la dirección" required>
                </div>
                <!-- dirección de la persona -->
                <div class="input-group">
                    <label class="input-group-text" for="c-referencia-persona">Referencia</label>
                    <textarea type="text" class="form-control" name="c-referencia-persona" id="c-referencia-persona"
                        aria-label="Referencia" aria-describedby="input-c-referencia-persona"
                        placeholder="Ingrese la referencia (Opcional)"></textarea>
                </div>
                <!-- referencia de la persona-->
            </section>
            <!--  -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
            <!--  -->
        </x-adminlte-modal>
        <!--  -->
    </form>
    <!--  -->
</div>
