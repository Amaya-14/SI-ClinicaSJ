<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="selectRespaldo" title="Respaldo" theme="purple" icon="fas fa-eye" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-fecha-respaldo">Fecha respaldo</label>
                    <input type="date" class="form-control" name="s-fecha-respaldo" id="s-fecha-respaldo"
                        aria-label="Fehca de respaldo" aria-describedby="input-s-fecha-respaldo" readonly>
                </div>
                <!-- fecha de respaldo -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="s-usuario-respaldo">Usuario</label>
                    <input type="text" class="form-control" name="s-usuario-respaldo" id="s-usuario-respaldo"
                        aria-label="Usuario" aria-describedby="input-s-usuario-respaldo" readonly>
                </div>
                <!-- usuario -->
                <div class="input-group">
                    <label class="input-group-text" for="s-descripcion-respaldo">Descripción</label>
                    <textarea class="form-control" name="s-descripcion-respaldo" id="s-descripcion-respaldo"
                        aria-label="Motivo del respaldo" aria-describedby="input-s-descripcion-respaldo"
                        placeholder="Motivo del respaldo" readonly></textarea>
                </div>
                <!-- descripción del respaldo -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
