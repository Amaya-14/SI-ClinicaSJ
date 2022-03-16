const { isEmpty } = require("lodash");

/**/
let modal = document.querySelectorAll(".modal");
console.log(modal);
let formulario = document.getElementsByName("form");

/* */
let idModal;
let btn = document.querySelectorAll(".btn-editar");
let arrOld = [];
let inputs;
const TOAST = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 4000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

/* */
document.addEventListener("click", (evento) => {
    switch (evento.target.id) {
        case "editar-1":
            toggleEdicion(
                true,
                "#editar-1",
                "#actualizar-1",
                "#cancelar-1",
                "#inputs-u-1"
            );
            break;
        case "cancelar-1":
            toggleEdicion(
                false,
                "#editar-1",
                "#actualizar-1",
                "#cancelar-1",
                "#inputs-u-1",
                "#form-u-1"
            );
            break;
        case "editar-2":
            toggleEdicion(
                true,
                "#editar-2",
                "#actualizar-2",
                "#cancelar-2",
                "#inputs-u-2"
            );
            break;
        case "cancelar-2":
            toggleEdicion(
                false,
                "#editar-2",
                "#actualizar-2",
                "#cancelar-2",
                "#inputs-u-2",
                "#form-u-2"
            );
            break;
        case "editar-3":
            toggleEdicion(
                true,
                "#editar-3",
                "#actualizar-3",
                "#cancelar-3",
                "#inputs-u-3"
            );
            break;
        case "cancelar-3":
            toggleEdicion(
                false,
                "#editar-3",
                "#actualizar-3",
                "#cancelar-3",
                "#inputs-u-3",
                "#form-u-3"
            );
            break;
        case "editar-4":
            toggleEdicion(
                true,
                "#editar-4",
                "#actualizar-4",
                "#cancelar-4",
                "#inputs-u-4"
            );
            break;
        case "cancelar-4":
            toggleEdicion(
                false,
                "#editar-4",
                "#actualizar-4",
                "#cancelar-4",
                "#inputs-u-4",
                "#form-u-4"
            );
            break;
        case "cerrar-modal-u":
            let ok = true;

            btn.forEach((element) => {
                if (element.classList.contains("d-none")) {
                    console.log("hola");
                    TOAST.fire({
                        icon: "info",
                        title: "¡Aun tienes cambios por realizar!",
                        text: "Cancela o guarda tus cambios.",
                    });
                    ok = false;
                }
            });

            if (ok) {
                $("#" + idModal).modal("hide");
            }

            break;
        case "cerrar-modal-c":
            let ok2 = true;
            for (let i = 0; i < inputs.elements.length; i++) {
                if (inputs.elements[i].value != arrOld[i]) {
                    ok2 = false;
                }
            }

            if (!ok2) {
                Swal.fire({
                    icon: "question",
                    title: "¿En realidad deas cancelar esta acción?",
                    text: "¡Tus cambios se perderán!",
                    confirmButtonText: "Si, cancelar",
                    showDenyButton: true,
                    denyButtonText: `No`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        ok = true;
                        cerrarModal(idModal);
                    }
                });
            }

            if (ok2) cerrarModal(idModal);
            break;
        default:
            break;
    }
});

/* */
document.addEventListener("hide.bs.modal", (event) => {
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
});

/* */
document.addEventListener("shown.bs.modal", (event) => {
    arrOld = [];
    inputs = document.querySelector("#" + event.target.getAttribute("name"));

    if (idModal != event.target.id) {
        idModal = event.target.id;
        console.log(idModal);
    }

    for (const el of inputs.elements) {
        arrOld.push(el.value);
    }
});

/* */
function toggleEdicion(
    bool,
    btnEditar,
    btnActualizar,
    btnCancelar,
    input,
    form = ""
) {
    if (bool) {
        document.querySelector(btnEditar).classList.add("d-none");
        document.querySelector(btnActualizar).classList.remove("d-none");
        document.querySelector(btnCancelar).classList.remove("d-none");
        document.querySelector(input).removeAttribute("disabled");
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
        }
    });
}

/* */
function limpiarFormulario(id) {
    document.querySelector(id).reset();
}

/* */
function cerrarModal(id) {
    $("#" + id).modal("hide");
}

/*let fields = document.querySelector("#inputs-u-cita");
console.log(fields.elements);
let arr = [];
console.log(arr);

console.log(arr);

function onChange(data) {
    data.old = [];
    for (let i = 0; i < data.elements.length; i++) {
        data.old.push(data.elements[i].value);
    }
}

onChange(fields);
console.log(fields);

const alerta = Swal.mixin({
    confirmButtonText: "Si, cancelar",
    showDenyButton: true,
    denyButtonText: `No`,
});

alerta.fire({
    title: "CONFIRMAR CITA",
    html:
        '<b>Doctor:</b> Doctor' + '<br>' +
        "<b>Empleado:</b> Empleado" + '<br>' +
        "<b>Tipo:</b> Tipo" + '<br>' +
        "<b>Estado:</b> Estado" + '<br>' +
        "<b>Fecha:</b> Fecha" + '<br>' +
        "<b>Hora:</b> Hora" + '<br>' +
        "<b>Descripción:</b> Estado"
});

const ALERT = Swal.mixin({
    title: "¿En realidad deas cancelar esta acción?",
    text: "¡Tus cambios se perderán!",
    allowOutsideClick: false,
    showConfirmButton: true,
});*/
