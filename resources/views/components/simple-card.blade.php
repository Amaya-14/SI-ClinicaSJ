<div class="card">
    <div class="card-header">
        <h3 class="card-title m-0">{{ $titulo }}</h3>
        <div class="card-tools m-0">
            <!-- ¡Aquí se pueden colocar botones, etiquetas y muchas otras cosas! -->
            <i class="fas fa-info-circle fs-5 btn__info" data-toggle="modal" data-target="#{{ $idModalInstruccion }}"
                title="información"></i>
        </div>
        <!-- card-tools -->
    </div>
    <!-- card-header -->
    <div class="card-body">
        {{ $content }}
    </div>
    <!-- card-body -->
    <div class="card-footer d-flex justify-content-end">
    </div>
    <!-- card-footer -->
</div>
<!-- card -->
