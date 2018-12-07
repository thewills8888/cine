<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Recibe datos</h1>
    </header>
    <section>
        <article>
            <?php
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $cargo = $_POST["cargo"];
            $antiguedad = $_POST["antiguedad"]
            ?>
        </article>
        <article>
            <h2>Conexión</h2>
            <?php
            $servidor = "localhost";
            $usuario = "root";
            $password = "root";
            $nombreBD = "carogoMusic";
 
            $conexion = new mysqli($servidor,$usuario,$password,$nombreBD);

            if($conexion -> connect_error){
                die("conexión fallida".$conexion -> connect_error);
            }
            echo "conexión realizada con exito";
            ?>
        </article>
        <article>
            <h2>Ingresar datos</h2>
            <?php
            $sql="insert into sucursal values('".$id."','".$nombre."','".$cargo."','".$antiguedad."');";
            if($conexion -> query($sql) == true){
                echo "datos ingresados correctamente";
            }else{
                echo "Error: ".$sql." ".$conexion -> connect_error;
            }
            $conexion -> close();
            ?>
        </article>
    </section>
</body>
</html>