function aviso3() {
    Swal.fire({
        titleText: "¿Estas seguro que quieres salir? ",
        text: "Si dices que si tendras que volver a iniciar sesión.",
        imageUrl: './img/imgexcla.png',
        imageWidth: 200,
        imageHeight: 200,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        background: '#white',
        confirmButtonText: 'Sí, salir',
        cancelButtonText: 'No estoy seguro'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = './logout.php';
        }
    })

}