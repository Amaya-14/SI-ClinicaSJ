<div class="card">
    <div class="card-header">
        <h3 class="card-title m-0">{{ $titulo }}</h3>
        <div class="card-tools m-0">
            <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
            {{-- <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#{{ $idModalInstruccion }}"
                title="información"></i> --}}
        </div>
        <!-- card-tools -->
    </div>
    <!-- card-header -->
    <div class="card-body">
        <div class="d-flex justify-content-end align-items-center mb-3">
            <x-adminlte-button class="btn-sm bg-teal" label="Nuevo registro" icon="fas fa-plus" data-bs-toggle="modal"
                data-bs-target="#{{ $idBoton }}" />
        </div>
        <div>
            {{ $tabla }}
        </div>
    </div>
    <!-- card-body -->
    <div class="card-footer d-flex justify-content-end">
    </div>
    <!-- card-footer -->
</div>
<!-- card -->
