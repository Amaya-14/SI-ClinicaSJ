<div class="modal fade" id="updatePermiso" tabindex="-1" aria-labelledby="actualizarPermiso" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarPermiso">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Permiso
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('Los cambios','updatePermiso','actualizar_permiso', 'btn-actualizar-objeto')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_permiso">
                    {!! csrf_field() !!}
                    <!-- nombre del rol -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_rol_permiso">Rol<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_rol_permiso" id="u_rol_permiso"
                            aria-label="Nombre del rol" aria-describedby="input_u_rol_permiso"
                            placeholder="Ingrese el nombre del rol" required readonly>
                    </div>
                    <!-- nombre del objeto -->
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="u_objeto_permiso">Objeto<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="u_objeto_permiso" id="u_objeto_permiso"
                            aria-label="Nombre del objeto" aria-describedby="input_u_objeto_permiso"
                            placeholder="Ingrese el nombre del objeto" required readonly>
                    </div>
                    <!-- Permisos -->
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
                                            <input type="checkbox" class="form-check-input" name="u_visualizar"
                                                id="u_visualizar" aria-label="Checkbos visualizar pantalla"
                                                aria-describedby="input_u_visualizar" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="u_consultar"
                                                id="u_consultar" aria-label="Checkbos consultar pantalla"
                                                aria-describedby="input_u_consultar" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="u_insertar"
                                                id="u_insertar" aria-label="Checkbos crear pantalla"
                                                aria-describedby="input_u_insertar" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="u_actualizar"
                                                id="u_actualizar" aria-label="Checkbos actualizar pantalla"
                                                aria-describedby="input_u_actualizar" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="u_eliminar"
                                                id="u_eliminar" aria-label="Checkbos eliminar pantalla"
                                                aria-describedby="input_u_eliminar" value="1">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--  -->
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar-permiso">Actualizar</button>
                <button class="btn btn-danger"
                    onclick="cerrarModal('Los cambios','updatePermiso','actualizar_permiso', 'btn-actualizar-permiso')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
