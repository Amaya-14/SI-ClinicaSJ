<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <div class="modal fade modals" id="createDireccion" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-teal">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-plus mr-2"></i>
                            Nueva Dirección
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <!-- persona -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="c-persona">Persona<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="c-persona" id="c-persona" aria-label="Personas"
                                    aria-describedby="input-c-persona" required>
                                    <option value="1" selected>Persona</option>
                                </select>
                            </div>
                            <!-- dirección de la persona -->
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="c-direccion-persona">Dirección<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="c-direccion-persona"
                                    id="c-direccion-persona" aria-label="Dirección de la persona"
                                    aria-describedby="input-c-direccion-persona" placeholder="Ingrese la dirección"
                                    required>
                            </div>
                            <!-- referencia de la persona-->
                            <div class="input-group">
                                <label class="input-group-text" for="c-referencia-persona">Referencia</label>
                                <textarea type="text" class="form-control" name="c-referencia-persona"
                                    id="c-referencia-persona" aria-label="Referencia"
                                    aria-describedby="input-c-referencia-persona"
                                    placeholder="Ingrese la referencia (Opcional)"></textarea>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button type="submit" theme="success" label="Guardar" />
                        <x-adminlte-button theme="danger" label="Cancelar" data-bs-dismiss="modal" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
