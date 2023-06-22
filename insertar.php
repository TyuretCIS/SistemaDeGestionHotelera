<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario de Paciente</title>
</head>
<body>
    <h1>Formulario de Paciente</h1>

    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="sip">SIP:</label>
        <input type="text" id="sip" name="sip" required>

        <label for="dni">SIP:</label>
        <input type="text" id="dni" name="dni" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>

<?php
$host = "localhost";
$database = "hospital";
$username = "root";
$pass = "";


if (isset($_POST )&&!empty($_POST)){
    try {
        // Establecer la conexión PDO
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4"
        $pdo = new PDO("$dsn, $username, $password);
    print_r($_POST);
    
        // Configurar el modo de error para ver opciones
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $insertar_pacientes="INSERT INTO pacientes(sip,dni,nombre,telefono)
        VALUES(':sip',':dni',':nombre',':telefono',)";
        $array = [
            ":sip" => $_POST["sip"], ":dni" => $_POST["dni"], ":nombre" => $_POST["nombre"], ":telefono" => $_POST["telefono"]
        ];
        $stmt=$pdo->prepare($insertar_pacientes);
        $stmt->execute($array);

        // Resto del código para ejecutar consultas y operaciones en la base de datos
        
        
    } catch (PDOException $e) {
        echo 'Error de conexión: ' . $e->getMessage();
    }
}

?>