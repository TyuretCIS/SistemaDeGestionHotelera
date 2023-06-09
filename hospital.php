<?php
$host = 'localhost';
$dbname = 'hospital';
$user = 'root';
$pass = '';

try {
    // Establecer la conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);

    // Configurar el modo de error para ver opciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Resto del código para ejecutar consultas y operaciones en la base de datos
    
    echo 'Conexión exitosa.';
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
$insertar_pacientes="INSERT INTO pacientes(sip,dni,nombre,telefono)
VALUES('','','','',)"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="stylesheet" href="css/hospital.css">
    <title>Hospital Sanador</title>
</head>
<body>
    <h1>Pacientes</h1>

    <div id="listado"></div>
    <script>
        // Utilizando JavaScript para cargar el archivo PHP en el elemento div
        fetch('hospital.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('listado').innerHTML = data;
            })
            .catch(error => {
                console.error('Error al cargar el listado de hospital:', error);
            });
    </script>


    <table>
        <tr>
            <th> ID </th>
            <th> Nombre </th>
            <th> Apellidos </th>
            <th> Género </th>
            <th> Fecha de admisión </th>
            <th> Enfermedad </th>
        </tr>
        <tr>
            <td> 123 </td>
            <td> Guillermo </td>
            <td> Roca Rocamora </td>
            <td> Hombre </td>
            <td> 22 de enero de 2023 </td>
            <td> Fiebre fuerte </td>
            <td><a href="https://www.otro-lugar.com" class="boton">Editar</a></td>
        </tr>
    </table>

    <br>

    <form action="insert.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="number" name="edad" placeholder="Edad">
        <input type="text" name="genero" placeholder="Género">
        <input type="date" name="fecha_de_admision" placeholder="Fecha de Admisión">
        <input type="text" name="enfermedad" placeholder="Enfermedad">
        <input type="submit" value="Añadir registro">
    </form>
    <script src="script.js"></script>

</body>
</html>