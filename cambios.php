<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['usuario']!='admin'){
    header('Location: index.php');
}
?>
<?php   
require "php/conexionBD.php";
 
$_SESSION['id_prod'] = '';
$_SESSION['nombre_prod'] = '';
$_SESSION['descripcion'] = '';
$_SESSION['cantidad'] = '';
$_SESSION['precio'] = '';
$_SESSION['imagen'] = '';
$_SESSION['descuento'] = '';
$_SESSION['categoria'] = '';

if(isset($_POST['submit'])){
    $modificar = $_POST['modificar'];
    $_SESSION['modificar2']=$modificar;
    $sq12= "SELECT * FROM producto WHERE id_prod='$modificar'";
    $resultado = $conexion -> query($sq12);
    while($fila = $resultado -> fetch_assoc()){
        $_SESSION['id_prod'] = $fila['id_prod'];
        $_SESSION['nombre_prod'] = $fila['nombre_prod'];
        $_SESSION['descripcion'] = $fila['descripcion'];
        $_SESSION['cantidad'] = $fila['cantidad'];
        $_SESSION['precio'] = $fila['precio'];
        $_SESSION['imagen'] = $fila['imagen'];
        $_SESSION['descuento'] = $fila['descuento'];
        $_SESSION['categoria'] = $fila['categoria'];
    }
}

if(isset($_POST['mod'])){
    $uno = $_POST['id_prod2'];
    $dos = $_POST['nombre_prod2'];
    $tres = $_POST['descripcion2'];
    $cuatro = $_POST['cantidad2'];
    $cinco = $_POST['precio2'];
    $seis = $_POST['imagen2'];
    $siete = $_POST['descuento2'];
    $ocho = $_POST['categoria2'];
    $modificar1 = $_SESSION['modificar2'];

    $ne = "UPDATE producto SET id_prod='$uno', nombre_prod='$dos', descripcion='$tres', cantidad='$cuatro', precio='$cinco', imagen='$seis', descuento='$siete', categoria='$ocho' WHERE id_prod='$modificar1'";
    $fin = $conexion -> query($ne);
}

if(isset($_POST['subir'])) {
    $directorio = 'image/';
    $archivo = $directorio . basename($_FILES['imagen']['name']);
    $esImagen = getimagesize($_FILES['imagen']['tmp_name']);
    if($esImagen !== false) {
        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo)) {
            echo "La imagen ". htmlspecialchars(basename($_FILES['imagen']['name'])). " ha sido subida correctamente.";
        } else {
            echo "Hubo un error al subir la imagen.";
        }
    } else {
        echo "El archivo no es una imagen válida.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylescambios.css">
    <title>Cambios</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: small;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
    <script src="js/mostrarProductosAJAX.js">
    </script>
</head>
<body>
    <?php include "header.php" ?>
    <h2>Modificar Cuentas</h2>
    <?php        
    $sql = 'select * from producto';
    $resultado = $conexion -> query($sql); 
    if ($resultado -> num_rows){ 
    ?>  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
        <br>
        <select class="custom-select" name='modificar'> 
            <?php
            $salida='<table> 
                <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>imagen</th>
                <th>descripcion</th>
                <th>categoria</th>
                </tr>';
                while( $fila = $resultado -> fetch_assoc() ){
                    echo '<option value="'.$fila["id_prod"].'">'.$fila["nombre_prod"].'</option>';
                    $salida.= '<tr>';
                    $salida.= '<td>'.$fila["id_prod"]. '</td>';
                    $salida.= '<td>'.$fila["nombre_prod"]. '</td>';
                    $salida.= '<td>'.$fila["descripcion"]. '</td>';
                    $salida.= '<td>'.$fila["cantidad"]. '</td>';
                    $salida.= '<td>'.$fila["precio"]. '</td>';
                    $salida.= '<td>'.$fila["imagen"]. '</td>';
                    $salida.= '<td>'.$fila["descripcion"]. '</td>';
                    $salida.= '<td>'.$fila["categoria"]. '</td>';
                    $salida.= '</tr>';
                }
                $salida.= '</table>';
                ?>
            </select>
            <button type="submit" class="enviar" value="submit" name="submit">Seleccionar</button>               
        </form>
        <?php
        }
        else{
            echo "no hay datos";
        }
        //echo $salida 
    ?>
    <div class="contenedor-formulario">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>   
            <label for="id">ID producto</label>
            <input type="number" name="id_prod2" value="<?php echo $_SESSION["id_prod"]; ?>">

            <label for="nombre">Nombre del producto:</label>
            <input type="text" name="nombre_prod2" value="<?php echo $_SESSION["nombre_prod"]; ?>">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion2" id="" cols="22" rows="5"><?php echo $_SESSION["descripcion"]; ?></textarea><br>

            <label for="cantidad">Cantidad:</label>
            <input type="text" name="cantidad2" value="<?php echo $_SESSION['cantidad']; ?>">

            <label for="precio">Precio</label>
            <input type="text" name="precio2" value="<?php echo $_SESSION['precio']; ?>">

            <label for="imagen">Imagen:</label>
            <input type="text" name="imagen2" value="<?php echo $_SESSION['imagen']; ?>">

            <label for="descuento">Descuento:</label>
            <input type="text" name="descuento2" value="<?php echo $_SESSION['descuento']; ?>">

            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria2" value="<?php echo $_SESSION['categoria']; ?>">
                    
            <button type="submit" class="enviar" name="mod">Modificar</button>
        </form>       
    </div>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <label for="imagen">Subir nueva imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/png, image/jpeg"><br>
            <button type="submit" class="enviar" name="subir">subir</button>
        </form>
    </div>
    <button onclick="mostrarProductos()" class="enviar">Mostrar Productos</button>
    <br><br>
    <div id="tablaProductos">
    </div>
</body>
</html>