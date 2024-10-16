<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia si tienes un usuario específico
$password = ""; // Agrega tu contraseña de MySQL
$dbname = "SistemaNotas"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST['username'];
$contraseña = $_POST['password'];

// Consulta para verificar si el usuario y la contraseña coinciden
$sql = "SELECT * FROM Alumno WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si los datos son correctos, redirige al sistema del boletín
    header("Location: boletin.php");
} else {
    // Si los datos son incorrectos, muestra un error
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href = 'index.html';</script>";
}

$conn->close();
?>
