<div class="modal fade" id="viewCita" tabindex="-1" aria-labelledby="verCita" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" id="verCita">
                    <i class="fas fa-eye mr-2"></i>
                    Nuevo Cita
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                    title="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="ver_cita">
                    <fieldset class="grid--responsive" disabled>
                        <!-- doctor -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_doctor_cita">Doctor<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_doctor_cita" id="v_doctor_cita"
                                aria-label="Doctor de la cita" aria-describedby="input_v_doctor_cita" required>
                        </div>
                        <!-- paciente -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_paciente_cita">Paciente<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_paciente_cita" id="v_paciente_cita"
                                aria-label="Paciente de la cita" aria-describedby="input_v_paciente_cita" required>
                        </div>
                        <!-- estado de la cita -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_estado_cita">Estado<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_estado_cita" id="v_estado_cita"
                                aria-label="Estado de la cita" aria-describedby="input_v_estado_cita" required>
                        </div>
                        <!-- tipo de cita -->
                        <div class="input-group">
                            <label class="input-group-text" for="v_tipo_cita">Tipo<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="v_tipo_cita" id="v_tipo_cita"
                                aria-label="Tipo de cita" aria-describedby="input_v_tipo_cita" required>
                        </div>
                        <!-- fecha y hora iniciar de la cita -->
                        <div class="input-group">
                            <label class="input-group-text">Inicio<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="v_fecha_inicio_cita"
                                id="v_fecha_inicio_cita" aria-label="Fecha de Inicio la cita"
                                aria-describedby="input_v_fecha_inicio_cita" placeholder="Ingrese fecha de inicio"
                                required>
                            <!--  -->
                            <input type="time" class="form-control" name="v_hora_inicio_cita" id="v_hora_inicio_cita"
                                aria-label="Hora de Inicio de la ciat" aria-describedby="input_v_hora_inicio_cita"
                                placeholder="Ingrese hora de inicio" required>
                            <!--  -->
                        </div>
                        <!-- fecha y hora final de la cita -->
                        <div class="input-group">
                            <label class="input-group-text">Final<span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="v_fecha_final_cita" id="v_fecha_final_cita"
                                aria-label="Fecha final de la cita" aria-describedby="input_v_fecha_final_cita"
                                placeholder="Ingrese fecha de final" required>
                            <!--  -->
                            <input type="time" class="form-control" name="v_hora_final_cita" id="v_hora_final_cita"
                                aria-label="Hora final de la cita" aria-describedby="input_v_hora_final_cita"
                                placeholder="Ingrese hora de final" required>
                            <!--  -->
                        </div>
                        <!-- descripción -->
                        <div class="input-group grid--row__extend">
                            <label class="input-group-text" for="v_descripcion_cita">Descripción<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" name="v_descripcion_cita" id="v_descripcion_cita" aria-label="Descripción de la cita"
                                aria-describedby="input_v_descripcion_cita" placeholder="Ingrese la descripción"
                                required></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="habilitar-edicion">Editar</button>
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" form="ver_cita">Cerrar</button>
            </div>
        </div>
    </div>
</div>
