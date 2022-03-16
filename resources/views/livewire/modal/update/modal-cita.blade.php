<div>
    <form id="form-u-1" action="" method="post">
        {!! csrf_field() !!}
        @method('put')
        <div class="modal fade" id="updateCita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <h4 class="modal-title" id="staticBackdropLabel">
                            <i class="fas fa-eye mr-2"></i>
                            Cita
                        </h4>
                        <button type="button" class="btn-close" id="cerrar-modal" title="Cerrar"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="grid--responsive" id="inputs-u-1" disabled>
                            <div class="input-group">
                                <label class="input-group-text" for="u-doctor-cita">Doctor<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-doctor-cita" id="u-doctor-cita"
                                    aria-label="Doctor de la cita" aria-describedby="input-u-doctor-cita" required>
                                    <option disabled value="">Seleccione doctor...</option>
                                    <option value="1" selected>doctor 1</option>
                                    <option value="2">doctor 2</option>
                                </select>
                            </div>
                            <!-- Doctor -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-paciente-cita">Paciente<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-paciente-cita" id="u-paciente-cita"
                                    aria-label="Paciente de la cita" aria-describedby="input-u-paciente-cita" required>
                                    <option selected disabled value="">Seleccione paciente...</option>
                                    <option value="1">paciente 1</option>
                                    <option value="2">paciente 2</option>
                                </select>
                            </div>
                            <!-- Paciente -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-estado-cita">Estado<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-estado-cita" id="u-estado-cita"
                                    aria-label="Estado de la cita" aria-describedby="input-u-estado-cita" required>
                                    <option selected disabled value="">Seleccione estado...</option>
                                    <option value="H">estado 1</option>
                                    <option value="M">estado 2</option>
                                </select>
                            </div>
                            <!-- Estado -->
                            <div class="input-group">
                                <label class="input-group-text" for="u-tipo-cita">Tipo<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" name="u-tipo-cita" id="u-tipo-cita"
                                    aria-label="Tipo de cita" aria-describedby="input-u-tipo-cita" required>
                                    <option selected disabled value="">Seleccione tipo...</option>
                                    <option value="H">tipo 1</option>
                                    <option value="M">tipo 2</option>
                                </select>
                            </div>
                            <!-- Tipo -->
                            <div class="input-group">
                                <label class="input-group-text">Inicio<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="u-fecha-inicio-cita"
                                    id="u-fecha-inicio-cita" aria-label="Fecha de Inicio la cita"
                                    aria-describedby="input-u-fecha-inicio-cita" placeholder="Ingrese fecha de inicio"
                                    required>
                                <!--  -->
                                <input type="time" class="form-control" name="u-hora-inicio-cita"
                                    id="u-hora-inicio-cita" aria-label="Hora de Inicio de la ciat"
                                    aria-describedby="input-u-hora-inicio-cita" placeholder="Ingrese hora de inicio"
                                    required>
                                <!--  -->
                            </div>
                            <!-- Inicio -->
                            <div class="input-group">
                                <label class="input-group-text">Final<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="u-fecha-final-cita"
                                    id="u-fecha-final-cita" aria-label="Fecha final de la cita"
                                    aria-describedby="input-u-fecha-final-cita" placeholder="Ingrese fecha de final"
                                    required>
                                <!--  -->
                                <input type="time" class="form-control" name="u-hora-final-cita"
                                    id="u-hora-final-cita" aria-label="Hora final de la cita"
                                    aria-describedby="input-u-hora-final-cita" placeholder="Ingrese hora de final"
                                    required>
                                <!--  -->
                            </div>
                            <!-- Final -->
                            <div class="input-group grid--row__extend">
                                <label class="input-group-text" for="u-descripcion-cita">Descripción</label>
                                <textarea class="form-control" name="u-descripcion-cita" id="u-descripcion-cita"
                                    aria-label="Descripción de la cia" aria-describedby="input-u-descripcion-cita"
                                    placeholder="Ingrese la descripción (Opcional)" required></textarea>
                            </div>
                            <!-- descripción -->
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <x-adminlte-button class="btn-editar" type="button" theme="warning" label="Editar"
                            id="editar-1" />
                        <x-adminlte-button class="ml-1 btn-hidden d-none" type="submit" theme="success" label="Guardar"
                            id="actualizar-1" />
                        <x-adminlte-button class="ml-1 btn-cancelar btn-hidden d-none" type="reset" theme="danger"
                            label="Cancelar" id="cancelar-1" />
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
    </form>
    <!-- -->
</div>
