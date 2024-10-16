import java.sistemanotasql.Connection;

function validarFormulario() {
    // valores de usuario y contraseña
    var usuario = document.getElementById("username").value;
    var contraseña = document.getElementById("password").value;

    // el campo usuario no esté vacío
    if (usuario === "") {
        alert("Por favor, ingrese su nombre de usuario.");
        return false; // Evita el envío del formulario
    }

    // la contraseña debe de tener 10 caracteres
    if (contraseña.length < 10) {
        alert("La contraseña debe tener al menos 10 caracteres.");
        return false; // Evita el envío del formulario
    }

    // Si se cumplen, permite enviar el formulario
    return true;
}
