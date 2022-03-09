<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')

        <x-adminlte-modal id="updateTelefono" title="Teléfono" theme="purple" icon="fas fa-eye" v-centered
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
                    <label class="input-group-text" for="u-area-telefono-persona">Área<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="u-area-telefono-persona"
                        id="u-area-telefono-persona" aria-label="Área" aria-describedby="input-u-area-telefono-persona"
                        value="504" required>
                </div>
                <!-- número de área -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-numero-telefono-persona">Número<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="u-numero-telefono-persona"
                        id="u-numero-telefono-persona" aria-label="Número"
                        aria-describedby="input-u-numero-telefono-persona" placeholder="Ingrese su número" required>
                </div>
                <!-- número de télefono -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="u-tipo-telefono">Tipo teléfono<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="u-tipo-telefono" id="u-tipo-telefono"
                        aria-label="Tipo teléfono" aria-describedby="input-u-tipo-telefono" required>
                        <option selected disabled value="">Tipo teléfono...</option>
                        <option value="C">Celular</option>
                        <option value="F">Fijo</option>
                    </select>
                </div>
                <!-- tipo de teléfono -->
                <div class="input-group">
                    <label class="input-group-text" for="u-descripcion-telefono">Descripción</label>
                    <textarea type="text" class="form-control" name="u-descripcion-telefono"
                        id="u-descripcion-telefono" aria-label="Descripción" aria-describedby="input-descricpcion"
                        placeholder="Ingrese la descripción (Opcional)"></textarea>
                </div>
                <!-- descripcion del teléfono -->
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
