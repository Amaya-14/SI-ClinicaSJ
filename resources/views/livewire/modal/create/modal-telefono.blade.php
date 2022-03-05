<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createTelefono" title="Nuevo Teléfono" theme="teal" icon="fas fa-plus" v-centered
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
                    <label class="input-group-text" for="area">Área<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="area" id="area" aria-label="Área"
                        aria-describedby="input-area" value="504" required>
                </div><!-- numero area -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="numero">Número<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="numero" id="numero" aria-label="Número"
                        aria-describedby="input-numero" placeholder="Ingrese su número" required>
                </div><!-- télefono -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="tipo-telefono">Tipo teléfono<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="tipo-telefono" id="tipo-telefono" aria-label="Tipo teléfono"
                        aria-describedby="input-tipo-telefono" required>
                        <option selected disabled value="">Tipo teléfono...</option>
                        <option value="C">Celular</option>
                        <option value="F">Fijo</option>
                    </select>
                </div><!-- tipo teléfono -->

                <div class="input-group">
                    <label class="input-group-text" for="descripcion">Descripción</label>
                    <textarea type="text" class="form-control" name="descripcion" id="descripcion"
                        aria-label="Descripción" aria-describedby="input-descricpcion"
                        placeholder="Ingrese la descripción (Opcional)"></textarea>
                </div><!-- descripcion -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
