function aviso3() {
    Swal.fire({
        titleText: "¿Estas seguro que quieres salir? ",
        text: "Si dices que si tendras que volver a iniciar sesión.",
        imageUrl: '../static/img/imgexcla.png',
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
            window.location.href = '../view/logout.php';
        }
    })

}
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

function test() {
    // alert('sdvf')
    // console.log('ahdb')
    var test = document.getElementById('test');
    test.innerHTML = '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Modal title</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">...</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div></div></div></div>';
}