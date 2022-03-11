<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createCajaRegistradora" title="Nueva Caja Registradora" theme="teal" icon="fas fa-plus"
            v-centered static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="c-nombre-caja-registradora">Nombre<span
                            class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="c-nombre-caja-registradora"
                        id="c-nombre-caja-registradora" aria-label="Nombre de caja"
                        aria-describedby="input-c-nombre-caja-registradora" placeholder="Nombre de la caja" required>
                </div>
                <!-- nombre de la caja -->
                <div class="input-group">
                    <label class="input-group-text" for="c-descripcion-caja-registradora">Cantidad<span
                            class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="c-descripcion-caja-registradora"
                        id="c-descripcion-caja-registradora" aria-label="Descripción de la caja"
                        aria-describedby="input-c-descripcion-caja-registradora"
                        placeholder="Descripción (Opcional)"></textarea>
                </div>
                <!-- descripción de la caja -->
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
