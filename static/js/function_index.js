function aviso() {
    Swal.fire({
        titleText: "¿Estas seguro? ",
        imageUrl: '../static/img/imgexcla.png',
        imageWidth: 200,
        imageHeight: 200,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        background: '#white',
        confirmButtonText: 'Sí',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../view/mostrar.php';
        }
    })

}