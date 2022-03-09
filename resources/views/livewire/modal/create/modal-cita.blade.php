<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <x-adminlte-modal id="createCita" title="Nueva Cita" size="lg" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section class="grid--responsive">
                <div class="input-group">
                    <label class="input-group-text" for="c-doctor-cita">Doctor<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-doctor-cita" id="c-doctor-cita" aria-label="Doctor de la cita"
                        aria-describedby="input-c-doctor-cita" required>
                        <option selected disabled value="">Seleccione doctor...</option>
                        <option value="1">doctor 1</option>
                        <option value="2">doctor 2</option>
                    </select>
                </div>
                <!-- Doctor -->
                <div class="input-group">
                    <label class="input-group-text" for="c-paciente-cita">Paciente<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-paciente-cita" id="c-paciente-cita"
                        aria-label="Paciente de la cita" aria-describedby="input-c-paciente-cita" required>
                        <option selected disabled value="">Seleccione paciente...</option>
                        <option value="1">paciente 1</option>
                        <option value="2">paciente 2</option>
                    </select>
                </div>
                <!-- Paciente -->
                <div class="input-group">
                    <label class="input-group-text" for="c-estado-cita">Estado<span
                            class="text-danger">*</span></label>
                    <select class="form-select" name="c-estado-cita" id="c-estado-cita"
                        aria-label="Estado de la cita" aria-describedby="input-c-estado-cita" required>
                        <option selected disabled value="">Seleccione estado...</option>
                        <option value="H">estado 1</option>
                        <option value="M">estado 2</option>
                    </select>
                </div>
                <!-- Estado -->
                <div class="input-group">
                    <label class="input-group-text" for="c-tipo-cita">Tipo<span class="text-danger">*</span></label>
                    <select class="form-select" name="c-tipo-cita" id="c-tipo-cita" aria-label="Tipo de cita"
                        aria-describedby="input-c-tipo-cita" required>
                        <option selected disabled value="">Seleccione tipo...</option>
                        <option value="H">tipo 1</option>
                        <option value="M">tipo 2</option>
                    </select>
                </div>
                <!-- Tipo -->
                <div class="input-group">
                    <label class="input-group-text">Inicio<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="c-fecha-inicio-cita" id="c-fecha-inicio-cita"
                        aria-label="Fecha de Inicio la cita" aria-describedby="input-c-fecha-inicio-cita"
                        placeholder="Ingrese fecha de inicio" required>
                    <!--  -->
                    <input type="time" class="form-control" name="c-hora-inicio-cita" id="c-hora-inicio-cita"
                        aria-label="Hora de Inicio de la ciat" aria-describedby="input-c-hora-inicio-cita"
                        placeholder="Ingrese hora de inicio" required>
                    <!--  -->
                </div>
                <!-- Inicio -->
                <div class="input-group">
                    <label class="input-group-text">Final<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="c-fecha-final-cita" id="c-fecha-final-cita"
                        aria-label="Fecha final de la cita" aria-describedby="input-c-fecha-final-cita"
                        placeholder="Ingrese fecha de final" required>
                    <!--  -->
                    <input type="time" class="form-control" name="c-hora-final-cita" id="c-hora-final-cita"
                        aria-label="Hora final de la cita" aria-describedby="input-c-hora-final-cita"
                        placeholder="Ingrese hora de final" required>
                    <!--  -->
                </div>
                <!-- Final -->
                <div class="input-group grid--row__extend">
                    <label class="input-group-text" for="c-descripcion-cita">Descripción</label>
                    <textarea class="form-control" name="c-descripcion-cita" id="c-descripcion-cita"
                        aria-label="Descripción de la cia" aria-describedby="input-c-descripcion-cita"
                        placeholder="Ingrese la descripción (Opcional)" required></textarea>
                </div>
                <!-- descripción -->
            </section>
            <!-- -->
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button type="reset" theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
            <!-- -->
        </x-adminlte-modal>
        <!-- -->
    </form>
    <!-- -->
</div>
