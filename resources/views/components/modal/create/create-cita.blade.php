<div class="modal fade" id="createCita" tabindex="-1" aria-labelledby="crearCita" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-teal">
                <h4 class="modal-title" id="crearCita">
                    <i class="fas fa-plus mr-2"></i>
                    Nueva Cita
                </h4>
                <button type="button" class="btn-close" aria-label="Cerrar" title="Cerrar"
                    onclick="cerrarModal('createCita', 'crear_cita')"></button>
            </div>
            <div class="modal-body">
                <form class="grid--responsive" id="crear_cita">
                    {!! csrf_field() !!}
                    <!-- doctor -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_doctor_cita">Doctor<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_doctor_cita" id="c_doctor_cita"
                            aria-label="Doctor de la cita" aria-describedby="input_c_doctor_cita" required>
                            <option selected disabled value="">Seleccione doctor...</option>
                            @foreach ($dataDoctores as $doctor)
                                <option value="{{ $doctor['codigoDoctor'] }}">{{ $doctor['nombreDoctor'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- paciente -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_paciente_cita">Paciente<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_paciente_cita" id="c_paciente_cita"
                            aria-label="Paciente de la cita" aria-describedby="input_c_paciente_cita" required>
                            <option selected disabled value="">Seleccione paciente...</option>
                            @foreach ($dataPacientes as $paciente)
                                <option value="{{ $paciente['codigoPaciente'] }}">{{ $paciente['nombrePaciente'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- estado de la cita -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_estado_cita">Estado<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_estado_cita" id="c_estado_cita"
                            aria-label="Estado de la cita" aria-describedby="input_c_estado_cita" required>
                            <option selected disabled value="">Seleccione estado...</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->codigoEstado }}">{{ $estado->estadoCita }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- tipo de cita -->
                    <div class="input-group">
                        <label class="input-group-text" for="c_tipo_cita">Tipo<span
                                class="text-danger">*</span></label>
                        <select class="form-select" name="c_tipo_cita" id="c_tipo_cita" aria-label="Tipo de cita"
                            aria-describedby="input_c_tipo_cita" required>
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
                        <input type="date" class="form-control" name="c_fecha_inicio_cita" id="c_fecha_inicio_cita"
                            aria-label="Fecha de Inicio la cita" aria-describedby="input_c_fecha_inicio_cita"
                            placeholder="Ingrese fecha de inicio" required>
                        <!--  -->
                        <input type="time" class="form-control" name="c_hora_inicio_cita" id="c_hora_inicio_cita"
                            aria-label="Hora de Inicio de la ciat" aria-describedby="input_c_hora_inicio_cita"
                            placeholder="Ingrese hora de inicio" required>
                        <!--  -->
                    </div>
                    <!-- fecha y hora final de la cita -->
                    <div class="input-group">
                        <label class="input-group-text">Final<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="c_fecha_final_cita" id="c_fecha_final_cita"
                            aria-label="Fecha final de la cita" aria-describedby="input_c_fecha_final_cita"
                            placeholder="Ingrese fecha de final" required>
                        <!--  -->
                        <input type="time" class="form-control" name="c_hora_final_cita" id="c_hora_final_cita"
                            aria-label="Hora final de la cita" aria-describedby="input_c_hora_final_cita"
                            placeholder="Ingrese hora de final" required>
                        <!--  -->
                    </div>
                    <!-- descripción -->
                    <div class="input-group grid--row__extend">
                        <label class="input-group-text" for="c_descripcion_cita">Descripción</label>
                        <textarea class="form-control" name="c_descripcion_cita" id="c_descripcion_cita" aria-label="Descripción de la cia"
                            aria-describedby="input_c_descripcion_cita" placeholder="Ingrese la descripción (Opcional)"
                            required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="crear_cita">Guardar</button>
                <button class="btn btn-danger" onclick="cerrarModal('createCita', 'crear_cita')">Cancelar</button>
            </div>
        </div>
    </div>
</div>
