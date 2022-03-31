<div class="modal fade" id="updateCita" tabindex="-1" aria-labelledby="actualizarCita" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h4 class="modal-title" id="actualizarCita">
                    <i class="fas fa-edit mr-2"></i>
                    Actualizar Cita
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('updateCita','actualizar_cita')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="actualizar_cita">
                    {!! csrf_field() !!}
                    <!-- doctor -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_doctor_cita">Doctor<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_doctor_cita" id="u_doctor_cita"
                            aria-label="Doctor de la cita" aria-describedby="input_u_doctor_cita" required>
                            <option selected disabled value="">Seleccione doctor...</option>
                            @foreach ($dataDoctores as $doctor)
                                <option value="{{ $doctor['codigoDoctor'] }}">{{ $doctor['nombreDoctor'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- paciente -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_paciente_cita">Paciente<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_paciente_cita" id="u_paciente_cita"
                            aria-label="Paciente de la cita" aria-describedby="input_u_paciente_cita" required>
                            <option selected disabled value="">Seleccione paciente...</option>
                            @foreach ($dataPacientes as $paciente)
                                <option value="{{ $paciente['codigoPaciente'] }}">{{ $paciente['nombrePaciente'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- estado de la cita -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_estado_cita">Estado<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_estado_cita" id="u_estado_cita"
                            aria-label="Estado de la cita" aria-describedby="input_u_estado_cita" required>
                            <option selected disabled value="">Seleccione estado...</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->codigoEstado }}">{{ $estado->estadoCita }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- tipo de cita -->
                    <div class="input-group">
                        <label class="input-group-text" for="u_tipo_cita">Tipo<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="u_tipo_cita" id="u_tipo_cita" aria-label="Tipo de cita"
                            aria-describedby="input_u_tipo_cita" required>
                            <option selected disabled value="">Seleccione tipo...</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->codigoTipo }}">{{ $tipo->tipoCita }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- fecha y hora iniciar de la cita -->
                    <div class="input-group">
                        <label class="input-group-text">Inicio<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="u_fecha_inicio_cita" id="u_fecha_inicio_cita"
                            aria-label="Fecha de Inicio la cita" aria-describedby="input_u_fecha_inicio_cita"
                            placeholder="Ingrese fecha de inicio" required>
                        <!--  -->
                        <input type="time" class="form-control" name="u_hora_inicio_cita" id="u_hora_inicio_cita"
                            aria-label="Hora de Inicio de la ciat" aria-describedby="input_u_hora_inicio_cita"
                            placeholder="Ingrese hora de inicio" required>
                        <!--  -->
                    </div>
                    <!-- fecha y hora final de la cita -->
                    <div class="input-group">
                        <label class="input-group-text">Final<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="u_fecha_final_cita" id="u_fecha_final_cita"
                            aria-label="Fecha final de la cita" aria-describedby="input_u_fecha_final_cita"
                            placeholder="Ingrese fecha de final" required>
                        <!--  -->
                        <input type="time" class="form-control" name="u_hora_final_cita" id="u_hora_final_cita"
                            aria-label="Hora final de la cita" aria-describedby="input_u_hora_final_cita"
                            placeholder="Ingrese hora de final" required>
                        <!--  -->
                    </div>
                    <!-- descripción -->
                    <div class="input-group grid--row__extend">
                        <label class="input-group-text" for="u_descripcion_cita">Descripción<span
                                class="text-danger">*</span></label>
                        <textarea class="form-control" name="u_descripcion_cita" id="u_descripcion_cita" aria-label="Descripción de la cia"
                            aria-describedby="input_u_descripcion_cita" placeholder="Ingrese la descripción"
                            required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
                <button class="btn btn-danger" onclick="cerrarModal('updateCita','actualizar_cita')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
