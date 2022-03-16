/* variables */
let btnHidden = document.querySelectorAll(".btn-hidden");
let inputEditar = document.querySelectorAll(".input-editar");
let idModal;
let btn = document.querySelectorAll(".btn-editar");
let nav = document.querySelectorAll(".nav-u-persona");
console.log(nav);

/* */
document.addEventListener("click", (event) => {
    switch (event.target.id) {
        
        case "editar-persona":
            toggleBotton(
                true,
                "#editar-persona",
                "#cancelar-persona",
                "#actualizar-persona",
                "#inputs-u-persona"
            );
            break;
        case "cancelar-persona":
            toggleBotton(
                false,
                "#editar-persona",
                "#cancelar-persona",
                "#actualizar-persona",
                "#inputs-u-persona",
                "#form-u-persona"
            );
            break;
        case "editar-telefono":
            toggleBotton(
                true,
                "#editar-telefono",
                "#cancelar-telefono",
                "#actualizar-telefono",
                "#inputs-u-telefono"
            );
            break;
        case "cancelar-telefono":
            toggleBotton(
                false,
                "#editar-telefono",
                "#cancelar-telefono",
                "#actualizar-telefono",
                "#inputs-u-telefono",
                "#form-u-telefono"
            );
            break;
        case "editar-correo":
            toggleBotton(
                true,
                "#editar-correo",
                "#cancelar-correo",
                "#actualizar-correo",
                "#inputs-u-correo"
            );
            break;
        case "cancelar-correo":
            toggleBotton(
                false,
                "#editar-correo",
                "#cancelar-correo",
                "#actualizar-correo",
                "#inputs-u-correo",
                "#form-u-correo"
            );
            break;
        case "editar-direccion":
            toggleBotton(
                true,
                "#editar-direccion",
                "#cancelar-direccion",
                "#actualizar-direccion",
                "#inputs-u-direccion"
            );
            break;
        case "cancelar-direccion":
            toggleBotton(
                false,
                "#editar-direccion",
                "#cancelar-direccion",
                "#actualizar-direccion",
                "#inputs-u-direccion",
                "#form-u-direccion"
            );
            break;
        case "cerrar-modal":
            let ok = true;
            btn.forEach((element) => {
                if (element.classList.contains("d-none")) {
                    Swal.fire({
                        icon: "question",
                        title: "¿En realidad deas cancelar esta acción?",
                        text: "¡Tus cambios se perderán!",
                        confirmButtonText: "Si, cancelar",
                        showDenyButton: true,
                        denyButtonText: `No`,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $("#" + idModal).modal("hide");
                        }
                    });
                    ok = false;
                }
            });

            if (ok) $("#" + idModal).modal("hide");
            break;
        default:
            break;
    }

    if (event.target.classList.contains("nav-u-persona")) {
        Swal.fire({
            icon: "question",
            title: "No puedes realizar esta acción",
            text: "Aun tienes cambios",
            confirmButtonText: "Si, cancelar",
            showDenyButton: true,
            denyButtonText: `No`,
        }).then((result) => {
            if (result.isConfirmed) {
                $("#" + idModal).modal("hide");
            }
        });
    }
});

/*document.addEventListener("hide.bs.modal", (event) => {
    if (
        event.target.matches("#updateTelefono") ||
        event.target.matches("#updateCorreo") ||
        event.target.matches("#updateDireccion")
    ) {
        $("#updatePaciente" || "#updateEmpleado").modal("show");
    }

    if (
        event.target.matches("#createTelefono") ||
        event.target.matches("#createCorreo") ||
        event.target.matches("#createDireccion")
    )
        $("#updatePaciente" || "#updateEmpleado").modal("show");

    if (event.target.matches("#crearPaciente")) {
        Swal.fire({
            icon: "question",
            title: "¿En realidad deas cancelar esta acción?",
            text: "¡Tus cambios se perderán!",
            confirmButtonText: "Si, cancelar",
            showDenyButton: true,
            denyButtonText: `No`,
        }).then((result) => {
            if (result.isConfirmed) {
                $("#crearPaciente").modal("show");
            }
        });
    }
});*/

document.addEventListener("shown.bs.modal", (event) => {
    if (idModal != event.target.id) {
        idModal = event.target.id;
        console.log(idModal);
    }
});

/* */
function toggleBotton(
    bool,
    btnEditar,
    btnActualizar,
    btnCancelar,
    input,
    form
) {
    if (bool) {
        document.querySelector(btnEditar).classList.add("d-none");
        document.querySelector(btnActualizar).classList.remove("d-none");
        document.querySelector(btnCancelar).classList.remove("d-none");
        document.querySelector(input).removeAttribute("disabled");
        return;
    }

    Swal.fire({
        icon: "question",
        title: "¿En realidad deas cancelar esta acción?",
        text: "¡Tus cambios se perderán!",
        confirmButtonText: "Si, cancelar",
        showDenyButton: true,
        denyButtonText: `No`,
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector(btnEditar).classList.remove("d-none");
            document.querySelector(btnActualizar).classList.add("d-none");
            document.querySelector(btnCancelar).classList.add("d-none");
            document.querySelector(input).setAttribute("disabled");
            limpiarFormulario(form);
            return;
        }
    });
}

/* */
function toggleEdicion(bool, input, form = "") {
    if (bool) {
        document.querySelector(input).removeAttribute("disabled");
        return;
    }

    document.querySelector(input).setAttribute("disabled");
    limpiarFormulario(form);
}

/* */
function limpiarFormulario(id) {
    document.querySelector(id).reset();
}

/* */
function cerrarModal(id) {
    $("#" + id).modal("hide");
}

/* funcionalidad del boton editar */
/*function habilitarEdicion(btnEditar, btnActualizar, btnCancelar, input) {
    document.querySelector(btnEditar).classList.add("d-none");
    document.querySelector(btnActualizar).classList.remove("d-none");
    document.querySelector(btnCancelar).classList.remove("d-none");
    document.querySelector(input).removeAttribute("disabled");
}*/

/* funcionalidad del boton cancelar */
/*function deshabilitarEdicion1(
    btnEditar,
    btnActualizar,
    btnCancelar,
    input,
    form
) {
    Swal.fire({
        icon: "question",
        title: "¿En realidad deas cancelar esta acción?",
        text: "¡Tus cambios se perderán!",
        confirmButtonText: "Si, cancelar",
        showDenyButton: true,
        denyButtonText: `No`,
    }).then((result) => {
    
        if (result.isConfirmed) {
            document.querySelector(btnEditar).classList.remove("d-none");
            document.querySelector(btnActualizar).classList.add("d-none");
            document.querySelector(btnCancelar).classList.add("d-none");
            document.querySelector(input).setAttribute("disabled");
            limpiarFormulario(form);
        }
    });
}*/
