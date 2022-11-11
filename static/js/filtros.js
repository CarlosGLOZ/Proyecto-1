function enviarFiltros(currentURL, filtros) {
    var filtros_finales = currentURL;

    for (let i = 0; i < filtros.length; i++) {
        filtros_finales = filtros_finales + '&' + filtros[i].id + '=' + filtros[i].value;
    }

    window.location.href = filtros_finales;
}

function limpiarFiltros(currentURL) {
    window.location.href = currentURL;
}