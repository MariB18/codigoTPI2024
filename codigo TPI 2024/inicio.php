$sql = "SELECT Contraseña FROM Alumno WHERE Usuario = '$usuario'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contraseña, $row['Contraseña'])) {
        header("Location: boletin.php");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href = 'index.html';</script>";
    }
}

