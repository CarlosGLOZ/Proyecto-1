function email(url) {
    Swal.fire({
            title: "Campo EMAIL vacio",
            imageUrl: '../static/img/imgerror.png',
            imageWidth: 200,
            imageHeight: 200,
            background: 'white',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Volver'
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
}
function psw(url) {
    Swal.fire({
            title: "Campo PASSWORD vacio",
            imageUrl: '../static/img/imgerror.png',
            imageWidth: 200,
            imageHeight: 200,
            background: 'white',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Volver'
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
}

function email2(url) {
    Swal.fire({
            title: "Email no válido",
            text:'correo@correo.com',
            imageUrl: '../static/img/imgerror.png',
            imageWidth: 200,
            imageHeight: 200,
            background: 'white',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Volver'
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
}