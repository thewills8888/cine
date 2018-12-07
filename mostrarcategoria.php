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
        <h1>Mostrar Datos</h1>
    </header>
    <section>
        <article>
            <?php
            $servidor = "localhost";
            $usuario = "root";
            $password = "root";
            $nombreBD = "pelicula";
 
            $conexion = new mysqli($servidor,$usuario,$password,$nombreBD);

            if($conexion -> connect_error){
                die("conexión fallida".$conexion -> connect_error);
            }
            echo "conexión realizada con exito";
            echo "<br>";

            $sql = "select id,nombre,cargo,clave from categoria;";
            $resultados = $conexion -> query($sql);

            if($resultados -> num_rows > 0){
                while($row = $resultados -> fetch_assoc()){
                    echo "ID : ".$row["id"].", ID CLIENTE: ".$row["id_cliente"].", Nombre: ".$row["nombre"].", CARGO: ".$row["cargo"].", CLAVE: ".$row["clave"]."<br>";
                }
            }else{
                echo "no hay datos";
            }
            ?>
        </article>
    </section>
</body>
</html>