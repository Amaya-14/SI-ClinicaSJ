<div>
    <form action="" method="post">
        {!! csrf_field() !!}
        <section class="card">
            <div class="card-header">
                <h3 class="card-title m-0">Generar reporte</h3>
                <div class="card-tools m-0">
                    <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
                    <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#modalInstrucciones"
                        title="información"></i>
                </div>
                <!-- card-tools -->
            </div>
            <!-- card-header -->
            <div class="card-body grid--responsive">
                <div class="input-group">
                    <label class="input-group-text" for="c-tipo-reporte">Tipo de Reporte</label>
                    <select class="form-select" name="c-tipo-reporte" id="c-tipo-reporte" aria-label="Tipo de reporte"
                        aria-describedby="input-c-tipo-reporte" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                    </select>
                </div><!-- tipo de reporte -->

                <div class="input-group">
                    <label class="input-group-text" for="rango-fecha">Rango de fecha</label>
                    <input type="date" class="form-control" name="rango-fecha-inicio" id="rango-fecha"
                        aria-label="Fehca de inicio" aria-describedby="input-rango-fecha-inicio" required>
                    <input type="date" class="form-control" name="rango-fecha-final" id="rango-fecha"
                        aria-label="Fecha final" aria-describedby="input-rango-fecha-final" required>
                </div><!-- fecha -->
            </div>
            <!-- card-body -->
            <div class="card-footer d-flex justify-content-end">
                <x-adminlte-button class="ml-1" type="submit" theme="primary" label="Generar" />
                <x-adminlte-button class="ml-1" type="reset" theme="danger" label="Cancelar" />
            </div>
            <!-- card-footer -->
        </section>
        <!-- card -->
    </form>
</div>
