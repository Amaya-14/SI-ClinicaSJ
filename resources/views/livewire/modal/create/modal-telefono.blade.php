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
                </div>
                <!-- persona -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-area-telefono-persona">Área<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="c-area-telefono-persona"
                        id="c-area-telefono-persona" aria-label="Área" aria-describedby="input-c-area-telefono-persona"
                        value="504" required>
                </div>
                <!-- número de área -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-numero-telefono-persona">Número<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="c-numero-telefono-persona"
                        id="c-numero-telefono-persona" aria-label="Número"
                        aria-describedby="input-c-numero-telefono-persona" placeholder="Ingrese su número" required>
                </div>
                <!-- número de télefono -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-tipo-telefono">Tipo teléfono<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-telefono" id="c-tipo-telefono"
                        aria-label="Tipo teléfono" aria-describedby="input-c-tipo-telefono" required>
                        <option selected disabled value="">Tipo teléfono...</option>
                        <option value="C">Celular</option>
                        <option value="F">Fijo</option>
                    </select>
                </div>
                <!-- tipo de teléfono -->
                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-telefono">Descripción</label>
                    <textarea type="text" class="form-control" name="c-descripcion-telefono"
                        id="c-descripcion-telefono" aria-label="Descripción" aria-describedby="input-descricpcion"
                        placeholder="Ingrese la descripción (Opcional)"></textarea>
                </div>
                <!-- descripcion del teléfono -->
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
