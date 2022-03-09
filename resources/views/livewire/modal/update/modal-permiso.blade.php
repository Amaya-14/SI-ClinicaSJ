<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <x-adminlte-modal id="updatePermiso" title="Permisos" theme="purple" icon="fas fa-eye" v-centered
            static-backdrop scrollable>
            <section>
                <div class="input-group mb-4">
                    <label class="input-group-text" for="u-nombre-pantalla">Estado</label>
                    <select class="form-select" name="u-nombre-pantalla" id="u-nombre-pantalla"
                        aria-label="Nombre de la pantalla" aria-describedby="input-u-nombre-pantalla" required>
                        <option value="1">Pacientes</option>
                    </select>
                </div>
                <!-- nombre de la pantalla -->
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">Visualizar</th>
                                <th scope="col">Consultar</th>
                                <th scope="col">Crear</th>
                                <th scope="col">Actualizar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="u-visualizar"
                                            id="u-visualizar" aria-label="Checkbos visualizar pantalla"
                                            aria-describedby="input-u-visualizar" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="u-consultar"
                                            id="u-consultar" aria-label="Checkbos consultar pantalla"
                                            aria-describedby="input-u-consultar" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="u-crear" id="u-crear"
                                            aria-label="Checkbos crear pantalla" aria-describedby="input-u-crear"
                                            value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="u-actualizar"
                                            id="u-actualizar" aria-label="Checkbos actualizar pantalla"
                                            aria-describedby="input-u-actualizar" value="1">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="u-eliminar"
                                            id="u-eliminar" aria-label="Checkbos eliminar pantalla"
                                            aria-describedby="input-u-eliminar" value="1">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--  -->
                </div>
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="button" theme="warning" label="Editar" />
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal>
    </form>
</div>
