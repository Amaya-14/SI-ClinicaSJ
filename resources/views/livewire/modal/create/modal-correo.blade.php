<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createCorreo" title="Nuevo Correo" theme="teal" icon="fas fa-plus" v-centered
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
                <div class="input-group">
                    <label class="input-group-text" for="c-correo-persona">Correo<span
                            class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="c-correo-persona" id="c-correo-persona"
                        aria-label="Correo de la persona" aria-describedby="input-c-correo-persona"
                        placeholder="example@example.com" required>
                </div>
                <!-- correo de la persona -->
            </section>
            <!--  -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
        <!-- -->
    </form>
    <!-- -->
</div>
