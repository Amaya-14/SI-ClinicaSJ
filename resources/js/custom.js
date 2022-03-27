Livewire.on("abrirModal", function (id) {
    $("#" + id).modal("show");
});

Livewire.on("cerrarModal", function (id) {
    $("#" + id).modal("hide");
    $('#tabla-pacientes').DataTable().ajax.reload();
});
