function abrirModalOcupado(idMesa) {
    var campo_id = document.getElementById('id_mesa_modal_comensales');
    campo_id.value = idMesa;

    var modal = document.getElementById('modal-comensales-container');
    modal.style.display = "flex";
}

function abrirModalMantenimiento(idMesa) {
    var campo_id = document.getElementById('id_mesa_modal_mantenimineto');
    campo_id.value = idMesa;

    var modal = document.getElementById('modal-mantenimiento-container');
    modal.style.display = "flex";
}

function abrirModalLiberar(idMesa) {
    var campo_id = document.getElementById('id_mesa_modal_liberar');
    campo_id.value = idMesa;

    var modal = document.getElementById('modal-liberar-container');
    modal.style.display = "flex";
}

function cerrarModales() {
    var modales = document.getElementsByClassName('modal-container');

    for (let i = 0; i < modales.length; i++) {
        modales[i].style.display = 'none';
    }
}