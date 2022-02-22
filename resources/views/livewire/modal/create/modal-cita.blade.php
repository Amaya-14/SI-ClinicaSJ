<div>
    <form action="" method="post">
        {!! csrf_field() !!}

        <x-adminlte-modal id="createCita" title="Nueva Cita" size="lg" theme="teal" icon="fas fa-plus" v-centered
            static-backdrop scrollable>
            <section class="grid--responsive">
                <div class="input-group">
                    <label class="input-group-text" for="doctor">Doctor</label>
                    <select class="form-select" name="doctor" id="doctor" aria-label="doctor"
                        aria-describedby="input-doctor" required>
                        <option selected disabled value="">Seleccione doctor...</option>
                        <option value="H">doctor 1</option>
                        <option value="M">doctor 2</option>
                    </select>
                </div><!-- Doctor -->

                <div class="input-group">
                    <label class="input-group-text" for="paciente">Paciente</label>
                    <select class="form-select" name="paciente" id="paciente" aria-label="paciente"
                        aria-describedby="input-paciente" required>
                        <option selected disabled value="">Seleccione paciente...</option>
                        <option value="H">paciente 1</option>
                        <option value="M">paciente 2</option>
                    </select>
                </div><!-- Paciente -->

                <div class="input-group">
                    <label class="input-group-text" for="estado">Estado</label>
                    <select class="form-select" name="estado" id="estado" aria-label="estado"
                        aria-describedby="input-estado" required>
                        <option selected disabled value="">Seleccione estado...</option>
                        <option value="H">estado 1</option>
                        <option value="M">estado 2</option>
                    </select>
                </div><!-- Estado -->

                <div class="input-group">
                    <label class="input-group-text" for="tipo">Tipo</label>
                    <select class="form-select" name="tipo" id="tipo" aria-label="tipo" aria-describedby="input-tipo"
                        required>
                        <option selected disabled value="">Seleccione tipo...</option>
                        <option value="H">tipo 1</option>
                        <option value="M">tipo 2</option>
                    </select>
                </div><!-- Tipo -->

                <div class="input-group">
                    <label class="input-group-text" for="fecha-inicio">Inicio</label>
                    <input type="date" class="form-control" name="fecha-inicio" id="fecha-inicio"
                        aria-label="Fecha Inicio" aria-describedby="input-fecha-inicio"
                        placeholder="Ingrese fecha de inicio" required>
                    <input type="time" class="form-control" name="hora-inicio" id="hora-inicio"
                        aria-label="Hora Inicio" aria-describedby="input-hora-inicio"
                        placeholder="Ingrese hora de inicio" required>
                </div><!-- Inicio -->

                <div class="input-group">
                    <label class="input-group-text" for="fecha-final">Final</label>
                    <input type="date" class="form-control" name="fecha-final" id="fecha-final"
                        aria-label="Fecha final" aria-describedby="input-fecha-final"
                        placeholder="Ingrese fecha de final" required>
                    <input type="time" class="form-control" name="hora-final" id="hora-final" aria-label="Hora final"
                        aria-describedby="input-hora-final" placeholder="Ingrese hora de final" required>
                </div><!-- Final -->

                <div class="input-group grid--row__extend">
                    <label class="input-group-text" for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" aria-label="descripcion"
                        aria-describedby="input-descripcion" placeholder="Ingrese su descripción (Opcional)"
                        required></textarea>
                </div><!-- descripción -->
            </section>
            <x-slot name="footerSlot">
                <x-adminlte-button type="submit" theme="success" label="Guardar" />
                <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
            </x-slot>
        </x-adminlte-modal><!-- -->
    </form><!-- -->
</div>
