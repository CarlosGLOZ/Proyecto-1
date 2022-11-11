function enviarFiltros(currentURL, filtros) {
    var filtros_finales = currentURL;

    for (let i = 0; i < filtros.length; i++) {
        if (i == 0) {
            filtros_finales = filtros_finales + '?' + filtros[i].id + '=' + filtros[i].value;
        } else {
            filtros_finales = filtros_finales + '&' + filtros[i].id + '=' + filtros[i].value;
        }
    }

    // console.log(filtros_finales)
    window.location.href = filtros_finales;
}

function limpiarFiltros(currentURL) {
    window.location.href = currentURL;
}