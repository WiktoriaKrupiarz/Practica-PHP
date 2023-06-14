<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form method="post" action="">
            
            <div class="form-group">
                <div class="form-label">
                    <label for="name">Nombre<span>*</span></label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="form-label">
                    <label for="surname">Apellido<span>*</span></label>
                    <input type="text" name="surname" id="surname" required>
                </div>

                <div class="form-label">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-label">
                    <input type="submit" name="btn" value="Suscribirse">
                </div>
            </div>  

<?php
if($_POST){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
     
    //Credenciales de conexion
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "curso_sql";
    //Creamos la conexion a la bbdd
    $conx = new mysqli($server, $username, $password, $dbname);
    //Confirmamos la conexion
    if($conx->connect_error){
        die("Conexion fallida: " . $conx->connect_error);
    }

    $sql = "INSERT INTO usuario (nombre, apellido, email) VALUES ('$name', '$surname', '$email')";

    if($conx->query($sql) === TRUE){
        echo "Nuevo registro";
    } else {
        echo "Error " . $sql . "<br>" . $conx->error;
    }

    $conx->close();
}
?>

        </form>
    </div>
</body>
</html>