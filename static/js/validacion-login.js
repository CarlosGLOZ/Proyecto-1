var validaFormulario = function() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var validacion = true;
    if (email.value == null || email.value.length == 0 || /^\s+$/.test(email.value)) {
        validacion = false;
        window.location.href = "../controller/login_controller.php?correo=mal";
    } else if (email.value == null || email.value.length == 0 || !(/\S+@\S+\.\S+/.test(email.value))) {
        validacion = false
        window.location.href = "../controller/login_controller.php?correo=malEstructurado";
    } else if (password.value === null || password.value === '') {
        validacion = false;
        window.location.href = "../controller/login_controller.php?psw=mal";
    }
    return validacion;


}